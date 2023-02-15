@extends('layouts.app')

@section('links')
    <style>
        .app .tile-basic {
            background: #e1e9ea;
            height: 320px;
        }
    </style>
@endsection

@section('content')
    <div class="row pg-nav">
        <a href="{{route('admin.questions.index', [$module->moduleid])}}" class="btn btn-warning btn-icon-fixed"><span class="icon-menu-circle"></span> Questions</a> 
        <a href="{{route('admin.courses.lessons.add', [$module->moduleid])}}" class="btn btn-info btn-icon-fixed"><span class="icon-menu-circle"></span> Add a new lesson</a>
    </div>
    <div class="row">
        @forelse ($module->lessons as $lesson)
            <div class="col-md-4">
                <a href="{{route('admin.courses.lessons.edit', [$lesson->lessonid])}}">
                    <div class="tile-basic tile-basic-icon-top">
                        <div class="tile-icon"><span class="icon-license"></span></div>
                        <div class="tile-content">
                            <h3 class="tile-title">{{$lesson->title}}</h3>
                            {!! Str::limit($lesson->description, 400) !!}
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <p>No lessons data available </p>
        @endforelse
        
    </div>
        
@endsection