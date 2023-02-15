@extends('layouts.app')

@section('content')
    <div class="row pg-nav">
        <a href="{{route('admin.courses.index')}}" class="btn btn-info btn-icon-fixed"><span class="icon-menu-circle"></span> My Courses</a>
    </div>
    <div class="row">
        <form action="{{route('admin.courses.edit', [$course->courseid])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bock">
                        <div class="form-group">
                            <label>Course title <span class="req">*</span></label>
                            <input required class="form-control" type="text" value="{{$course->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="req">*</span></label>
                            <textarea required class="form-control" name="description" rows="5">{{$course->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input class="form-control" type="text" name="photo">
                        </div>
                        <div class="form-group">
                            <label>Video</label>
                            <input class="form-control" type="text" name="video">
                        </div>
                        <div class="form-group">
                            <label>Audio</label>
                            <input class="form-control" type="text" name="audio">
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