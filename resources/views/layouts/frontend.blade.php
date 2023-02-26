<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="/frontend/assets/css/plugins.css" />

        <link rel="stylesheet" href="/frontend/assets/css/iconplugins.css" />

        <link rel="stylesheet" href="/frontend/assets/css/style.css" />

        <link rel="stylesheet" href="/frontend/assets/css/responsive.css" />
        <link rel="stylesheet" href="/frontend/assets/css/responsive.scss" />

        <link rel="stylesheet" href="/frontend/assets/css/theme-dark.css" />
        <link rel="stylesheet" href="/assets/fontawesome/css/fontawesome.min.css" />
        <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css" />

        <title>{{env('APP_NAME')}}</title>

        <link rel="icon" type="image/png" href="/frontend/assets/images/favicon.png" />
        <link rel="stylesheet" href="/backend/css/override.css" />
    </head>
    <body>

        <div class="navbar-area ledu-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu mean-container">
                        {{-- @include('components.mb-menu') --}}
                        <div class="logo">
                            <a href="{{route('frontend.home')}}">
                                <img src="/images/LUX-DENT-AGENGY.png" class="logow logo-one" alt="logo" />
                                <img src="/images/LUX-DENT-AGENGY.png" class="logow logo-two" alt="logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-nav nav-area">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{route('frontend.home')}}" class="nav-link">Home</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{route('frontend.services')}}" class="nav-link">Locum dental service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://luxdentinstitute.co.uk" target="_blank" class="nav-link">Lux dent institute</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.it')}}" class="nav-link">Lux dent IT</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.accounting')}}" class="nav-link">Lux dent Accounting</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('frontend.contact')}}" class="nav-link">Contact us</a>
                                </li>
                            </ul>
                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <a target="_blank" href="https://app.luxdentagency.co.uk" class="default-btn border-radius-50 two">Login CMS</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-item">
                                    <form class="search-form">
                                        <input type="search" class="form-control" placeholder="Search courses" />
                                        <button type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="side-item">
                                    <a href="#" class="default-btn two">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area tcenter tsm0">
            <a class="navbar-brand" href="{{route('frontend.home')}}">
                <img src="/images/LUX-DENT-AGENGY.png" class="g7d logo-one" alt="Logo" />
            </a>
        </div>
        @yield('content')

        {{-- <div class="footer-contact-area">
            <div class="container">
                <div class="row tcenter">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title">
                            <img src="/images/nebdn.png" alt="">
                            <h4>ACCREDITED NEBDN COURSE</h4>
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
        </div> --}}
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>ABOUT US</h4>
                        <img src="/images/LUX-DENT-AGENGY.png" alt="Logo" class="img-fluid">
                        <p style="width: 83%;">
                            Lux Dent Agency Limited assists dental practices and hospital dental departments in 
                            filling temporary and permanent vacancies for dental nurses and other care professionals. 
                            Lux Dent Agency Limited is registered in England.
                        </p>
                        {{-- <div class="social-icons">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/people/Luxdentagency-uk/100063746281354/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-md-4">
                        <h4>INFORMATION</h4>
                        <br>
                        <ul class="ft0p">
                            <li>
                                <a href={{route('frontend.services')}}">Services</a>
                            </li>
                            <li>
                                <a href="https://luxdentinstitute.co.uk" target="_blank">Institute</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.it')}}">Lux Dent IT</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://app.luxdentagency.co.uk">Login</a>
                            </li>
                            <li>
                                <a href="#">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>STRUCTURE OFFICE</h4>
                        <br>
                        <ul class="ft0p">
                            <li>
                                <span><i class="feather-mail"></i></span> <span>info@luxdentagency.co.uk</span>
                            </li>
                            <li>
                                <span><i class="feather-phone"></i></span> <span>074 9071 4868</span>
                            </li>
                            <li>
                                <span><i class="feather-map-pin"></i></span> <span>A: 61 Griffiths Road, Wimbledon, London, SW19 1ST</span>
                            </li>
                        </ul>
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://facebook.com/people/Luxdentagency-uk/100063746281354/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://linkedin.com/in/lux-dent-agency-limited-83567059">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
        <footer class="footer-area">
            <div class="copyright-area">
                <div class="container">
                    <div class="copy-right-text text-center">
                        <p>
                            Copyright @
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <b>{{env('APP_NAME')}}</b> All Rights Reserved
                            <a href="https://marvalinks.com/" target="_blank">Marvalinks Digital ❤️</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="/frontend/assets/js/jquery.min.js"></script>

        <script src="/frontend/assets/js/plugins.js"></script>

        <script src="/frontend/assets/js/custom.js"></script>
    </body>
</html>
