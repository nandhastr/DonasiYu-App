<nav class="navbar navbar-expand navbar-white navbar-light border-bottom px-4 sticky-top ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-flex align-items-center p">
            <img src="{{ asset('/image/donate.png') }}" class="brand-image img-sm" alt="">
            <span class="nav-link text-xl font-weight-bold brand-text">DonasiYu</span>
        </li>
      
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right px-2 py-2">
                <span class=" dropdown-header font-weight-bold">DonasiYu</span>
               <a href="/" class="dropdown-item text-sm">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                
                @auth
                <a href="/riwayat" class="dropdown-item text-sm">
                    <i class="fas fa-bookmark mr-2"></i> Riwayat Donasi
                </a>
                <a href="/donasi" class="dropdown-item text-sm">
                    <i class="fas fa-gift mr-2"></i> Donasi Sekarang
                </a>
                <a href="/account" class="dropdown-item text-sm">
                    <i class="fas fa-user mr-2"></i> Akun
                </a>
                <a href="/logout" class="dropdown-item text-sm dropdown-footer daftar-btn"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                </a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="/login" class="dropdown-item text-sm">
                    <i class="fas fa-sign-in-alt mr-2"></i> Masuk
                </a>
                <a href="/register" class="dropdown-item text-sm dropdown-footer daftar-btn">Daftar</a>
                @endauth                
            </div>
            </li>
    </ul>
</nav>