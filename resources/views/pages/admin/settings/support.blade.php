@extends('layouts.app')

@section('scripts')
<script type="text/javascript" src="/backend/js/app_faq.js"></script>
<script type="text/javascript" src="/backend/js/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
@endsection

@section('links')
    <style>
        .app-faq2 .app-faq-item{
            font-size: 14px;
            font-weight: 600;
        }
        .app-faq2 .app-faq-item-title{
            padding-bottom: 12px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
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
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="app-faq2">
                            @forelse ($questions as $key => $question)
                            <div class="app-faq-item {{$key == 0 ? 'open' : ''}}">
                                <div class="app-faq-item-title">
                                    {{$key + 1}}. {{$question->question}}
                                    <span class="label label-{{$question->answer ? 'success' : 'danger'}} label-bordered">{{$question->answer ? 'Answered' : 'Pending'}}</span>
                                </div>
                                <div class="app-faq-item-content">
                                    <form action="{{route('admin.update.support', [$question->id])}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <textarea required name="answer" class="form-control" cols="30" rows="10">{{$question->answer}}</textarea>
                                        </div>
                                        <div class="form-group" style="text-align: right;">
                                            <button type="submit" class="btn btn-success btn-icon-fixed btn-sm">
                                                <span class="icon-arrow-up-circle"></span> Update answer
                                            </button>
                                        </div>
                                    </form>
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
        
@endsection