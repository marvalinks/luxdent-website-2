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
            <h3>Application</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Application</li>
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
                        <h3>How to Enrol with the Institution</h3>
                        <p>
                            You can sign up online right now and start viewing your course in just a few simple steps. Fill out the
                            online form, choose a payment option, get immediate access. Once you are activated student will then
                            have 1 year to complete the course. The NEBDN Diploma in Dental Nursing course must be successfully
                            completed within 12 months of the start of the programme. The student may receive free access for an
                            additional six months if further time is needed. As soon as your application is finished, we&#39;ll send an
                            email to your employer asking them to confirm that they will support your training. On the Application
                            Form should have the employer email address or you can provide their email address within 30 days of
                            the registration. After registration student will have 10 days to cancel the course and a full refund (less
                            administration fee of £75) will be eligible in writing.
                        </p>
                        <p>
                            <strong>Once registered, you can read the entire Terms and Conditions and the Privacy Policy.</strong>
                        </p>
                        <p>
                            Exam dates details: <a target="_blank" href="https://www.nebdn.org/app/uploads/2022/06/NEBDN-exam-dates-2022-23-v1.pdf">https://www.nebdn.org/app/uploads/2022/06/NEBDN-exam-dates-2022-23-v1.pdf</a>
                        </p>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>NEBDN Information:</h3>
                        <p>
                            The regulating organisation that establishes the curriculum and confers the professional qualification that
                            is recognised by the General Dental Council is the National Examining Board for Dental Nurses
                            (NEBDN) (GDC). The Lux Dent Institute must register students with the NEBDN as an accredited
                            training centre in order for them to complete their online Record of Experience (RoE) and take the
                            examinations.
                        </p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection