<?php

/*
  Plugin Name: Lazy Responsive Video Embed with Google Analytics and Piwik Tracking 
  Plugin URI: http://www.marc.tv/marctv-wordpress-plugins/
  Description: Loads an image with play icon instead of an embed code which is only embedded after the image has been clicked.
  Version: 4.9
  Author: MarcDK
  Author URI: http://www.marc.tv
  License: GPL2
 */

function add_marctv_video_scripts()
{
    wp_enqueue_script(
        "jquery.isinviewport", WP_PLUGIN_URL . "/marctv-jquery-video-embed/js/isInViewport.min.js", array("jquery"), "3.0.0", true);

    wp_enqueue_script(
        "jquery.marctv_video", WP_PLUGIN_URL . "/marctv-jquery-video-embed/js/jquery.marctv-video.js", array("jquery"), "4.8.1", true);

    wp_enqueue_style(
        'dashicons');

    wp_enqueue_style(
        "jquery.marctv_video", WP_PLUGIN_URL . "/marctv-jquery-video-embed/css/jquery.marctv-video.css", false, "4.8.1");

}


function change_video_link($html, $url, $attr)
{
    if (strpos($url, 'youtube') !== false OR strpos($url, 'vimeo') !== false) {

        if (isset($attr['title'])) {
            return '<a class="embedvideo" href="' . $url . '">' . $attr['title'] . '</a>';
        } else {
            return '<a class="embedvideo no-caption" href="' . $url . '">Video</a>';
        }
    } else {
        return $html;
    }

}


if (!is_admin()) {
    add_filter('embed_oembed_html', 'change_video_link', 10, 3);
    add_action('wp_enqueue_scripts', 'add_marctv_video_scripts');
}
?>
