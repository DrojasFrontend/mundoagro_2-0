<?php
/**
 * Template Name: Página de Inicio - Mundoagro
 * 
 * @package ThemeMundoagro
 */

if (!defined('ABSPATH')) {
  exit;
}
get_header();

?>

<!-- CONTENT -->
<main>
  <!-- Noticias -->
  <?php get_template_part('template-parts/home/seccion', 'noticias') ?>
  <!-- Fin Noticias -->

  <!-- Papel Digital -->
  <?php get_template_part('template-parts/home/seccion', 'papel-digital') ?>
  <!-- Fin Papel Digital -->

  <!-- Congresos -->
  <?php get_template_part('template-parts/home/seccion', 'congresos') ?>
  <!-- Fin Congresos -->

  <!-- Cursos -->
  <?php get_template_part('template-parts/home/seccion', 'cursos') ?>
  <!-- Fin Cursos -->

  <!-- Noticias recientes -->
  <?php get_template_part('template-parts/home/seccion', 'noticias-recientes') ?>
  <!-- Fin Noticias recientes -->

</main>
<!-- CONTENT -->


<?php get_footer(); ?>