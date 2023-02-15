@extends('layouts.app')

@section('content')
    <div class="row pg-nav">
        <a href="{{ url()->previous() }}" class="btn btn-danger btn-icon-fixed"><span class="icon-menu-circle"></span> Back</a>
    </div>
    <div class="row">
        <form action="{{route('admin.users.add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="bock">
                        <div class="form-group">
                            <label>Fullname <span class="req">*</span></label>
                            <input required class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email address <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input class="form-control" type="text" name="telephone">
                        </div>
                        <div class="form-group">
                            <label>Role <span class="req">*</span></label>
                            <select name="perm" class="form-control" required>
                                <option value="">-choose-</option>
                                <option value="PERM_1">Administrator</option>
                                <option value="PERM_2">Student</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password <span class="req">*</span></label>
                            <input class="form-control" required type="text" name="password">
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