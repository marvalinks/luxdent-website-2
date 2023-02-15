@extends('layouts.frontend')

@section('content')
<div class="inner-banner inner-banner-bg">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Courses</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Courses</li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-100 pb-100">
    <div class="container">
        <div class="product-topper mb-45">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6">
                    <div class="product-title">
                        <h3>We found courses available for you</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-list">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="">Default Price</option>
                            <option value="1">Price High To Low</option>
                            <option value="2">Price Low To High</option>
                        </select>
                        <i class="ri-arrow-down-s-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="event-item box-shadow">
                    <div class="event-img">
                        <a href="event-details.html">
                            <img src="/frontend/assets/images/events/event-img1.jpg" alt="Events" />
                        </a>
                    </div>
                    <div class="event-content">
                        <ul class="event-list">
                            <li><i class="ri-time-fill"></i> 18 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                        </ul>
                        <h3><a href="courses-details.html">University admissions could face emergency controls</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item box-shadow">
                    <div class="event-img">
                        <a href="event-details.html">
                            <img src="/frontend/assets/images/events/event-img2.jpg" alt="Events" />
                        </a>
                    </div>
                    <div class="event-content">
                        <ul class="event-list">
                            <li><i class="ri-time-fill"></i> 18 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 07 lectures</li>
                        </ul>
                        <h3><a href="courses-details.html">As learning moves online trigger warnings must too</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item box-shadow">
                    <div class="event-img">
                        <a href="event-details.html">
                            <img src="/frontend/assets/images/events/event-img3.jpg" alt="Events" />
                        </a>
                    </div>
                    <div class="event-content">
                        <ul class="event-list">
                            <li><i class="ri-time-fill"></i> 44 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 37 lectures</li>
                        </ul>
                        <h3><a href="courses-details.html">Java programming masterclass name for software developers</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item box-shadow">
                    <div class="event-img">
                        <a href="event-details.html">
                            <img src="/frontend/assets/images/events/event-img4.jpg" alt="Events" />
                        </a>
                    </div>
                    <div class="event-content">
                        <ul class="event-list">
                            <li><i class="ri-time-fill"></i> 16 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 17 lectures</li>
                        </ul>
                        <h3><a href="courses-details.html">Online learning can prepare to students for fast-changing</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item box-shadow">
                    <div class="event-img">
                        <a href="event-details.html">
                            <img src="/frontend/assets/images/events/event-img5.jpg" alt="Events" />
                        </a>
                    </div>
                    <div class="event-content">
                        <ul class="event-list">
                            <li><i class="ri-time-fill"></i> 07 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 37 lectures</li>
                        </ul>
                        <h3><a href="courses-details.html">The complete digital marketing course - 12 courses in 1</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-item box-shadow">
                    <div class="event-img">
                        <a href="event-details.html">
                            <img src="/frontend/assets/images/events/event-img6.jpg" alt="Events" />
                        </a>
                    </div>
                    <div class="event-content">
                        <ul class="event-list">
                            <li><i class="ri-time-fill"></i> 04 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 27 lectures</li>
                        </ul>
                        <h3><a href="courses-details.html">The python mega course: build 10 real world applications</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit necessitatibus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 text-center">
                <div class="pagination-area">
                    <a href="blog.html" class="prev page-numbers">
                        <i class="flaticon-left-arrow"></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="blog.html" class="page-numbers">2</a>
                    <a href="blog.html" class="page-numbers">3</a>
                    <a href="blog.html" class="next page-numbers">
                        <i class="flaticon-chevron"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection