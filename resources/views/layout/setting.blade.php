{{-- Extends layout --}}
@extends('metronic::layout.default')
@push('styles')
<style>
    @font-face {
        font-family: 'sukhumvit_setmedium';
        src: url('/fonts/sukhumvitset-medium.eot');
        src: url('/fonts/sukhumvitset-medium.eot?#iefix') format('embedded-opentype'),
             url('/fonts/sukhumvitset-medium.woff2') format('woff2'),
             url('/fonts/sukhumvitset-medium.woff') format('woff'),
             url('/fonts/sukhumvitset-medium.ttf') format('truetype'),
             url('/fonts/sukhumvitset-medium.svg#sukhumvit_setmedium') format('svg');
        font-weight: normal;
        font-style: normal;
        font-display: swap;

    }
    .avatar-edit {
        position: absolute;
        right: 38px;
        z-index: 1;
        top: 2px;
    }
    .avatar-remove {
        position: absolute;
        right: 3px;
        z-index: 1;
        top: 2px;
    }


    .avatar-remove span:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }

    .avatar-edit input {
      display: none;
    }

    .avatar-preview {
      width: 100%;
      min-height: 60px;
      position: relative;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
      background: #b5b5b5;
    }
    .avatar-preview > .imagePreview {
        background-size: contain;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
    }
    .imagePreview .image-text{
        position: absolute;
        left: 50%;
        top: 50%;
        color: white;
        transform: translate(-50%, -50%);
        font-size: 3.6rem;
        line-height: 1;
        font-family: 'sukhumvit_setmedium' , sans-serif;
        text-shadow: 5px 5px 10px rgba(0, 0, 0, 0.6);
    }
    </style>
@endpush
{{-- Content --}}
@section('content')

<div class="card mb-8">
    <!--begin::Body-->
    <div class="card-body p-10">
        <div class="row">
            <div class="col-lg-2">
                @yield('menu')
            </div>
            <div class="col-lg-10">
                @yield('form_aria')
            </div>
        </div>
    </div>

</div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
@endsection
