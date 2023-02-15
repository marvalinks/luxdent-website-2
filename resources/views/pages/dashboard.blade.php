@extends('layouts.app')

@section('pagename')
Dashboard33
@endsection

@section('content')
<!-- END PAGE HEADING --><!-- START PAGE CONTAINER -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0" style="height: 132px;">
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile">
                        <div class="line">
                            <div class="title">Sales Per Month</div>
                            <div class="title pull-right"><span class="label label-success label-ghost label-bordered">0%</span></div>
                        </div>
                        <div class="intval">0</div>
                        <div class="line">
                            <div class="subtitle">Total course sold</div>
                            <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span> good</div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile">
                        <div class="line">
                            <div class="title">Sales Per Year</div>
                            <div class="title pull-right text-success">+32.9%</div>
                        </div>
                        <div class="intval">0</div>
                        <div class="line">
                            <div class="subtitle">Total courses sold</div>
                            <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span> good</div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile">
                        <div class="line">
                            <div class="title">Profit</div>
                            <div class="title pull-right text-success">+9.2%</div>
                        </div>
                        <div class="intval">0 <small>£</small></div>
                        <div class="line"><div class="subtitle">Profit for the year</div></div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0" style="height: 132px;">
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="line">
                            <div class="title">Students per month</div>
                            <div class="title pull-right"><span class="label label-warning label-ghost label-bordered">0%</span></div>
                        </div>
                        <div class="intval">0</div>
                        <div class="line">
                            <div class="subtitle">Students per month</div>
                            <div class="subtitle pull-right text-warning"><span class="icon-arrow-down"></span> normal</div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="line">
                            <div class="title">Students per year</div>
                            <div class="title pull-right text-success">67.1%</div>
                        </div>
                        <div class="intval">0</div>
                        <div class="line">
                            <div class="subtitle">Students per year</div>
                            <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span></div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0" style="height: 132px;">
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon icon-lg"><span class="icon-bubble"></span></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="line">
                                    <div class="title">Total courses</div>
                                    <div class="title pull-right"><span class="label label-success label-ghost label-bordered">0</span></div>
                                </div>
                                <div class="intval text-left">0</div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon icon-lg"><span class="icon-warning"></span></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="line"><div class="title">Total Modules</div></div>
                                <div class="intval text-left">0</div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0" style="height: 132px;">
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon icon-lg"><span class="icon-cloud-check"></span></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="line">
                                    <div class="title">Total Server Load</div>
                                    <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> UP</div>
                                </div>
                                <div class="intval text-left">85.2%</div>
                                <div class="line">
                                    <div class="subtitle">Latest back up: <a href="#">12/07/2017</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon icon-lg"><span class="icon-database"></span></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="line">
                                    <div class="title">Database Load</div>
                                    <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> UP</div>
                                </div>
                                <div class="intval text-left">43.16%</div>
                                <div class="line"><div class="subtitle">4/10 databases used</div></div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon icon-lg"><span class="icon-inbox text-danger"></span></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="line">
                                    <div class="title">Disk Space</div>
                                    <div class="subtitle pull-right text-danger"><span class="fa fa-times"></span> Critical</div>
                                </div>
                                <div class="intval text-left">99.98%</div>
                                <div class="line"><div class="subtitle">234.2GB / 240GB used</div></div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
                <li>
                    <!-- START WIDGET -->
                    <div class="app-widget-tile app-widget-highlight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="icon icon-lg"><span class="icon-heart-pulse"></span></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="line">
                                    <div class="title">Proccessor</div>
                                    <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Normal</div>
                                </div>
                                <div class="intval text-left">32.5%</div>
                                <div class="line"><div class="subtitle">Intule Cori P7, 3.6Ghz</div></div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE CONTAINER -->
@endsection