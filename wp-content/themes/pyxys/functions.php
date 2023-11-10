<?php
/**
 * Pyxys functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Pyxys
 */

require_once 'hooks/image.php';
require_once 'classes/Styles.php';

$styles = new Styles();

$styles->loadStyles();

$styles->loadFontAwesome();
