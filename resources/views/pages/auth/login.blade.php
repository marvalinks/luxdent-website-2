@extends('layouts.frontend')

@section('content')
<div class="inner-banner inner-banner-bg2">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Login</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Login</li>
            </ul>
        </div>
    </div>
</div>

<div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="user-img">
                    <img src="/frontend/assets/images/faq-img.jpg" alt="faq" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-all-form">
                    <div class="contact-form">
                        <h3 class="user-title">Sign in</h3>
                        <form id="" action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="email" id="name" class="form-control" required data-error="Username Or Email Address*" placeholder="Username Or Email Address*" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" required type="password" name="password" placeholder="Password*" />
                                    </div>
                                </div>
                                <div class="col-lg-12 form-condition">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1" />
                                        <label for="chb1"> Remember Me <a class="forget" href="#">Forgot Password?</a> </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Login Now
                                    </button>
                                    <a href="{{route('register')}}">Register an account now?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection