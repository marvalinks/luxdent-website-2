@extends('layouts.app')

@section('content')
    <div class="row pg-nav">
        <a href="{{route('admin.courses.add')}}" class="btn btn-info btn-icon-fixed"><span class="icon-menu-circle"></span> Add a new course</a>
    </div>
    <div class="row">
        @forelse ($courses as $course)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="icon-thumbs-up"></span> {{$course->title}}</h3>
                    <div class="panel-elements pull-right"><a href="{{route('admin.courses.edit', [$course->courseid])}}" class="btn btn-default">Edit</a></div>
                </div>
                <div class="panel-body">
                    <h5>{{$course->courseid}}</h5>
                    <p>{{$course->description}}</p>
                </div>
                <div class="panel-footer">
                    <div class="panel-elements pull-right">
                        <a href="{{route('admin.courses.modules.index', [$course->courseid])}}" class="btn btn-success pull-right"><span class="icon-launch"></span> View Modules</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <p>No courses data available </p>
        @endforelse
        
    </div>
        
@endsection