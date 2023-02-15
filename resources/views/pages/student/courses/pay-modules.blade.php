@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="block-content">
            <form action="{{route('student.pay.modules', [$bundleid])}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered table-striped margin-bottom-10">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 15%;">Module ID</th>
                            <th style="width: 35%;">Name</th>
                            <th>Amount(£)</th>
                            <th>Course</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bundles as $key => $bundle)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$bundle->module->moduleid}}</td>
                            <td>{{$bundle->module->name}}</td>
                            <td>{{number_format($bundle->module->cost, 2)}}</td>
                            <td>{{$bundle->module->course->title}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <p>No modules loaded</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            
                <div style="width: 55%;margin-left: auto;">
                    <h5 class="tsm">VERIFY PAYMENT</h5>
                    <table class="table table-bordered table-hover" id="tft">
                        <thead>
                            <tr>
                                <th style="width: 82px;">Total Cost</th>
                                <th style="width: 82px;">Refernce ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">{{number_format($bundles->sum('amount_paid'))}}</td>
                                <td class="text-left">
                                    <input type="text" name="reference" required class="form-control">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="width: 25%;margin-left: auto;">
                    <button type="submit"  class="btn btn-info btn-icon-fixed"><span class="icon-menu-circle"></span> confirm payment</button>
                </div>
            </form>
            
        </div>
        
    </div>
        
@endsection