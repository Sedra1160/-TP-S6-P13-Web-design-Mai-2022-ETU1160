<?php
// if( ! defined('BASEPATH'))exit('No direct script acess allowed');
//     if( ! function_exists('css_url')){
//         function css_url($file){
//             return site_url("assets/css/".$file);
//         }
//     }
//     //vendor/bootstrap/css
//     if( ! function_exists('bootstrap_url')){
//         function bootstrap_url($file){
//             return site_url("assets/vendor/bootstrap/css/".$file);
//         }
//     }
?>
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url')) {
	function css_url($file) {
		return site_url("assets/css/".$file);
	}
}
if (! function_exists('bootstrap_url')){
    function bootstrap_url($file) {
		return site_url("assets/vendor/bootstrap/css/".$file);
	}
}

if ( ! function_exists('js_url')) {
	function js_url($file) {
		return site_url("assets/js/".$file);
	}
}

if ( ! function_exists('img_url')) {
	function img_url($file) {
		return site_url("assets/img/".$file);
	}
}

if ( ! function_exists('placeholder_url')) {
	function placeholder_url($file) {
		return site_url("assets/placeholder/".$file);
	}
}

?>