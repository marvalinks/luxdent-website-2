@extends('layouts.app')

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection

@section('content')
    <div class="row pg-nav">
        <a href="{{ url()->previous() }}" class="btn btn-danger btn-icon-fixed"><span class="icon-menu-circle"></span> Back</a>
    </div>
    <div class="row">
        <form autocomplete="off" action="{{route('admin.questions.edit', [$question->questionid])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bock">
                        <div class="form-group">
                            <label>Course</label>
                            <input readonly class="form-control" type="text" value="{{$question->module->course->title}}">
                        </div>
                        <div class="form-group">
                            <label>Module name <span class="req">*</span></label>
                            <input readonly class="form-control" required type="text" value="{{$question->module->name}}">
                        </div>
                        <div class="form-group">
                            <label>Question <span class="req">*</span></label>
                            <textarea class="form-control" name="question" id="editor">{{$question->question}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-icon-fixed">
                                <span class="icon-arrow-up-circle"></span> Submit
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bock">
                        @foreach ($question->answers as $key => $answer)
                        @php
                            $name = '';
                            if($key + 1 == 1) {
                                $name = 'First';
                            }
                            if($key + 1 == 2) {
                                $name = 'Second';
                            }
                            if($key + 1 == 3) {
                                $name = 'Third';
                            }
                            if($key + 1 == 4) {
                                $name = 'Fourth';
                            }
                        @endphp
                        <div class="form-group">
                            <label>
                                {{$name}} answer
                                <input {{$answer->correct ? 'checked' : ''}} required type="radio" value="answer_{{$key+1}}" name="correct_answer">
                            </label>
                            <input class="form-control" required type="text" name="answer_{{$key+1}}" value="{{$answer->answer}}">
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
        
@endsection