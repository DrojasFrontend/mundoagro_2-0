<?php
/* 
* Guarda archivos JSON de ACF en la carpeta '/acf-json' dentro del tema activo.
*/
function my_acf_json_save_point( $path ) {
	return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

?>
