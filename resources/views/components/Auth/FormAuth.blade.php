@if (Request::is('login'))
{{-- form login --}}
<form action="" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label text-sm">Alamat Email</label>
        <input type="email" name="email" class="form-control text-sm" id="email" placeholder="Masukkan Email" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label text-sm">Kata Sandi</label>
        <input type="password" name="password" class="form-control text-sm" id="password"
            placeholder="Masukkan Kata Sandi" required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-btn w-100">Login</button>
        <label class="form-check-label text-sm">Belum punya akun? <a href="/register">Daftar</a></label>
    </div>
</form>
@else
{{-- form register --}}
<form action="" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label text-sm">Nama Lengkap</label>
        <input type="text" name="name" class="form-control text-sm" id="name" placeholder="Masukkan Nama Lengkap"
            required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label text-sm">Alamat Email</label>
        <input type="email" name="email" class="form-control text-sm" id="email" placeholder="Masukkan Alamat Email"
            required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label text-sm">Kata Sandi</label>
        <input type="password" name="password" class="form-control text-sm" id="password"
            placeholder="Masukkan Kata Sandi" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label text-sm">No. Telepon</label>
        <input type="text" name="phone" class="form-control text-sm" id="phone" placeholder="Masukkan No. Telepon">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label text-sm">Alamat</label>
        <textarea name="alamat" class="form-control text-sm" id="alamat" rows="2"
            placeholder="Masukkan Alamat"></textarea>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label text-sm">Foto Profil</label>
        <input type="file" name="foto" class="form-control text-sm" id="foto" accept="image/*">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-btn w-100">Daftar</button>
        <label class="form-check-label text-sm">Sudah punya akun? <a href="/login">Login</a></label>
    </div>
</form>
@endif