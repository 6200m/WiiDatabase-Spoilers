<?php
/*
Plugin Name: WiiDatabase Spoilers
Plugin URI: https://github.com/WiiDatabase/WiiDatabase-Spoilers
Description: Spoiler plugin for WiiDatabase.de
Version: 1.0.0
Author: iCON
Author URI: https://wiidatabase.de/
License: Public Domain
*/

if (!defined('ABSPATH')) exit;

/* Shortcode */
function wiidatabase_spoilers_shortcode($atts, $content) {
    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    // override default attributes with user attributes
    $spoiler_atts = shortcode_atts([
        'title' => 'Details',
        'initial_state' => 'collapsed'
    ], $atts);

    // start output
    if ($spoiler_atts['initial_state'] == 'collapsed') {
        $output = '<details>';
    } else {
        $output = '<details open="">';
    }

    $output .= '<summary>';
    $output .= $spoiler_atts['title'] . '</summary>';
    $output .= '<div class="spoiler-content">';
    $output .= do_shortcode(apply_filters('the_content', $content));
    $output .= '</div>';
    $output .= '</details>';

    // return output
    return $output;
}

add_shortcode('spoiler', 'wiidatabase_spoilers_shortcode');

/* CSS */
function wiidatabase_spoilers_css() {
    wp_register_style(
        'wiidatabase-spoilers',
        plugins_url('static/wiidatabase-spoilers.min.css', __FILE__),
        null,
        '1.0.0'
    );
    wp_enqueue_style('wiidatabase-spoilers');
}

add_action('wp_enqueue_scripts', 'wiidatabase_spoilers_css');
