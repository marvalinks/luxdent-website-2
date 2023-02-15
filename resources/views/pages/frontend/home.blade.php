@extends('layouts.frontend')

@section('content')
<style>
    .logom67{
        display: none;
    }
</style>
{{-- <div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content hero-content">
                    <span data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">FOR A BETTER FUTURE</span>
                    <h1 data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">A course is essential for building career</h1>
                    <p data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The Ellen can offer you to enjoy the beauty of eLearning!
                    </p>
                    <div class="banner-btn">
                        <a href="courses.html" class="default-btn border-radius-50">Browse courses</a>
                        <a href="https://www.youtube.com/watch?v=Zd00oIDAt60" class="play-btn">
                            <i class="flaticon-play-button-arrowhead"></i>
                            <span class="title-text">Watch video</span>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img" data-speed="0.05" data-revert="true">
                    <img src="/frontend/assets/images/home-one/man.png" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Man" />
                    <div class="bg-shape">
                        <img src="/frontend/assets/images/home-one/home-one-shape.png" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Shape" />
                    </div>
                    <div class="top-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <i class="flaticon-student"></i>
                        <div class="content">
                            <h3>250K</h3>
                            <p>Assisted student</p>
                        </div>
                    </div>
                    <div class="right-content" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <i class="flaticon-checked"></i>
                        <div class="content">
                            <h3>Congratulations</h3>
                            <p>Your admission completed</p>
                        </div>
                    </div>
                    <div class="left-content" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                        <div class="content">
                            <img src="/frontend/assets/images/home-one/user-img.jpg" alt="User" />
                            <h3>User experience class</h3>
                            <p>Today at 12.00 PM</p>
                        </div>
                        <a href="#" class="join-btn">Join now</a>
                    </div>
                    <div class="banner-img-shape">
                        <div class="shape1" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                            <img src="/frontend/assets/images/home-one/shape3.png" alt="Shape" />
                        </div>
                        <div class="shape2" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                            <img src="/frontend/assets/images/home-one/shape2.png" alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape">
        <div class="banner-shape1">
            <img src="/frontend/assets/images/home-one/shape1.png" alt="Shape" />
        </div>
    </div>
</div> --}}


<div class="banner-area jmb">
    <img src="/images/03.jpg" alt="">
    <div class="row hk">
        <div class="gtbox">
            <h2>
                The Lux Dent Institute provides online Dental Nursing Course accredited by the National
                Examining Board for Dental Nurses (NEBDN) with Reg number.
            </h2>
            <div class="optional-item jbox">
                <a href="{{route('register')}}" class="default-btn border-radius-2 two">Join us today</a>
            </div>
        </div>
    </div>
</div>

<div class="row g78g">
    <h3>
        Learn at your own pace, around-the-clock – 24/7
    </h3>
</div>

<div class="counter-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-content">
                    <i class="flaticon-online-course"></i>
                    <h3><span class="odometer" data-count="100">000</span>+</h3>
                    <p>Modules & videos</p>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-content">
                    <i class="flaticon-student"></i>
                    <h3><span class="odometer" data-count="50">00</span>+</h3>
                    <p>Students enrolled</p>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-content">
                    <i class="flaticon-online-course-1"></i>
                    <h3><span class="odometer" data-count="100">000</span>+</h3>
                    <p>Courses materials</p>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-content">
                    <i class="flaticon-customer-satisfaction"></i>
                    <h3><span class="odometer" data-count="100">000</span>%</h3>
                    <p>Satisfaction rate</p>
                </div>
            </div>
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
                            <h3>Get discount off</h3>
                            <p>Every course</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <span>ABOUT THE COURSE</span>
                        <h2>About the Online Dental Nursing Diploma Course:</h2>
                        <p>
                            This course is designed by the help of specialised nurses and dentists to make it easier for Trainee Dental
                            Nurses to complete the course. The course is available and accessible on your mobile, laptop, tablet and
                            anywhere in the world 24/7.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> Lux Dent Institute officially registered with the NEBDN (National Examining Board For Dental
                                    Nurse)</li>
                                <li><i class="flaticon-check"></i> NEBDN awarded dental nursing qualifications for over 78 years.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> The General Dental Council (GDC) recognises NEBDN’s meeting their Standards for Education.</li>
                                <li><i class="flaticon-check"></i> Lux Dent Institute follows NEBDN standards.</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{route('register')}}" class="default-btn two border-radius-50">Enroll today</a>
                </div>
            </div>
        </div>
        <div class="row align-items-center m78m">
            
            <div class="col-lg-6">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h2>The Online Dental Nursing Diploma Course:</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> Each Module is broken into Lessons.</li>
                                <li><i class="flaticon-check"></i> Track your progress after every Module with a test.</li>
                                <li><i class="flaticon-check"></i> Provides a Theory Format Lesson – about 35 Lessons</li>
                                <li><i class="flaticon-check"></i> Provides a Video Format Lesson which is about 10 minutes – a summary of the Theory Lesson to
                                    give you a clear understanding</li>
                                <li><i class="flaticon-check"></i> Provides an Audio Format Lesson</li>
                                <li><i class="flaticon-check"></i> Question and answers online support and similar previous questions and answers can be viewed</li>
                                <li><i class="flaticon-check"></i> Sit the Online Final NEBDN exam for the National Diploma in Dental Nursing</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-6">
                            <ul class="enrolled-list">
                                <li><i class="flaticon-check"></i> Worldwide accessibility benefit you from saving time and money.</li>
                                <li><i class="flaticon-check"></i> Student can study at their convenient time.</li>
                                <li><i class="flaticon-check"></i> Student can access the course on holiday.</li>
                                <li><i class="flaticon-check"></i> Study can be done on train or on plane as long there is an internet access.</li>
                                <li><i class="flaticon-check"></i> Study can be done while walking or running.</li>
                                <li><i class="flaticon-check"></i> Online Mock Exam is just before Final exam</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="enrolled-img-three mb-30 pr-20">
                    <img src="/images/04.jpg" alt="Enrolled">
                    <div class="enrolled-img-content">
                        <i class="flaticon-discount"></i>
                        <div class="content">
                            <h3>Get discount off</h3>
                            <p>Every course</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="play-area ptb-100">
    <div class="container">
        <div class="title text-center mb-45">
            <h2>We worked with <span>250+ </span> leading universities and companies</h2>
        </div>
        <div class="play-btn-area">
            <a href="https://www.youtube.com/watch?v=Zd00oIDAt60" class="play-btn">
                <i class="flaticon-play-button-arrowhead"></i>
            </a>
        </div>
    </div>
</div>

<div class="testimonials-area pb-100">
    <div class="container">
        <div class="section-title mb-45 text-center">
            <h2>Review from our students</h2>
            <p>
                Awaiting for new reviews from our enrolled students.
            </p>
        </div>
        {{-- <div class="testimonials-slider owl-carousel owl-theme">
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
        </div> --}}
    </div>
</div>

@endsection