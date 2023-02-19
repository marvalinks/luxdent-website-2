@extends('layouts.frontend')

@section('content')
<style>
    .section-title p {
        text-align: justify;
    }
</style>
<div class="inner-banner inner-banner-bg">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Accounting</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Accounting</li>
            </ul>
        </div>
    </div>
</div>
<div class="enrolled-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>COMING SOON WITH ACCOUNTING SERVICES</h3>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection