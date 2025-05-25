@extends('components.layouts.MainLayout')
@section('content')

{{-- notification --}}
@if (session('error'))
<div class="card-body d-flex justify-content-center">
<button type="button" class="btn btn-danger swalDefaultError">
    {{ session('error') }}
</button>
</div>

@endif

<div class="d-flex justify-content-center align-items-center mb-5 ">
    <div class="d-flex flex-column  bg-white w-50 py-4 mt-5 form-donasi">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-gift icon-donasi"></i>
            <h3 class="text-umum font-weight-bold">Silahkan Masuk</h3>
            <span class="text-sm">Masuk ke akun DonasiYu Anda untuk melanjutkan.</span>
        </div>
        <div class="d-flex flex-column px-5 mt-3">
            @include('components.Auth.FormAuth')
        </div>
    </div>
</div>



<script>
    setTimeout(() => {
        const alert = document.querySelector('.swalDefaultError');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); 
        }
    }, 2000); 
</script>


@endsection

