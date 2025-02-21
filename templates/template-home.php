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

<!-- <h1 class="fs-1">H1</h1>
<h2 class="fs-2">H2</h2>
<h3 class="fs-3">H3</h3>
<h4 class="fs-4">H4</h4>

<div class="p-8 bg-green">Padding 8</div>
<div class="p-18 bg-yellow-100">Padding 18</div>
<div class="p-50 bg-black-25">Padding 50</div>
<div class="p-100 bg-gray">Padding 100</div> -->

<!-- CONTENT -->
  <main>
    <!-- News -->
    <?php get_template_part('template-parts/home/section', 'news')?>
    <!-- End News -->

    <!-- Magazine -->
    <?php get_template_part('template-parts/home/section', 'magazine')?>
    <!-- End Magazine -->
  </main>
<!-- CONTENT -->


<?php get_footer('nuevo');?>