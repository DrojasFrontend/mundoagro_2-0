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

// ADS
$grupo_ads = get_field('grupo_ads');
$items     = !empty($grupo_ads['items']) ? $grupo_ads['items'] : [];

?>

<!-- CONTENT -->
<main>
  
  <!-- ADS -->
  <?php get_template_part('template-parts/componentes/seccion', 'ads', array('ads' => $items, 'posicion' => 1)) ?>
  <!-- Fin ADS -->

  <!-- Noticias -->
  <?php get_template_part('template-parts/home/seccion', 'noticias') ?>
  <!-- Fin Noticias -->

  <!-- ADS -->
  <?php get_template_part('template-parts/componentes/seccion', 'ads', array('ads' => $items, 'posicion' => 2)) ?>
  <!-- Fin ADS -->

  <!-- Papel Digital -->
  <?php get_template_part('template-parts/home/seccion', 'papel-digital') ?>
  <!-- Fin Papel Digital -->

  <!-- ADS -->
  <?php get_template_part('template-parts/componentes/seccion', 'ads', array('ads' => $items, 'posicion' => 3)) ?>
  <!-- Fin ADS -->

  <!-- Congresos -->
  <?php get_template_part('template-parts/home/seccion', 'congresos') ?>
  <!-- Fin Congresos -->

  <!-- ADS -->
  <?php get_template_part('template-parts/componentes/seccion', 'ads', array('ads' => $items, 'posicion' => 4)) ?>
  <!-- Fin ADS -->

  <!-- Cursos -->
  <?php get_template_part('template-parts/home/seccion', 'cursos') ?>
  <!-- Fin Cursos -->

  <!-- ADS -->
  <?php get_template_part('template-parts/componentes/seccion', 'ads', array('ads' => $items, 'posicion' => 5)) ?>
  <!-- Fin ADS -->

  <!-- Noticias recientes -->
  <?php get_template_part('template-parts/home/seccion', 'noticias-recientes') ?>
  <!-- Fin Noticias recientes -->

</main>
<!-- CONTENT -->


<?php get_footer(); ?>