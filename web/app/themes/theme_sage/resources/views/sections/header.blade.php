<header class="banner">

  <div class="pr-cover-background" id="background-header" style="background-image: url(@asset('images/background-nav.jpg'))">
{{--    //TODO: espacement des items du menu --}}
    <div class="fixed top-0 left-0 right-0 flex flex-wrap items-center justify-between p-4 md:p-8" id="navbar">
      <a class="brand" href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a>
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}
        </nav>
      @endif
    </div>

    <div class="relative top-1/2  transform translate-x-0 translate-y-1/2">
      <div class="flex justify-center" >
        <h3 class="white-color text-xl font-bold">Roots Bedrock Sage 10.0 Example</h3>
      </div>
    </div>
  </div>

</header>

<div style="height:1000px">

</div>
