<form action="{{ route('account/update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label text-sm">Nama Lengkap</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}"
            class="form-control text-sm @error('name') is-invalid @enderror" autocomplete="off" id="name"
            placeholder="Masukkan Nama Lengkap">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="email" class="form-label text-sm">Alamat Email</label>
        <input type="email" value="{{ old('email', $user->email) }}"  name="email"
            class="form-control text-sm @error('email') is-invalid @enderror" autocomplete="off" id="email"
            placeholder="Masukkan Alamat Email">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label text-sm">No. Telepon</label>
        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}"
            class="form-control text-sm @error('phone') is-invalid @enderror" autocomplete="off" id="phone"
            placeholder="Masukkan No. Telepon">
        @error('phone')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label text-sm">Alamat</label>
        <textarea name="alamat" class="form-control text-sm @error('alamat') is-invalid @enderror" autocomplete="off" id="alamat" rows="2"
            placeholder="Masukkan Alamat">{{ old('alamat', $user->alamat) }}</textarea>
        @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label text-sm">Kata Sandi</label>
        <input type="password" name="password"
            class="form-control text-sm @error('password') is-invalid @enderror" autocomplete="off" id="password"
            placeholder="Masukkan Kata Sandi">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label text-sm">Foto Profil</label>
        <input type="file"  name="foto" class="form-control text-sm" autocomplete="off" id="foto"
            accept="image/*">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn bg-btn w-100">Simpan</button>
    </div>
</form>