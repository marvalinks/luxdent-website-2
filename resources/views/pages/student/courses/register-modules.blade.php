@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="block-content">
            @livewire('module-register', ['courseid' => $course->courseid])
        </div>
        
    </div>
        
@endsection