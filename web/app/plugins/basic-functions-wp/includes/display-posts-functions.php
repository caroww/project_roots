<?php

/** Personnalisation du CSS des POSTS */

/**
 * Template Parts with Display Posts Shortcode
 * @author Bill Erickson
 * @see https://www.billerickson.net/template-parts-with-display-posts-shortcode
 *
 * @param string $output, current output of post
 * @param array $original_atts, original attributes passed to shortcode
 * @return string $output
 */
function be_dps_template_part($output, $original_atts)
{    // Return early if our "layout" attribute is not specified
    if (empty($original_atts['layout'])) {
        return $output;
    }
    ob_start();

    //TODO: Indiquer le nom du dossier du thème
    $theme_name = 'theme_sage';
    include(WP_CONTENT_DIR . DIRECTORY_SEPARATOR .'themes'. DIRECTORY_SEPARATOR . $theme_name . DIRECTORY_SEPARATOR .'resources' . DIRECTORY_SEPARATOR . 'views'. DIRECTORY_SEPARATOR . 'dps' . DIRECTORY_SEPARATOR . 'dps-'.$original_atts['layout'].'.php');

    $new_output = ob_get_clean();
    if (!empty($new_output)) {
        $output = $new_output;
    }

    return $output;
}
add_action('display_posts_shortcode_output', 'be_dps_template_part', 10, 2);