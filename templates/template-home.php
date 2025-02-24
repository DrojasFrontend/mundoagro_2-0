<?php
/**
 * Template Name: Página de Inicio - Mundoagro
 * 
 * @package ThemeMundoagro
 */

if (!defined('ABSPATH')) {
  exit;
}
get_header('nuevo');

?>

<!-- CONTENT -->
<main>
  <!-- Noticias -->
  <?php get_template_part('template-parts/home/seccion', 'noticias') ?>
  <!-- Fin Noticias -->

  <!-- Congresos -->
  <?php get_template_part('template-parts/home/seccion', 'congresos') ?>
  <!-- Fin Congresos -->

  <!-- Cursos -->
  <?php get_template_part('template-parts/home/seccion', 'cursos') ?>
  <!-- Fin Cursos -->

</main>
<!-- CONTENT -->


<?php get_footer('nuevo'); ?>