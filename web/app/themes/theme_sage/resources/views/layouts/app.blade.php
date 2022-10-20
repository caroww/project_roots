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

<script>
//Change navbar when scrolling

window.addEventListener('load', scrollFunction);
window.addEventListener('scroll', scrollFunction);

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.bottom >= 0
  );
}

function scrollFunction() {

  const header = document.querySelector('header');

  if (isInViewport(header)) {
    document.getElementById("navbar").style.color = '#f8d2c9';
  } else {
    document.getElementById("navbar").style.color = '#111111';
  }
}
</script>
