@extends('layouts.app')

@section('content')
    <div class="row pg-nav">
        <a href="{{ url()->previous() }}" class="btn btn-danger btn-icon-fixed"><span class="icon-menu-circle"></span> Back</a>
    </div>
    <div class="row">
        <form action="{{route('admin.courses.modules.add', [$course->courseid])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bock">
                        <div class="form-group">
                            <label>Course ID</label>
                            <input readonly class="form-control" type="text" value="{{$course->title}}">
                        </div>
                        <div class="form-group">
                            <label>Module name <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label>Cost <span class="req">*</span></label>
                            <input class="form-control" required step="0.001" type="number" name="cost">
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