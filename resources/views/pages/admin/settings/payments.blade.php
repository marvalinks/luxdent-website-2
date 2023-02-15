@extends('layouts.app')

@section('scripts')
<script type="text/javascript" src="/backend/js/app_faq.js"></script>
<script type="text/javascript" src="/backend/js/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
@endsection

@section('links')
    <style>
        .app-faq2 .app-faq-item{
            font-size: 14px;
            font-weight: 600;
        }
        .app-faq2 .app-faq-item-title{
            padding-bottom: 12px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- RECENT ACTIVITY -->
            <div class="block block-condensed">
                <div class="app-heading app-heading-small">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <p>Your latest course payments</p>
                    </div>
                    <div class="heading-elements">
                        <button class="btn btn-default btn-icon"><span class="icon-printer"></span></button> <button class="btn btn-default btn-icon"><span class="icon-sync"></span></button>
                    </div>
                </div>
                <div class="block-content margin-bottom-0">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <form action="{{route('admin.payments')}}" method="get">
                                @csrf
                                <div class="input-group pull-right">
                                    <div class="input-group-addon"><span class="fa fa-search"></span></div>
                                    <input type="text" name="reference" class="form-control" placeholder="Search reference" value="{{$reference}}" />
                                </div>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="listing margin-bottom-0">
                        @forelse ($payments as $payment)
                            <div class="listing-item listing-item-with-icon">
                                <span class="icon-film-play listing-item-icon"></span>
                                <h4 class="text-rg text-bold">{{$payment[0]->user->name}} <span class="text-muted pull-right">{{$payment[0]->updated_at}}</span></h4>
                                <div class="list-group list-group-inline">
                                    <div class="list-group-item col-md-4 col-sm-4">
                                        <span class="text-muted">Modules</span><br />
                                        <span class="text-bold">
                                            @foreach ($payment as $pymt)
                                            <span class="label label-warning label-bordered">{{$pymt->module->name}}</span>
                                            @endforeach
                                        </span>
                                    </div>
                                    <div class="list-group-item col-md-4 col-sm-4">
                                        <span class="text-muted">Amount</span><br />
                                        <span class="text-bold text-primary">£ {{number_format($payment->sum('amount_paid'), 2)}}</span>
                                    </div>
                                    <div class="list-group-item col-md-2 col-sm-2">
                                        <span class="text-muted">Reference</span><br />
                                        <span class="text-bold">
                                            {{$payment[0]->reference ?? '-'}}
                                        </span>
                                    </div>
                                    <div class="list-group-item col-md-2 col-sm-2">
                                        <span class="text-bold">
                                            @if (!$payment[0]->verified)
                                                @if ($payment[0]->reference)
                                                    <a onclick="return confirm('This action cannot be reversed..Ready to verify?')"
                                                    href="{{route('admin.verify.payments', [$payment[0]->bundleid])}}" class="btn btn-success btn-sm">
                                                    verify payment
                                                    </a>
                                                @else
                                                    <a href="#" class="btn btn-success btn-sm" disabled>
                                                    verify payment
                                                    </a>
                                                @endif
                                            @else
                                            <button class="btn btn-default btn-sm">Verified</button>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No payments available </p>
                        @endforelse
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
        
@endsection