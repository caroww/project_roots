<?php
$background_image = get_first_image();

echo '<li class="splide__slide">
    <div class="w-32 h-32 bg-center bg-no-repeat bg-cover bg-gray-300 mb-2 rounded-md shadow-sm"
    style="background-image: url('.$background_image.')"></div>
    <div class="px-6 py-4">
        <h1>'. get_the_title() .' </h1>
        <p class=""> '. wp_trim_words(wp_strip_all_tags(get_the_content()), 10) .' </p>
    </div>
</li>';















