<?php
/*
Plugin Name: Roman Numeral Converter by Calculator.iO
Plugin URI: https://www.calculator.io/roman-numeral-converter/
Description: Easily convert numbers to Roman numerals or vice versa with our free Roman Numeral Converter. Fast and accurate for values up to 3,999,999!
Version: 1.0.0
Author: www.calculator.io / Roman Numeral Converter
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_roman_numeral_converter
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Roman Numeral Converter by www.calculator.io";

function calcio_roman_numeral_converter_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Roman Numeral Converter</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_roman_numeral_converter_iframe"></iframe></div>';
}


add_shortcode( 'calcio_roman_numeral_converter', 'calcio_roman_numeral_converter_shortcode' );