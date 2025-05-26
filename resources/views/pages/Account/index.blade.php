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
<div class="d-flex flex-row justify-content-center align-items-center mb-5 ">
    <div class="d-flex flex-column  bg-white w-50 py-4 mt-5 form-donasi">
        <div class="d-flex flex-column justify-content-start align-items-center">
            <img src="{{ Auth::user()->foto ? asset('storage/image/users/' . Auth::user()->foto) : asset('storage/image/users/user.png') }}" class="profile-user-img img-fluid img-circle " alt="">
            <h3 class="text-umum font-weight-bold mt-3">{{ Auth::user()->name }}</h3>
            <span class="text-sm">{{ Auth::user()->email }}</span>
        </div>
        <div class="d-flex flex-column px-5 mt-3">
            @include('components.Profile.index', ['profileItems' => $profileItems])
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
    }, 2000); 
</script>
@endsection