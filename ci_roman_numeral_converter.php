<?php
/*
Plugin Name: CI Roman numeral converter
Plugin URI: https://www.calculator.io/roman-numeral-converter/
Description: Roman numeral converter produces Roman numerals from Arabic numbers or converts Arabic numbers to Roman numerals, with values between 1 and 3,999,999.
Version: 1.0.0
Author: Roman Numeral Converter / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_roman_numeral_converter
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Roman Numeral Converter by www.calculator.io";

function display_calcio_ci_roman_numeral_converter(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Roman Numeral Converter</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_roman_numeral_converter_iframe"></iframe></div>';
}


add_shortcode( 'ci_roman_numeral_converter', 'display_calcio_ci_roman_numeral_converter' );