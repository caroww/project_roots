@extends('layouts.app')

@section('content')

  <div class="white-color">
    <div class="plide-container">
      <h2>Lorem ipsum</h2>
      @include('partials.content-slider-articles')
    </div>
  </div>


  <div class="pr-cover-background pr-parallax-section" style="background-image: url(@asset('images/parallax.jpg'))">
  <h2>Lorem ipsum</h2>
    @include('partials.content-slider-articles')
  </div>

  <div class="" style="background-color:navajowhite">
    <h2>Lorem ipsum 2</h2>

    <video controls>
      <source src="maVideo.mp4" type="video/mp4">
      <source src="maVideo.webm" type="video/webm">
      <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
        Voici <a href="myVideo.mp4">un lien pour télécharger la vidéo</a>.</p>
    </video>
  </div>

  <div class="pr-cover-background pr-parallax-section" style="background-image: url(@asset('images/form.jpg'))">
    <h2>Lorem ipsum</h2>
    {!! do_shortcode('[contact-form-7 id="24" title="Contact form 1"]') !!}
  </div>

@endsection


