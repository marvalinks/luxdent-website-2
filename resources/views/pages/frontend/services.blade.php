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
            <h3>Our Locum Services</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Our Locum Services</li>
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
            </div>
            
            <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>All of our Locum staffs go through an extensive compliance process before joining our agency:</h3> <br>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> GDC registration check</li>
                                    <li><i class="flaticon-check"></i> BADN check</li>
                                    <li><i class="flaticon-check"></i> Immunisation check</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> Indemtity Insurance check</li>
                                    <li><i class="flaticon-check"></i> DBS or Disclosure Scotland check</li>
                                    <li><i class="flaticon-check"></i> Reference check</li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <p>
                            Our well treated staffs try to exceed a mile to provide excellent customer satisfaction. With positive working attitude 
                            we have never compromised on the quality and the services provided to the customer instant we believe in keeping the 
                            customers happy and providing them with products at a very competent price. Furthermore, our brilliant dental nurses will 
                            always offer you the best service with their constant positive attitude.
                        </p>
                        <br>
                        <h3>We provide the following locum dental services :</h3> <br>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> Locum dental nurse </li>
                                    <li><i class="flaticon-check"></i> Locum dental hygienist </li>
                                    <li><i class="flaticon-check"></i> Locum dentist  </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="enrolled-list">
                                    <li><i class="flaticon-check"></i> Locum ortho therapist</li>
                                    <li><i class="flaticon-check"></i> Locum receptionist</li>
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