@extends('layouts.app')

@section('content')
    <div class="row pg-nav">
        <a href="{{ route('student.register.course') }}" class="btn btn-default btn-icon-fixed"><span class="icon-menu-circle"></span> Purchase modules</a>
    </div>
    <div class="row">
        <div class="app-heading app-heading-small">
            <div class="title">
                <h2>My Payments</h2>
                <p>List of module payments</p>
            </div>
            <div class="heading-elements">
                <div class="input-group margin-right-5" style="width: 200px">
                    <div class="input-group-addon">
                        <span class="fa fa-search"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button class="btn btn-default btn-icon">
                    <span class="icon-printer"></span>
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-bordered table-striped margin-bottom-10">
                <thead>
                    <tr>
                        <th style="width: 12%;">Payment ID</th>
                        <th style="width: 15%;">Course</th>
                        <th style="width: 35%;">Modules</th>
                        <th style="width: 15%;">Amount Paid</th>
                        <th>Status</th>
                        <th style="width: 20%;">Reference</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($payments as $key => $payment)
                    <tr>
                        <td>{{$payment[0]->bundleid}}</td>
                        <td>{{$payment[0]->course->title}}</td>
                        <td>
                            @foreach ($payment as $pymt)
                            <span class="label label-success label-bordered">{{$pymt->module->name}}</span>
                            @endforeach
                        </td>
                        <td>{{number_format($payment->sum('amount_paid'), 2)}}</td>
                        <td>{{$payment[0]->verified ? 'Verified' : 'Pending'}}</td>
                        <td>
                            @if ($payment[0]->reference)
                                {{$payment[0]->reference}}
                            @else
                               <form autocomplete="off" action="{{route('student.pay.modules', [$payment[0]->bundleid])}}" method="post">
                                    @csrf
                                    <input type="text" required name="reference">
                                    <button class="btn btn-primary btn-sm" type="submit">submit</button>
                               </form>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <p>No payment loaded</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
    </div>
        
@endsection