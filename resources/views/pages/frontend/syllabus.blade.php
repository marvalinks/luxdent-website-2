@extends('layouts.frontend')

@section('links')
    
@endsection

@section('content')
<style>
    .spp{
        font-size: 20px;
        font-weight: 600;
    }
</style>
<div class="inner-banner inner-banner-bg9">
    <div class="container">
        <div class="inner-title">
            <h3>{{$course->title}}</h3>
            <div class="rating">
                <i class="ri-star-fill"></i>4k+ rating
            </div>
            <div class="inner-banner-content">
                <ul class="course-list">
                    <li><i class="ri-vidicon-fill"></i> {{$course->modules->count()}} modules</li>
                </ul>
            </div>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Courses details</li>
            </ul>
        </div>
    </div>
</div>

@php
    $sumTime = 0;
    $sumLessons = 0;
@endphp

<div class="courses-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>MODULES</h3>
                        <p>
                            There are {{count($course->modules)}} modules in the course (units). Each module contains lessons. There are tests at the
                            end of each module to make sure you are learning the course. Each lesson also includes a full set of
                            explanation notes and a video or audio presentation.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-8">
                <div class="courses-details-contact">
                    <div class="tab courses-details-tab">
                        <ul class="tabs active">
                            <li class="current">
                                Curriculum
                            </li>
                        </ul>
                        <div class="tab_content current active">
                            <div class="tabs_item" style="display: block;">
                                <div class="courses-details-tab-content">
                                    <div class="courses-details-accordion">
                                        <ul class="accordion">
                                            @foreach ($course->modules as $module)
                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)">
                                                    <i class="ri-add-fill"></i>
                                                    {{$module->name}}
                                                    <div class="tag">{{env('CURRENCY')}} {{number_format($module->cost, 2)}}</div>
                                                </a>
                                                <div class="accordion-content">
                                                    @foreach ($module->lessons as $lesson)
                                                    @php
                                                        $sumTime += $lesson->duration;
                                                        $sumLessons += 1;
                                                    @endphp
                                                        
                                                    <div class="accordion-content-list">

                                                        <div class="accordion-content-left">
                                                            <i class="ri-file-text-line"></i>
                                                            <span class="spp">{{$lesson->title}}</span>
                                                            <div class="cwit">
                                                                {!! $lesson->description !!}
                                                            </div>
                                                        </div>
                                                        <div class="accordion-content-right">
                                                            <div class="tag2">{{$lesson->duration}} min</div>
                                                            <i class="ri-play-circle-line"></i>
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-details-sidebar">
                    <img src="/images/01.jpg" alt="Courses" style="width: 100%; height: 400px;object-fit: cover;" />
                    <div class="content">
                        <h3>{{env('CURRENCY')}} {{number_format($course->modules->sum('cost'), 2)}}</h3>
                        <span>This course includes:</span>
                        <ul class="courses-details-list">
                            <li>{{$sumTime / 60}} hours on-demand video</li>
                            <li>{{count($course->modules)}} modules</li>
                            <li>{{$sumLessons}} downloadable resources</li>
                            <li>Full lifetime access</li>
                            <li>Access on mobile and TV</li>
                            <li>Certificate of completion</li>
                        </ul>
                        <a href="{{route('register')}}" class="default-btn">Register course</a>
                        <ul class="social-link">
                            <li class="social-title">Share this course:</li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection