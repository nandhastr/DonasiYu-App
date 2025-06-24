@extends('components.layouts.MainLayout')
@section('content')

{{-- notification --}}
@if (session('success'))
<div class="alert alert-success text-sm">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-center align-items-center mb-5 ">
    <div class="d-flex flex-column  bg-white w-50 py-4 mt-5 form-donasi">
        <div class="d-flex flex-column justify-content-start align-items-center">
          <img src="{{ Auth::user()->foto ? asset('storage/image/users/' . Auth::user()->foto) : asset('storage/image/users/user.png') }}"
                class="profile-user-img img-fluid img-circle w-10 h-15" alt="">
            <h3 class="text-umum font-weight-bold mt-3">{{ Auth::user()->name }}</h3>
            <span class="text-sm">{{ Auth::user()->email }}</span>
        </div>
        <div class="d-flex flex-column px-5 mt-3">
            @include('components.Profile.editAccount.index', ['user' => $user])
        </div>
    </div>
</div>
@endsection