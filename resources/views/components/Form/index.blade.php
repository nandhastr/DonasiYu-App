<form>
  <div class="mb-3">
    <label for="namalengkap" class="form-label text-sm">Nama Lengkap</label>
    <input type="text" class="form-control text-sm" id="namalengkap" placeholder="Masukan Nama Lengkap">
  </div>
  <div class="mb-3">
    <label for="emailInput" class="form-label text-sm">Email</label>
    <input type="email" class="form-control text-sm" id="emailInput" placeholder="Masukan Email">
  </div>
  <div class="mb-3">
    <label for="donasiInput" class="form-label text-sm">Jumlah Donasi</label>
    <input type="number" class="form-control text-sm" id="donasiInput"
      placeholder="Masukan Jumlah Donasi Dalam Bentuk Angka">
  </div>

  <div class="mb-3">
    <label for="donasiInput" class="form-label text-sm">Pilih Donasi Untuk :</label>
    <select class="form-select text-sm" aria-label="Default select example">
      <option selected>Pilih Tujuan Donasi </option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>


  <div class="mb-3 d-flex flex-column ">
    <label class="form-label text-sm" for="exampleCheck1">Metode Pembayaran</label>

      <div class="form-check form-check-inline form-control  gap-2  px-2 py-1  ">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
      
        <label class="form-check-label d-flex gap-2 justify-content-center align-items-center text-sm " for="inlineRadio1">
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
        <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label  d-flex gap-2 justify-content-center align-items-center text-sm" for="inlineRadio1">
          <img src="{{ asset('/image/payment-methode/e-wallet.png') }}" class="bank-img" alt="e-wallet">
          E-Wallet</label>
      </div>
      <div class="form-check form-check-inline form-control d-flex gap-2  px-2 py-1 ">
        <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label  d-flex gap-2 justify-content-center align-items-center text-sm" for="inlineRadio1">
          <img src="{{ asset('/image/payment-methode/cash.png') }}" class="bank-img" alt="cash">
          Cash</label>
      </div>
    </div>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label text-sm">Sampaikan Pesan Anda</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

  <button type="submit" class="btn bg-btn">Kirim Donasi</button>
</form>