<?php

define('SITE_NAME', get_bloginfo('name'));

/* 
* Guarda archivos JSON de ACF en la carpeta '/acf-json' dentro del tema activo.
*/
function my_acf_json_save_point( $path ) {
	return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

/* Traducciones LMS TUTOR */
function traducir_tutor_lms($translated_text, $text, $domain) {
	$traducciones = array(
	'Complete Course' => 'Completar Revista',
	'In Progress Courses' => 'Revistas en Curso',
	'You enrolled in this course on' => 'Te inscribiste en esta Revista el',
	'Enrollment valid until' => 'Inscripción válida hasta',
	'Total Courses' => 'Total de Revistas',
	'Start Learning' => 'Ver Revista',
	'Dashboard' => 'Panel',
	'My Profile' => 'Mi perfil',
	'Order History' => 'Historial de pedidos',
	'Settings' => 'Ajustes',
	'Logout' => 'Cerrar sesión',
	'My Courses' => 'Mis Revistas',
	'Course Name' => 'Nombre Revista',
	'Enrolled' => 'Inscritos',
	'View All' => 'Ver todo',
	'Courses' => 'Revistas',
	'Release Date (newest first)' => 'Fecha de lanzamiento (lo más nuevo primero)',
	'Release Date (oldest first)' => 'Fecha de lanzamiento (la más antigua primero)',
	'Course Title (a-z)' => 'Titulo Revista (a-z)',
	'Course Title (z-a)' => 'Titulo Revista (z-a)',
	'By' => 'Por',
	'Enrollment validity' => 'Validez de inscripción',
	'days' => 'Dias',
	'Register' => 'Registro',
	'View Cart' => 'Ver carrito',
	'Category' => 'Categoria',
	'Search' => 'Buscar por titulo',
	'No Data Available in this Section' => 'No hay información disponible.',
	);

	if (isset($traducciones[$text])) {
		return $traducciones[$text];
	}

	return $translated_text;
}
add_filter('gettext', 'traducir_tutor_lms', 10, 3);

?>
