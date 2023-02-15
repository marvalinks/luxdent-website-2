@extends('layouts.frontend')

@section('content')
<div class="inner-banner inner-banner-bg">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Support</h3>
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}">Home</a>
                </li>
                <li>Support</li>
            </ul>
        </div>
    </div>
</div>
<div class="enrolled-area-two pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>Lux Dent Support</h3>
                        <div class="enrolled-content mb-30">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <ul class="enrolled-list">
                                        <li><i class="flaticon-check"></i> We provide online support either through email, phone call or question and a Query Form</li>
                                        <li><i class="flaticon-check"></i> Once registered for a course an online account will be opened with Financial details, Course guide
                                            and Policies.</li>
                                        <li><i class="flaticon-check"></i> We provide all the document needed for your employer to supervise you.</li>
                                        <li><i class="flaticon-check"></i> You will be assigned a private tutor. The primary responsibility of the personal tutor is to ensure
                                            that your Record of Experience coursework adheres to the requirements established by the
                                            NEBDN and to guide you through the process to completion. We make an effort to assist you at
                                            every turn. Your teachers will address any queries you may have.</li>
                                        <li><i class="flaticon-check"></i> You can also get in touch with the Course Director, Head Tutor or the Admin staff before your
                                            tutor is assigned.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row"></div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <form action="" method="get">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Name" />
                        </div>
                        <div class="form-group">
                            <label for="">Telephone</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Name" />
                        </div>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Name" />
                        </div>
                        <div class="form-group">
                            <label for="">Student ID</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Name" />
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="default-btn" style="margin-top: 13px;">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>Employer Support</h3>
                        <p>
                            To be able to be fully registered with NEBDN, your employer should confirm their support (which should
                            be within 30 days). Your employer should be a GDC-registered witness to click a link in the email we
                            provide them on your behalf. Once this happens, your membership will be processed by our system

                            automatically. Your employer is required to support and train you during your course that will lead you
                            toward the success.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-8">
                <div class="enrolled-content mb-30">
                    <div class="section-title">
                        <h3>Record Of Experience (ROE)/(ROC)</h3>
                        <p>
                            The Record of Experience (RoE) or Record of Competence (RoC) is a work-based assessment portfolio
                            that learners are require to complete for post-registration qualification in the National Diploma in Dental
                            Nursing. A number of tasks based on the role of a qualified Dental Nurse are included in the RoE/RoC.
                            Learners need to complete these tasks in the workplace whilst being observed by a GDC registrant who
                            acts as a ‘Witness’.
                        </p>
                        <p>
                            The RoE/RoC workplace tasks should be completed to a satisfactory standard, all Witnesses observing
                            the clinical activities must receive a documented, standardised level of training to ensure they are fully
                            aware of their role and responsibilities. This is a mandatory requirement for all GDC registered
                            professionals acting as a Witness to any Learner working towards the NEBDN National Diploma in
                            Dental Nursing or any post-registration qualifications.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection