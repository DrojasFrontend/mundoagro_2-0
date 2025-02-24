<?php 
$grupo_cursos       = get_field('grupo_cursos');
$titulo             = !empty($grupo_cursos['titulo']) ? esc_html($grupo_cursos['titulo']) : '';
$descripcion        = !empty($grupo_cursos['descripcion']) ? esc_html($grupo_cursos['descripcion']) : '';
$logo               = !empty($grupo_cursos['logo']) ? $grupo_cursos['logo'] : '';
$ver_mas            = !empty($grupo_cursos['ver_mas']) ? $grupo_cursos['ver_mas'] : [];
$ver_mas_titulo     = !empty($ver_mas['title']) ? esc_html($ver_mas['title']) : '';
$ver_mas_url        = !empty($ver_mas['url']) ? esc_url($ver_mas['url']) : '';
$ver_mas_target     = !empty($ver_mas['target']) ? $ver_mas['target'] : '';
$cursos             = !empty($grupo_cursos['cursos']) ? $grupo_cursos['cursos'] : [];
?>

<section class="mb-100">
  <div class="container">
    <?php if($titulo) { ?>
      <h2 class="fs-2 text-black fw-bold"><?php echo $titulo; ?></h2>
    <?php } ?>

    <div class="row mb-18">
      <div class="col-12 col-lg-9 d-flex align-center">
        <?php if($descripcion) { ?>
          <p class="fs-4 text-gray-500 mb-0"><?php echo $descripcion; ?></p>
        <?php } ?>
      </div>
      <div class="col-12 col-lg-3">
        <img src="<?php echo $logo; ?>" alt="">
      </div>
    </div>
  </div>
  <div class="container-swiper position-relative">
    <div class="swiper swiperCursos px-8">
      <div class="swiper-wrapper">
        <?php foreach ($cursos as $key => $curso) { 
          $imagen_id  = !empty($curso['imagen']['ID']) ? intval($curso['imagen']['ID']) : '';
          $titulo     = !empty($curso['titulo']) ? esc_html($curso['titulo']) : '';
          $categoria  = !empty($curso['categoria']) ? esc_html($curso['categoria']) : '';
          $autor      = !empty($curso['autor']) ? esc_html($curso['autor']) : '';
          $clases     = !empty($curso['clases']) ? esc_html($curso['clases']) : '';
          $hora       = !empty($curso['hora']) ? esc_html($curso['hora']) : '';
    
          $cta        = !empty($curso['cta']) ? $curso['cta'] : '';
          $cta_url    = !empty($cta['url']) ? esc_url($cta['url']) : '';
          $cta_target = !empty($cta['target']) ? $cta['target'] : '';
        ?>
          <div class="swiper-slide pb-8">
            <a href="<?php echo $cta_url; ?>" class="d-block p-8 bg-white rounded shadow" title="<?php echo $titulo; ?>" target="<?php echo $cta_target; ?>">
              <?php echo generar_image_responsive($imagen_id, 'custom-size', SITE_NAME, 'd-flex img-fluid'); ?>
              
              <div class="px-18 py-8">
                <?php if($titulo) { ?>
                  <h3 class="fs-4 fw-bold mb-18"><?php echo $titulo; ?></h3>
                <?php } ?>
                <?php if($categoria) { ?>
                  <p class="d-inline-block fs-p-small bg-yellow-100 text-yellow-900 px-8 rounded-4 fw-bold"><?php echo $categoria; ?></p>
                <?php } ?>

                <div class="d-flex p-8 gap-18 bg-gray-50 rounded">
                  <p class="d-flex align-center gap-4 fs-p-small mb-0"><i class="icono icono-usuario"></i><?php echo $autor; ?></p>
                  <p class="d-flex align-center gap-4 fs-p-small mb-0"><i class="icono icono-calendario"></i><?php echo $clases; ?></p>
                  <p class="d-flex align-center gap-4 fs-p-small mb-0"><i class="icono icono-hora"></i><?php echo $hora; ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="swiper-pagination position-relative mt-24"></div>
  </div>

  <?php if($ver_mas_url) { ?>
    <div class="container">
      <div class="text-right">
        <a class="d-flex align-center justify-end font-titulo text-black" href="<?php echo $ver_mas_url; ?>" target="<?php echo $ver_mas_target; ?>" title="<?php echo $ver_mas_titulo; ?>">
          <?php echo $ver_mas_titulo; ?>
          <i class="icono icono-flecha"></i>
        </a>
      </div>
    </div>
  <?php } ?>
</section>