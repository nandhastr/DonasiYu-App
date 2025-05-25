@extends('components.layouts.MainLayout')
@section('content')

<div class="d-flex justify-content-center align-items-center mb-5 ">
    <div class="d-flex flex-column  bg-white w-50 py-4 mt-5 form-donasi">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-gift icon-donasi"></i>
            <h3 class="text-umum font-weight-bold">Daftar Akun</h3>
            <span class="text-sm">Daftar akun DonasiYu Anda untuk melanjutkan.</span>
        </div>
        <div class="d-flex flex-column px-5 mt-3">
            @include('components.Auth.FormAuth')
        </div>
    </div>
</div>
@endsection