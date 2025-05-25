<div class="row row-cols-1 row-cols-md-2 g-4 col-12  card-container">
    
    @foreach ($cardItem as $item)
    <div class="col d-flex justify-content-center align-items-stretch">
        <div class="card">
            <img src="{{ $item['img'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title font-weight-bold text-umum">{{ $item['title'] }}</h3>
                <p class="card-text">{{ $item['desc'] }}</p>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-donasi">Terkumpul: Rp. 75.000.000</h6>
                        <h6 class="text-donasi">Tujuan: Rp. 100.000.000</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="width: 75%"><span>75%</span></div>
                    </div>
                <a href="/donasi" class="btn bg-btn d-flex gap-2 justify-content-center align-items-center text-white mt-3"> 
                    <i class="fas fa-gift"></i>
                    <span>Donasi Sekarang</span>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>