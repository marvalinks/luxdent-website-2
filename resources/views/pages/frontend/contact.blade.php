@extends('layouts.frontend')

@section('content')
<div class="inner-banner inner-banner-bg">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact us</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-12 col-sm-8">
                <div class="contact-info-card">
                    <i class="ri-map-pin-fill"></i>
                    <h3>Our location</h3>
                    <p>
                        61 Griffiths Road, Wimbledon,  <br>
                        London, SW19 1ST
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="contact-info-card">
                    <i class="ri-mail-fill"></i>
                    <h3>Email us</h3>
                    <p><a href="mailto:info@luxdentagency.co.uk">info@luxdentagency.co.uk</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="contact-info-card">
                    <i class="ri-phone-fill"></i>
                    <h3>Phone</h3>
                    <p><a href="tel:+44587154756">074 9071 4868</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-widget-area pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>SEND MESSAGE</span>
            <h2>Ready to get started?</h2>
        </div>
        <div class="contact-form">
            <form id="contactForm" novalidate="true">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required="" data-error="Please Enter Your Name" placeholder="Name" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required="" data-error="Please Enter Your Email" placeholder="Email" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required="" data-error="Please Enter Your number" class="form-control" placeholder="Phone Number" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please Enter Your Subject" placeholder="Your Subject" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="7" required="" data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="agree-label">
                            <input type="checkbox" id="chb1" />
                            <label for="chb1"> Accept <a href="terms-condition.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a> </label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                            Send Message
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection