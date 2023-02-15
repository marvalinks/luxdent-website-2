@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse ($courses as $course)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="icon-thumbs-up"></span> {{$course->title}}</h3>
                </div>
                <div class="panel-body">
                    <h5>{{$course->courseid}}</h5>
                    <p>{{$course->description}}</p>
                </div>
                <div class="panel-footer">
                    <div class="panel-elements pull-right">
                        <a href="{{route('student.register.modules', [$course->courseid])}}" class="btn btn-success pull-right"><span class="icon-launch"></span> Register Course</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <p>No courses data available </p>
        @endforelse
        
    </div>
        
@endsection