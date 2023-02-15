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
        <form autocomplete="off" action="{{route('admin.courses.lessons.edit', [$lesson->lessonid])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bock">
                        <div class="form-group">
                            <label>Course ID</label>
                            <input readonly class="form-control" type="text" value="{{$lesson->module->course->title}}">
                        </div>
                        <div class="form-group">
                            <label>Module ID</label>
                            <input readonly class="form-control" type="text" value="{{$lesson->module->name}}">
                        </div>
                        <div class="form-group">
                            <label>Lesson title <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="title" value="{{$lesson->title}}">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="req">*</span></label>
                            <textarea class="form-control" name="description" id="editor">{!! $lesson->description !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Lesson pdf <span class="req">*</span></label>
                            <small><a href="{{$lesson->notes_url}}" target="_blank">Preview</a></small>
                            <input class="form-control" type="file" name="notes">
                        </div>
                        <div class="form-group">
                            <label>Lesson video link <span class="req">*</span></label>
                            <small><a href="{{$lesson->video_url}}" target="_blank">Preview</a></small>
                            <input class="form-control" type="url" name="video_url" value="{{$lesson->video_url}}">
                        </div>
                        <div class="form-group">
                            <label>Lesson audio link</label>
                            <small><a href="{{$lesson->audio_url ?? '#'}}" target="_blank">Preview</a></small>
                            <input class="form-control" type="url" name="audio_url" value="{{$lesson->audio_url}}">
                        </div>
                        <div class="form-group">
                            <label>Lesson duration <span class="req">*</span></label>
                            <input class="form-control" required type="number" min="1" name="duration" value="{{$lesson->duration}}">
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-icon-fixed">
                                <span class="icon-arrow-up-circle"></span> Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
        
@endsection