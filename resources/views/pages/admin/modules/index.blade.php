@extends('layouts.app')

@section('content')
    <div class="row pg-nav">
        <a href="{{route('admin.courses.modules.add', [$course->courseid])}}" class="btn btn-info btn-icon-fixed"><span class="icon-menu-circle"></span> Add a new module</a>
    </div>
    <div class="row">
        <div class="app-heading app-heading-small">
            <div class="title">
                <h2>My Modules</h2>
                <p>List of course modules</p>
            </div>
            <div class="heading-elements">
                <div class="input-group margin-right-5" style="width: 200px">
                    <div class="input-group-addon">
                        <span class="fa fa-search"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button class="btn btn-default btn-icon">
                    <span class="icon-printer"></span>
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-bordered table-striped margin-bottom-10">
                <thead>
                    <tr>
                        <th>#</th>
                        <th style="width: 15%;">Module ID</th>
                        <th style="width: 25%;">Name</th>
                        <th>Amount</th>
                        <th>Course</th>
                        <th style="width: 30%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($course->modules as $key => $module)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$module->moduleid}}</td>
                        <td>{{$module->name}}</td>
                        <td>{{number_format($module->cost, 2)}}</td>
                        <td>{{$course->title}}</td>
                        <td>
                            <a href="{{route('admin.courses.lessons.index', [$module->moduleid])}}" class="">View lessons</a> |
                            <a href="{{route('admin.courses.modules.edit', [$module->moduleid])}}" class="">Edit module</a> | 
                            <a href="{{route('admin.questions.index', [$module->moduleid])}}" class="">Set Questions</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <p>No modules loaded</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
    </div>
        
@endsection