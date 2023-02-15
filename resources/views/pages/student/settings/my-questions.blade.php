@extends('layouts.app')

@section('scripts')
<script type="text/javascript" src="/backend/js/app_faq.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="tile-basic tile-transparent">
        <div class="tile-content text-center">
            <span class="tile-subtitle">Do not hesitate to ask our managers</span>
            <h1 class="tile-title tile-title-underlined">We provide quickest support ever</h1>
            <p class="text-uppercase">100% of questions answered within 2 hours or less</p>
        </div>
    </div>
    <div class="row margin-bottom-50">
        <div class="col-md-3 col-md-offset-3 col-sm-6">
            <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#ask-question">Email us your question</button>
        </div>
        <div class="col-md-3 col-sm-6">
            <button class="btn btn-info btn-lg btn-block">Send us a message</button>
        </div>
    </div>
    <div class="block padding-top-30">
        <h2 class="text-uppercase text-bold text-lg heading-line-below heading-line-below-short text-center margin-bottom-50">Few answers to our most common questions</h2>
        <div class="block padding-top-20">
            <div class="row">
                <div class="col-md-6">
                    <form id="app_faq_form" action="" method="post">
                        <div class="input-group margin-bottom-0">
                            <div class="input-group-addon">
                                <span class="fa fa-search"></span>
                            </div>
                            <input type="text" class="form-control" name="search" placeholder="Keyword" id="app_faq_search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-default btn-block" id="app_faq_open">Open All</button>
                </div>
                <div class="col-md-2">
                    <a href="{{route('student.support')}}" class="btn btn-info btn-block">Support page</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="app-heading app-heading-small">
                        <div class="icon icon-lg text-blue-400"><span class="icon-question-circle"></span></div>
                        <div class="title">
                            <h2>My questions</h2>
                        </div>
                    </div>
                    <div class="app-faq">
                        @forelse ($questions as $key => $question)
                            <div class="app-faq-item {{$key == 0 ? 'open' : ''}}">
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
</div>

{{-- Modals --}}
<div class="modal fade" id="ask-question" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="app-heading app-heading-small app-heading-condensed">
                    <div class="title">
                        <h5>Ask a question</h5>
                        <p>Send a question for answering from our administrators</p>
                    </div>
                </div>
                <form action="{{route('student.support')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <div class="bock">
                            <div class="form-group">
                            <div class="form-group">
                                <label>Module <span class="req">*</span></label>
                                <select name="moduleid" class="form-control" required>
                                    <option value="">-choose-</option>
                                    @foreach ($modules as $module)
                                    <option value="{{$module->moduleid}}">{{$module->module->name}}</option>
                                    @endforeach
                                </select>
                            </div>
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
                <p class="text-right"><button class="btn btn-default" data-dismiss="modal">Close</button></p>
            </div>
        </div>
    </div>
</div>


@endsection