@extends('layouts.frontend')

@section('content')
<div class="inner-banner inner-banner-bg">
    <div class="container">
        <div class="inner-title text-center">
            <h3>About us</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>About The Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="enrolled-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="enrolled-img-three mb-30 pr-20">
                    <img src="/frontend/assets/images/enrolled/enrolled-img3.jpg" alt="Enrolled">
                    <div class="enrolled-img-content">
                        <i class="flaticon-discount"></i>
                        <div class="content">
                            <h3>Get 40% off</h3>
                            <p>Every course</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <span>WHO WE ARE</span>
                        <h2>We have the most qualified instructors in your hometown.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> Full lifetime access</li>
                                <li><i class="flaticon-check"></i> Certificate of completion</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> 20+ downloadable resources</li>
                                <li><i class="flaticon-check"></i> Free trial 7 days</li>
                            </ul>
                        </div>
                    </div>
                    <a href="courses.html" class="default-btn border-radius-50">Enrolled today</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials-area pb-100">
    <div class="container">
        <div class="section-title mb-45 text-center">
            <h2>What our happy student say</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            <div class="testimonials-item">
                <img src="/frontend/assets/images/testimonials/testimonials-img1.jpg" alt="testimonials" />
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                <h3>Nikolas brooten</h3>
                <span>Student</span>
                <div class="quote"><i class="flaticon-quote"></i></div>
            </div>
            <div class="testimonials-item">
                <img src="/frontend/assets/images/testimonials/testimonials-img2.jpg" alt="testimonials" />
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                <h3>Terry ambady</h3>
                <span>Content strategist</span>
                <div class="quote"><i class="flaticon-quote"></i></div>
            </div>
            <div class="testimonials-item">
                <img src="/frontend/assets/images/testimonials/testimonials-img3.jpg" alt="testimonials" />
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                <h3>Cory zamora</h3>
                <span>Photographer</span>
                <div class="quote"><i class="flaticon-quote"></i></div>
            </div>
            <div class="testimonials-item">
                <img src="/frontend/assets/images/testimonials/testimonials-img4.jpg" alt="testimonials" />
                <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <p>“Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor semper magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus.”</p>
                <h3>Jonquil von</h3>
                <span>Photographer</span>
                <div class="quote"><i class="flaticon-quote"></i></div>
            </div>
        </div>
    </div>
</div>

@endsection