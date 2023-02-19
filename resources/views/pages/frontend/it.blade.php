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
            <h3>Our IT Services</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Our IT Services</li>
            </ul>
        </div>
    </div>
</div>
<div class="enrolled-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>TO BOOK A LOCUM SERVICE</h3>
                        <p>
                            Lux Dent Agency supplies fully qualified and experienced Locum Dental Nurse and Hygienist in Greater London, Surrey, Birmingham and Manchester who 
                            strives to provide excellent dental health care service. All our nurses are well experience and fully qualified to deliver high standard and quality 
                            services in your dental premises. We also do Recruitment & Selection if you ever in need of a permanent staff.
                        </p>
                        <p>
                            Our prices are reasonably competitive and unbeatable in the market with No Admin Fee, No Emergency Fee and no Tax Fee and our clients are fully 
                            satisfied with our services and price.
                        </p>
                    </div>
                    
                </div>
            </div> --}}
            
            <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>Our IT services includes:</h3> <br>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> Website development</li>
                                    <li><i class="flaticon-check"></i> Custom CMS Development</li>
                                    <li><i class="flaticon-check"></i> Social Media Management</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> Mobile app development</li>
                                    <li><i class="flaticon-check"></i> Cloud-based server provisioning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection