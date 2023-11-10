<?php

class Styles
{
    const THEME_PREFIX = "pyxys";

    public function loadStyles() {
        wp_enqueue_style( self::THEME_PREFIX . '-styles', get_template_directory_uri() .
            '/assets/css/' . self::THEME_PREFIX .'.min.css', array(), '1.0.0' );
    }

    public function loadFontAwesome() {
        wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
        wp_enqueue_style('Font_Awesome');
    }
}