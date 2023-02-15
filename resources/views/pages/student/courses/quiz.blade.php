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
        .snc{
            display: flex;
        }
        .snc p{
            padding-left: 10px;
            font-weight: 200;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        @livewire('quiz', ['moduleid' => $moduleid])
    </div>
        
@endsection