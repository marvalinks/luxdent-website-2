@extends('layouts.app')

@section('content')
    <div class="row pg-nav">
        <a href="{{route('admin.users.add')}}" class="btn btn-info btn-icon-fixed"><span class="icon-menu-circle"></span> Add a new user</a>
    </div>
    <div class="row">
        <div class="app-heading app-heading-small">
            <div class="title">
                <h2>My Users</h2>
                <p>List of system users</p>
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
                        <th style="width: 12%;">USER ID</th>
                        <th style="width: 35%;">Name</th>
                        <th>Email</th>
                        <th style="width: 15%;">Telephone</th>
                        <th>Role</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $key => $user)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$user->userid}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telephone ?? 'NA'}}</td>
                        <td>{{\App\Enums\UserType::getDescription($user->perm)}}</td>
                        <td>
                            <a href="{{route('admin.users.edit', [$user->userid])}}">Edit user</a> |
                            <a href="#" class="req">Delete user</a>
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