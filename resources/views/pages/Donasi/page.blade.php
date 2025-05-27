@extends('components.layouts.MainLayout')
@section('content')


{{-- notification --}}
@if (session('success'))
<div class="card-body d-flex justify-content-center">
    <button type="button" class="btn bg-success swalDefaultSuccess">
        {{ session('success') }}
    </button>
</div>
@endif


<div class="d-flex justify-content-center align-items-center mb-5">
    <div class="d-flex flex-column  bg-white w-50 py-4 mt-5 form-donasi">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <i class="fas fa-gift icon-donasi"></i>
            <h3 class="text-umum font-weight-bold">Berikan Donasi</h3>
        </div>
        <div class="d-flex flex-column px-5 mt-3">
            @include('components.Form.index')
        </div>
    </div>
</div>

<script>
    setTimeout(() => {
        const alert = document.querySelector('.swalDefaultSuccess');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); 
        }
    }, 3000); 
</script>

@endsection