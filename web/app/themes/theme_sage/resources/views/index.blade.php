@extends('layouts.app')

@section('content')

  <div class="white-color">
    <div class="container mx-auto py-20">
      <div class="pb-9">
        <h2>Et adeste extremas serpens viri.</h2>
      </div>
      @include('partials.content-slider-articles')
    </div>
  </div>


  <div class="pr-cover-background pr-parallax-section" style="background-image: url(@asset('images/parallax.jpg'))">
    <div class="container mx-auto py-24">

      <div class="flex flex-row py-2 ">
        <div class="container p-7 bg-white bg-opacity-50 max-w-xl rounded-md">
          <div class="pb-3">
            <h2>Ita amant utilitatis quasi illa.</h2>
          </div>
          <div>
            <p>Hac ex causa conlaticia stipe Valerius humatur ille Publicola et
              subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et
              dotatur ex aerario filia Scipionis, cum nobilitas florem adultae
              virginis diuturnum absentia pauperis erubesceret patris.
            </p>
          </div>
        </div>
      </div>


      <div class="flex flex-row-reverse py-2">
        <div class="container p-7 bg-white bg-opacity-50 max-w-xl rounded-md">
          <div class="pb-3">
            <h2>Ita amant utilitatis quasi illa.</h2>
          </div>
          <div>
            <p>Hac ex causa conlaticia stipe Valerius humatur ille Publicola et
              subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et
              dotatur ex aerario filia Scipionis, cum nobilitas florem adultae
              virginis diuturnum absentia pauperis erubesceret patris.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="white-color">

    <div class="container mx-auto py-24 flex items-stretch">

      <div class="py-2 ">
        <div class="container p-7 bg-white bg-opacity-50 max-w-xl rounded-md">
          <div class="pb-3">
            <video controls>
              <source src="@asset('images/video.mp4')" type="video/mp4">
            </video>
          </div>
        </div>
      </div>


      <div class="py-2">
        <div class="container p-7 bg-white bg-opacity-50 max-w-xl rounded-md">
          <div class="pb-3">
            <h2>Ita amant utilitatis quasi illa.</h2>
          </div>
          <div>
            <p>Hac ex causa conlaticia stipe Valerius humatur ille Publicola et
              subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et
              dotatur ex aerario filia Scipionis, cum nobilitas florem adultae
              virginis diuturnum absentia pauperis erubesceret patris.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>


  <div class="pr-cover-background h-max" style="background-image: url(@asset('images/form.jpg'))">
    <div class="container mx-auto py-24 ">
      <div class="bg-white bg-opacity-50 rounded-md flow-root">

        <div class="py-2 float-left">
          <div class="container p-7 max-w-xl">
            <div class="pb-3">
              <h2>Ita amant utilitatis quasi illa.</h2>
            </div>
            <div>
              <p>Hac ex causa conlaticia stipe Valerius humatur ille Publicola et
                subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et
                dotatur ex aerario filia Scipionis, cum nobilitas florem adultae
                virginis diuturnum absentia pauperis erubesceret patris.
              </p>
            </div>
          </div>
        </div>

        <div class="py-2 float-right">
          <div class="container p-7 max-w-xl">
            <div class="pb-3">
              {!! do_shortcode('[contact-form-7 id="24" title="Contact form 1"]') !!}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection


