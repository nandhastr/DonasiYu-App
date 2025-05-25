@extends('components.layouts.MainLayout')
@section('content')

<div class="d-flex justify-content-center align-items-center mb-5 ">
    <div class="d-flex flex-column  bg-white w-50 py-4 mt-5 form-donasi">
        <div class="d-flex flex-column justify-content-start align-items-center">
            <img src="{{ asset('/image/user.png') }}" class="profile-user-img img-fluid img-circle " alt="">
            <h3 class="text-umum font-weight-bold mt-3">Nama</h3>
            <span class="text-sm">example@gmail.com</span>
        </div>
        <div class="d-flex flex-column px-5 mt-3">
            @include('components.Profile.index')
        </div>
    </div>
</div>
@endsection