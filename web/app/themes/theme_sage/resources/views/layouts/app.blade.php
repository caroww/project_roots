<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css"
/>

<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main">
    @yield('content')

  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>

<script>
  document.addEventListener( 'DOMContentLoaded', function () {
    var splideOptions = {
      direction: 'ltr',
      arrows: undefined,
      perPage: 5,
    }

    // if(screen.width < 1280) {
    //   splideOptions.height = '450px';
    // }
    //
    // if(screen.width < 992) {
    //   splideOptions.height = '350px';
    // }

    // if( 992 > screen.width && screen.width > 576) {
    //   splideOptions.height = '450px';
    // }

    var splide = new Splide( '.splide', splideOptions );

    splide.mount();
  } );

</script>





