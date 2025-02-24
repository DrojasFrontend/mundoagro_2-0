<?php 
$grupo_papel_digital  = get_field('grupo_papel_digital');
$titulo               = !empty($grupo_papel_digital['titulo']) ? esc_html($grupo_papel_digital['titulo']) : '';
$items                = !empty($grupo_papel_digital['items']) ? $grupo_papel_digital['items'] : [];
?>
<section>
  <div class="container">
    <?php if($titulo) { ?>
      <div class="col-12 mb-18">
        <h2 class="fs-2 text-black fw-bold"><?php echo $titulo; ?></h2>
      </div>
    <?php } ?>

    <div class="swiper swiperPapelDigital">
      <div class="swiper-wrapper">
        <?php foreach ($items as $key => $item) { 
          $imagen_id = !empty($item['imagen']['ID']) ? intval($item['imagen']['ID']) : '';
        ?>
          <div class="swiper-slide">
            <?php echo generar_image_responsive($imagen_id, 'custom-size', SITE_NAME, ''); ?>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="swiper swiperPapelDigital-thumbs">
      <div class="swiper-wrapper">
        <?php foreach ($items as $key => $item) { 
          $imagen_id = !empty($item['imagen']['ID']) ? intval($item['imagen']['ID']) : '';
        ?>
          <div class="swiper-slide">
            <?php echo generar_image_responsive($imagen_id, 'custom-size', SITE_NAME, 'img-fluid'); ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<section></section>