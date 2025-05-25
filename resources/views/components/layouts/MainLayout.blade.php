@include('components.layouts.Header.index')
@include('components.layouts.Navbar.index')

<div class="px-4">
    @yield('content')
</div>

@include('components.layouts.Footer.index')