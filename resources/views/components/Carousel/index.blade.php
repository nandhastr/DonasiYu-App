

<div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    @foreach ($carouselItem as $item)
    <div class="carousel-item position-relative {{ $item['id'] === 1 ? 'active' : '' }}" data-bs-interval="{{ $item['id'] === 1 ? '3000' : '3000' }}">
      <img src="{{ asset($item['img']) }}" class="d-block carousel-image" alt="...">
      <div class="carousel-caption position-absolute text-start">
        <h1 class="title-donate ">{{ $item['title'] }}</h1>
        <p class="desc-donate">{{ $item['desc'] }}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>