@if (Request::is('login'))

{{-- notification --}}
@if (session('success'))
<div class="alert alert-success text-sm">
    {{ session('success') }}
</div>
@endif

{{-- form login --}}
<form action="{{ route('login.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label text-sm">Alamat Email</label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control text-sm @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" autocomplete="off">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label text-sm">Kata Sandi</label>
        <input type="password"  name="password" class="form-control text-sm @error('password') is-invalid @enderror" id="password"
            placeholder="Masukkan Kata Sandi" autocomplete="off">
            @error('password')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-btn w-100">Login</button>
        <label class="form-check-label text-sm">Belum punya akun? <a href="/register">Daftar</a></label>
    </div>
</form>
@else

{{-- form register --}}
<form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label text-sm">Nama Lengkap</label>
        <input type="text" value="{{ old('name') }}" name="name" class="form-control text-sm @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama Lengkap"autocomplete="off"
            >
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
                
    </div>

    <div class="mb-3">
        <label for="email" class="form-label text-sm">Alamat Email</label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control text-sm @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Alamat Email" autocomplete="off"
            >
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label text-sm">No. Telepon</label>
        <input type="text" value="{{ old('phone') }}" name="phone" class="form-control text-sm @error('phone') is-invalid @enderror" id="phone" placeholder="Masukkan No. Telepon" autocomplete="off">
        @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label text-sm">Alamat</label>
        <textarea name="alamat" class="form-control text-sm @error('alamat') is-invalid @enderror" id="alamat" rows="2"
            placeholder="Masukkan Alamat" autocomplete="off">{{ old('alamat') }}</textarea>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label text-sm">Kata Sandi</label>
        <input type="password" value="" name="password" class="form-control text-sm @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Kata Sandi" autocomplete="off"
            >
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label text-sm">Foto Profil</label>
        <input type="file" value="{{ old('foto') }}" name="foto" class="form-control text-sm" id="foto" accept="image/*">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-btn w-100">Daftar</button>
        <label class="form-check-label text-sm">Sudah punya akun? <a href="/login">Login</a></label>
    </div>
</form>
@endif

<script>
    setTimeout(() => {
        const alert = document.querySelector('.alert-success');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); 
        }
    }, 2000); 
</script>