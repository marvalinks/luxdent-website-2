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
        <form autocomplete="off" action="{{route('admin.questions.add', [$module->moduleid])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bock">
                        <div class="form-group">
                            <label>Course</label>
                            <input readonly class="form-control" type="text" value="{{$module->course->title}}">
                        </div>
                        <div class="form-group">
                            <label>Module name <span class="req">*</span></label>
                            <input readonly class="form-control" required type="text" value="{{$module->name}}">
                        </div>
                        <div class="form-group">
                            <label>Question <span class="req">*</span></label>
                            <textarea class="form-control" name="question" id="editor"></textarea>
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
                        <div class="form-group">
                            <label>
                                First answer
                                <input required type="radio" value="answer_1" name="correct_answer">
                            </label>
                            <input class="form-control" required type="text" name="answer_1" value="">
                        </div>
                        <div class="form-group">
                            <label>
                                Second answer
                                <input required type="radio" value="answer_2" name="correct_answer">
                            </label>
                            <input class="form-control" required type="text" name="answer_2" value="">
                        </div>
                        <div class="form-group">
                            <label>
                                Third answer
                                <input required type="radio" value="answer_3" name="correct_answer">
                            </label>
                            <input class="form-control" type="text" name="answer_3" required value="">
                        </div>
                        <div class="form-group">
                            <label>
                                Fourth answer
                                <input required type="radio" value="answer_4" name="correct_answer">
                            </label>
                            <input class="form-control" type="text" name="answer_4" required value="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
        
@endsection