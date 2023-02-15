@extends('layouts.frontend')

@section('content')
<div class="inner-banner inner-banner-bg2">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Register</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</div>

<div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="user-all-form">
                    <div class="contact-form">
                        <h3 class="user-title">Sign up</h3>
                        <form id="" autocomplete="off" action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" required data-error="Name" placeholder="Fullname" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" required data-error="Please enter Email" placeholder="Please Enter Email" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" required name="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Register Now
                                    </button>
                                    <a href="{{route('login')}}">Login account now?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-img">
                    <img src="/frontend/assets/images/faq-img.jpg" alt="faq" />
                </div>
            </div>
        </div>
    </div>
</div>


@endsection