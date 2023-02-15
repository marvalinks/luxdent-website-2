@extends('layouts.app')

@section('links')
    <style>
        .tn{
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('scripts')
<script type="text/javascript" src="/backend/js/app_faq.js"></script>
@endsection

@section('content')
    <div class="row tn">
        <div class="heading-elements">
            @if ($lesson->video_url)
            <button class="btn btn-default preview" data-preview-video="{{$lesson->video_url}}" data-preview-size="modal-lg">
                <span class="icon-camera-video"></span> Watch lesson video
            </button>
            @endif
            @if ($lesson->audio_url)
            <button class="btn btn-default preview" data-preview-video="{{$lesson->audio_url}}" data-preview-size="modal-lg">
                <span class="icon-volume-high"></span> Listen to audio
            </button>
            @endif
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#ramus">
                <span class="icon-bubble"></span> Ask Ramu
            </a>
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#questions">
                <span class="icon-text-size"></span> My Questions
            </a>
            <a href="{{ url()->previous() }}" class="btn btn-danger btn-icon-fixed pull-right"><span class="icon-menu-circle"></span> Back</a>
        </div>
        
    </div>
    <div class="row">
        <iframe src="{{$lesson->notes_url}}" width="100%" height="500px">
        </iframe>
    </div>

    <div class="modal fade" id="preview" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-lg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
            <div class="modal-content"><div class="modal-body"></div></div>
        </div>
    </div>
    <div class="modal fade" id="ramus" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-lg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{route('student.support')}}" method="post">
                        @csrf
                        <input type="hidden" name="lessonid" value="{{$lesson->lessonid}}">
                        <input type="hidden" name="moduleid" value="{{$lesson->moduleid}}">
                        <div class="col-md-12">
                            <div class="bock">
                                <div class="form-group">
                                    <label>Question <span class="req">*</span></label>
                                    <textarea name="question" required class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-icon-fixed">
                                        <span class="icon-arrow-up-circle"></span> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="questions" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-lg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="app-faq">
                        @forelse ($questions as $key => $question)
                            <div class="app-faq-item">
                                <div class="app-faq-item-title">
                                    {{$key + 1}}. {{$question->question}}
                                    <span class="label label-info label-bordered">{{$question->course->title}}</span>
                                    <span class="label label-info label-bordered">{{$question->module->name}}</span>
                                    <span class="label label-info label-bordered">{{$question->lesson->title}}</span>
                                    <span class="label label-{{$question->answer ? 'success' : 'danger'}} label-bordered">{{$question->answer ? 'Answered' : 'Pending'}}</span>
                                </div>
                                <div class="app-faq-item-content">
                                    {{$question->answer ?? 'No answer'}}
                                </div>
                            </div>
                        @empty
                            <p>No question available </p>
                        @endforelse
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
@endsection