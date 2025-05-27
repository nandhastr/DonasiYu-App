<form action="{{ route('donasi.store') }}" method="post">
  @csrf
  <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="" placeholder="" />

  <div class="mb-3">
    <label class="form-label text-sm">Nama Lengkap</label>
    <input type="text" class="form-control text-sm" disabled placeholder="{{ Auth::user()->name }}" autocomplete="off">
  </div>

  <div class="mb-3">
    <label for="donasiInput" class="form-label text-sm">Jumlah Donasi</label>
    <input type="number" name="nominal" class="form-control text-sm @error('nominal') is-invalid @enderror"
      value="{{ old('nominal') }}" id="donasiInput" placeholder="Masukan Jumlah Donasi Dalam Bentuk Angka" autocomplete="off">
    @error('nominal')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="donasiInput" class="form-label text-sm">Pilih Donasi Untuk :</label>
    <select class="form-select text-sm @error('peristiwa') is-invalid @enderror" id="donasiInput"
      value="{{ old('peristiwa') }}" name="peristiwa" aria-label="Default select example" autocomplete="off">
      <option value="">Pilih Tujuan Donasi </option>
      <option value="Donasi Bencana">Donasi Bencana</option>
      <option value="Donasi Darurat">Donasi Darurat</option>
      <option value="Donasi Pendidikan">Donasi Pendidikan</option>
      <option value="Donasi Kesehatan">Donasi Kesehatan</option>
      <option value="Donasi Kesejahteraan">Donasi Kesejahteraan</option>
      <option value="Donasi Lainnya">Donasi Lainnya</option>
    </select>
    @error('peristiwa')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>


  <div class="mb-3 d-flex flex-column ">
    <label class="form-label text-sm" for="exampleCheck1">Metode Pembayaran</label>
   
      <div class="form-check form-check-inline form-control  gap-2  px-2 py-1  ">
        <input class="form-check-input" type="radio" name="methode" id="inlineRadio1" value="bank-transfer" autocomplete="off">

        <label class="form-check-label d-flex gap-2 justify-content-center align-items-center text-sm "
          for="inlineRadio1">
          <img src="{{ asset('/image/payment-methode/bca.png') }}" class="bank-img" alt="BCA">
          <img src="{{ asset('/image/payment-methode/bri.png') }}" class="bank-img" alt="BRI">
          <img src="{{ asset('/image/payment-methode/mandiri.png') }}" class="bank-img" alt="Mandiri">
          <img src="{{ asset('/image/payment-methode/bni.png') }}" class="bank-img" alt="BNI">
          <img src="{{ asset('/image/payment-methode/bjb.png') }}" class="bank-img" alt="BJB">
          Bank Transfer
        </label>
      </div>
      <div class="d-flex gap-4 justify-content-between">
        <div class="form-check form-check-inline form-control d-flex gap-2  px-2 py-1 ">
          <input class="form-check-input " type="radio" name="methode" id="inlineRadio2" value="e-wallet" autocomplete="off">
          <label class="form-check-label  d-flex gap-2 justify-content-center align-items-center text-sm"
            for="inlineRadio1">
            <img src="{{ asset('/image/payment-methode/e-wallet.png') }}" class="bank-img" alt="e-wallet">
            E-Wallet</label>
        </div>
        
        <div class="form-check form-check-inline form-control d-flex gap-2  px-2 py-1 ">
          <input class="form-check-input " type="radio" name="methode" id="inlineRadio3" value="cash" autocomplete="off">
          <label class="form-check-label  d-flex gap-2 justify-content-center align-items-center text-sm"
            for="inlineRadio1">
            <img src="{{ asset('/image/payment-methode/cash.png') }}" class="bank-img" alt="cash">
            Cash</label>
        </div>
      </div>

      <div class="@error('methode') is-invalid @enderror">
    </div>
    @error('methode')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label text-sm">Sampaikan Pesan Anda</label>
    <textarea class="form-control text-sm @error('pesan') is-invalid @enderror" name="pesan"
      id="exampleFormControlTextarea1" rows="3" autocomplete="off">{{ old('pesan') }}</textarea>

    @error('pesan')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <button type="submit" class="btn bg-btn">Kirim Donasi</button>
</form>