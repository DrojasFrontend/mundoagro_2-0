<?php 
$grupo_destacados         = get_field('grupo_destacados');
$noticias                 = !empty($grupo_destacados['noticias']) ? $grupo_destacados['noticias'] : '';
$noticia_principal        = array_shift($noticias); // Obtiene el primer elemento y lo remueve del array
// Papel digital
$grupo_papel_digital      = !empty($grupo_destacados['grupo_papel_digital']) ? $grupo_destacados['grupo_papel_digital'] : '';
$papel_digital_imagen_id  = !empty($grupo_papel_digital['imagen']['ID']) ? intval($grupo_papel_digital['imagen']['ID']) : '';
$papel_digital_cta        = !empty($grupo_papel_digital['cta']) ? esc_url($grupo_papel_digital['cta']) : '';
// ADS
$grupo_ads                = !empty($grupo_destacados['grupo_ads']) ? $grupo_destacados['grupo_ads'] : '';
$ads                      = !empty($grupo_ads['ads']) ? $grupo_ads['ads'] : '';
?>

<section class="mb-100">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 col-xl-9">
        <!-- Artículo Principal -->
        <?php 
          $link_principal       = get_permalink($noticia_principal->ID);
          $titulo_principal     = get_the_title($noticia_principal->ID);
          $contenido_principal  = get_post_field('post_content', $noticia_principal->ID);
          $imagen_principal     = get_the_post_thumbnail($noticia_principal->ID, 'full', array('class' => 'w-100 h-100 object-fit-cover'));
        ?>
        <article class="row mb-18">
          <div class="col-12 col-lg-6 pe-xl-0">
            <div class="w-100 h-100">
              <?php echo $imagen_principal; ?>
            </div>
          </div>
          <div class="col-12 col-lg-6 pe-xl-0">
            <h1 class="mb-18">
              <?php 
                $titulo_principal_format = preg_replace('/&nbsp;|&#160;|\xC2\xA0/', ' ', $titulo_principal);
                echo wp_trim_words($titulo_principal_format, 30, ' (...)'); 
              ?>
            </h1>
            <p class="fs-p">
              <?php echo wp_trim_words($contenido_principal, 40, ' (...)'); ?>
            </p>
            <a class="d-flex align-center font-titulo fs-p-small text-black" href="<?php echo $link_principal; ?>" title="<?php echo SITE_NAME; ?>">
              LEER ARTÍCULO <i class="icono icono-flecha"></i>  
            </a>
          </div>
        </article>
  
        <div class="row">
          <!-- Artículos -->
          <div class="col-12 col-lg-8 pe-xl-0">
            <div class="d-grid grid-cols-3 gap-18">
              <?php foreach ($noticias as $noticia) { 
                $link       = get_permalink($noticia->ID);
                $titulo     = get_the_title($noticia->ID);
                $contenido  = get_post_field('post_content', $noticia->ID);
                $imagen     = get_the_post_thumbnail($noticia->ID, 'full', array('class' => 'w-100 d-flex object-fit-cover mb-8'));

                ?>
                <article class="col-12 noticiaDestacadas">
                  <div class="w-100">
                    <?php echo $imagen; ?>
                  </div>
                  <h2 class="fw-bold mb-18 text-black">
                    <?php echo $titulo; ?>
                  </h2>
                  <div class="fs-p-small mb-24">
                    <?php echo $contenido; ?>
                  </div>
                  <a class="d-flex align-center font-titulo text-black" href="<?php echo $link; ?>" title="<?php echo SITE_NAME; ?>">
                    LEER ARTÍCULO <i class="icono icono-flecha"></i>
                  </a>
                </article>
              <?php } ?>
            </div>
          </div>
          <div class="col-12 col-lg-4 pe-xl-0">
            <a href="<?php echo $papel_digital_cta; ?>">
              <?php echo generar_image_responsive($papel_digital_imagen_id, 'custom-size', SITE_NAME, 'img-fluid'); ?>
            </a>
          </div>
        </div>
      </div>
      <div class="d-none d-xl-block col-12 col-lg-3">
        <?php echo $ads ?>
      </div>
    </div>
  </div>
</section>