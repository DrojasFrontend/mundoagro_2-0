<?php 
$grupo_papel_digital  = get_field('grupo_papel_digital');
$titulo               = !empty($grupo_papel_digital['titulo']) ? esc_html($grupo_papel_digital['titulo']) : '';
$items                = !empty($grupo_papel_digital['items']) ? $grupo_papel_digital['items'] : [];
?>
<section class="mb-100">
  <div class="container">
    <?php if($titulo) { ?>
      <div class="col-12 mb-18 wow fadeIn animated">
        <h2 class="fs-2 text-black fw-bold"><?php echo $titulo; ?></h2>
      </div>
    <?php } ?>

    <div class="swiper swiperPapelDigital wow fadeIn animated">
      <div class="swiper-wrapper mb-18">
        <?php foreach ($items as $key => $item) { 
          $titulo     = !empty($item['titulo']) ? esc_html($item['titulo']) : '';
          $fecha      = !empty($item['fecha']) ? esc_html($item['fecha']) : '';
          $imagen_id  = !empty($item['imagen']['ID']) ? intval($item['imagen']['ID']) : '';

          $cta        = !empty($item['cta']) ? $item['cta'] : [];
          $cta_url    = !empty($cta['url']) ? esc_url($cta['url']) : '';
          $cta_titulo = !empty($cta['title']) ? esc_html($cta['title']) : '';
          $cta_target = !empty($cta['target']) ? $cta['target'] : '';
        ?>
          <div class="swiper-slide">
            <div class="d-flex gap-24">
              <div class="col-12 col-lg-6 text-right">
                <?php echo generar_image_responsive($imagen_id, 'custom-size', SITE_NAME, 'd-block ms-auto me-0'); ?>
              </div>
              <div class="col-12 col-lg-6">
                <?php if($titulo) { ?>
                  <h3 class="fs-3"><?php echo $titulo; ?></h3>
                <?php } ?>

                <?php if($fecha) { ?>
                  <p class="fs-p-large"><?php echo $fecha; ?></p>
                <?php } ?>

                  <a class="btn btn-primary" href="<?php echo $cta_url; ?>" target="<?php echo $cta_target; ?>" title="<?php echo $cta_titulo; ?>">
                    <?php echo $cta_titulo; ?>
                  </a>
              </div>
            </div>
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