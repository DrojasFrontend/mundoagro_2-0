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
  <!-- News -->
  <?php get_template_part('template-parts/home/section', 'noticias') ?>
  <!-- End News -->

  <!-- Congresses -->
  <?php get_template_part('template-parts/home/section', 'congresses') ?>
  <!-- Congresses -->

  <!-- News Most Recent -->
  <?php get_template_part('template-parts/home/section', 'most-recent') ?>
  <!-- News Most Recent -->

</main>
<!-- CONTENT -->


<?php get_footer('nuevo'); ?>