@extends('layouts.app')

@section('links')
    <style>
        .panel {
            height: 400px;
        }
        .panel-footer{
            position: absolute;
            bottom: 18px;
            width: 94%!important;
        }
        .lo{
            height: 100%;
            width: 100%;
            font-size: 31px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection

@section('content')
    <div class="row pg-nav">
        
    </div>
    <div class="row">
        <div>
            <ul class="nav nav-pills nav-justified nav-pills-bordered">
                @foreach ($registrations as $key => $registration)
                <li class="{{$key == 0 ? 'active' : ''}}"><a href="#{{$registration->bundleid}}" data-toggle="tab" aria-expanded="false">{{$registration->module->name}}</a></li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach ($registrations as $key => $registration)
                    <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="{{$registration->bundleid}}">
                        <h4 class="text-center"><strong>{{$registration->module->name}}</strong></h4>
                        <div class="row">
                            @forelse ($registration->module->lessons as $lesson)
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><span class="icon-thumbs-up"></span> {{$lesson->title}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h5>{{$lesson->lessonid}}</h5>
                                        <p>{!! Str::limit($lesson->description, 400) !!}</p>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="panel-elements pull-right">
                                            <a href="{{route('student.my.lesson', [$lesson->lessonid])}}" class="btn btn-success pull-right"><span class="icon-launch"></span> Continue lesson</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <p>No lessons data available </p>
                            @endforelse

                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <a href="{{route('student.my.quiz', [$lesson->moduleid])}}" class="btn btn-default lo">
                                        <span>Click here to <br> take a quiz</span> 
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
        
@endsection