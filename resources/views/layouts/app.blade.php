<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LuxDent Academy</title>
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" href="/backend/css/styles.css" />
        <link rel="stylesheet" href="/backend/css/override.css" />
        @livewireStyles
        @yield('links')
        <!-- EOF CSS INCLUDE -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    </head>
    <body>
        <!-- APP WRAPPER -->
        <div class="app app-loaded">
            <!-- START APP CONTAINER -->
            <div class="app-container app-header-inside-content">
                <!-- START SIDEBAR -->
                <div
                    class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-open-hover dir-left mCustomScrollbar _mCS_1 mCS-autoHide app-navigation-fixed-absolute app-navigation-style-lightblue"
                    data-type="close-other"
                    style="height: 1348px;"
                >
                    <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                        <div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0; left: 0;" dir="ltr">
                            <a href="#" class="app-navigation-logo active">
                                {{env('APP_NAME')}}
                                <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel"><span class="icon-alarm"></span> <span class="app-navigation-logo-button-alert">0</span></button>
                            </a>
                            <nav>
                                <ul>
                                    @if (auth()->user()->perm == \App\Enums\UserType::Administrator)
                                        @include('components.admin-navigation')
                                    @endif
                                    @if (auth()->user()->perm == \App\Enums\UserType::Student)
                                        @include('components.student-navigation')
                                    @endif
                                    
                                </ul>
                            </nav>
                        </div>
                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 1215px; top: 0px; display: block; max-height: 1338px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SIDEBAR --><!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header app-header-design-default">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile">
                                <a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a>
                            </li>
                            <li class="hidden-mobile">
                                <a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a>
                            </li>
                        </ul>
                        <form class="app-header-search" action="" method="post"><input type="text" name="keyword" placeholder="Search" /></form>
                        <ul class="app-header-buttons pull-right">
                            <li>
                                <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls hidden-xs">
                                    <img class="o3p" src="{{auth()->user()->photo_url ?? 'https://via.placeholder.com/150'}}" alt="{{auth()->user()->name}}" />
                                    <div class="contact-container"><a href="#">{{auth()->user()->name}}</a> <span>{{ \App\Enums\UserType::getDescription(auth()->user()->perm) }}</span></div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-default btn-icon btn-informer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="icon-alarm"></span><span class="informer informer-danger informer-sm informer-square">+0</span>
                                    </button>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="btn btn-default btn-icon"><span class="icon-power-switch"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END APP HEADER  --><!-- START PAGE HEADING -->
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg"><span class="icon-laptop-phone"></span></div>
                        <div class="title">
                            <h1>{{env('APP_NAME')}} - Dental Agency Academy</h1>
                            <p>Building up your dental career.</p>
                        </div>
                        
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">Application</a></li>
                            <li class="active">@yield('pagename', 'Dashboard')</li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="block">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- END APP CONTENT -->
            </div>
            <!-- END APP CONTAINER --><!-- START APP FOOTER -->
            <div class="app-footer app-footer-default" id="footer">
                <div class="app-footer-line">
                    <div class="copyright">© {{date('Y')}} {{env('APP_NAME')}}. All right reserved in the UK and other countries.</div>
                    <div class="pull-right">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END APP FOOTER --><!-- START APP SIDEPANEL -->
            @include('components.sidebar-notification')
            <!-- END APP SIDEPANEL --><!-- APP OVERLAY -->
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->
        </div>
        <!-- END APP WRAPPER -->
        <div class="modal fade" id="modal-thanks" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="text-center margin-bottom-20"><img src="/backend/assets/images/smile.png" alt="Thank you" style="width: 100px;" /></p>
                        <h3 id="modal-thanks-heading" class="text-uppercase text-bold text-lg heading-line-below heading-line-below-short text-center"></h3>
                        <p class="text-muted text-center margin-bottom-10">Thank you so much for likes</p>
                        <p class="text-muted text-center">
                            We will do our best to make<br />
                           LuxDent perfect
                        </p>
                        <p class="text-center"><button class="btn btn-success btn-clean" data-dismiss="modal">Continue</button></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="/backend/js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS --><!-- THIS PAGE SCRIPTS -->
        <script type="text/javascript" src="/backend/js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="/backend/js/vendor/rickshaw/rickshaw.min.js"></script>
        <!-- END THIS PAGE SCRIPTS --><!-- APP SCRIPTS -->
        <script type="text/javascript" src="/backend/js/app.js"></script>
        <script type="text/javascript" src="/backend/js/app_plugins.js"></script>
        {{-- <script type="text/javascript" src="/backend/js/app_demo.js"></script> --}}
        <!-- END APP SCRIPTS -->
        <script type="text/javascript" src="/backend/js/app_demo_dashboard.js"></script>
        <script type="text/javascript">
            $(function () {
                $(".block-refresh-example").on("click", function () {
                    var block = $(this).data("block");
                    app.block.loading.start("#" + block);
                    setTimeout(function () {
                        app.block.loading.finish("#" + block);
                    }, 3000);
                });
            });
        </script>
        @livewireScripts
        @yield('scripts')
        <div class="jvectormap-tip"></div>
    </body>
</html>
