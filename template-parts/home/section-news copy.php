<?php
// Obtener las noticias destacadas del campo repetidor

$grupo_noticias = get_field("grupo_noticias");
$noticias_destacadas = $grupo_noticias["noticias_destacadas"];
$imagen_publicidad = $grupo_noticias["imagen_publicidad"];
?>

<section class="mb-50">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-9">
        <div class="col-12">
          <div class="row">
            <?php

            // Verificar que existen noticias y procesar la primera noticia
            if ($noticias_destacadas) {
              // Extraer el primer set de noticias para la primera sección
              $primer_noticia = $noticias_destacadas[0]['noticias']; // Suponiendo que 'noticias' es un campo Post Object
              if ($primer_noticia) {
                $noticia_id = $primer_noticia[0]; // Aquí solo tomamos el primer post seleccionado
                $noticia_post = get_post($noticia_id);
                if ($noticia_post) {
                  $titulo = get_the_title($noticia_post);
                  $imagen = get_the_post_thumbnail_url($noticia_post);
                  $url_noticia = get_permalink($noticia_post);
                  $extracto = get_the_excerpt($noticia_post);
                  // Imagen predeterminada si no tiene imagen destacada
                  if (!$imagen) {
                    $imagen = 'http://mundoagrodev.local/wp-content/uploads/2024/12/HUERTO-MODERNO.jpg';
                  }
                }
              }
              ?>
              <!-- Imagen del primer post -->
              <article class="d-flex gap-18 main-featured-news-">
                <div class="col-12 col-lg-6 mb-8">
                  <a href="<?php echo esc_url($url_noticia); ?>">
                    <img src="<?php echo esc_url($imagen); ?>" class="img-fluid" alt="">
                  </a>
                </div>
                <!-- Título y extracto del primer post -->
                <div class="col-12 col-lg-6 ">
                  <h3 class="fs-3 text-black fw-bold">
                    <?php echo esc_html($titulo); ?>
                  </h3>
                  <p class="fs-p"><?php echo esc_html($extracto); ?></p>
                  <a href="<?php echo esc_url($url_noticia); ?>">
                    <p class="fs-p-small">
                      LEER ARTÍCULO
                    </p>
                  </a>

                </div>
              </article>
            <?php } ?>
          </div>
        </div>

        <!-- Mostrar las siguientes noticias -->
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="d-flex gap-18">
              <?php
              // Mostrar todas las noticias en el campo repetidor
              if ($noticias_destacadas) {
                foreach ($noticias_destacadas as $index => $noticia_destacada) {
                  $noticias = $noticia_destacada['noticias']; // Array de valores seleccionados
                  // Usamos array_slice para empezar desde la segunda noticia (índice 1)
                  $noticias = array_slice($noticias, 1); // Omitimos el primer elemento (índice 0)
              
                  foreach ($noticias as $noticia_id) {
                    $noticia_post = get_post($noticia_id);
                    if ($noticia_post) {
                      $titulo = get_the_title($noticia_post);
                      $imagen = get_the_post_thumbnail_url($noticia_post);
                      $perfil_url = get_permalink($noticia_post);
                      $extracto = get_the_excerpt($noticia_post);
                      // Imagen predeterminada si no tiene imagen destacada
                      if (!$imagen) {
                        $imagen = 'http://mundoagrodev.local/wp-content/uploads/2024/12/HUERTO-MODERNO.jpg';
                      }
                      ?>
                      <div class="col-12 col-lg-4 p-0">
                        <article class="featured-news">
                          <a href="<?php echo esc_url($url_noticia); ?>" class="d-block">
                            <img src="<?php echo esc_url($imagen); ?>" class="w-100 h-119 object-fit-fill" alt="">
                          </a>
                          <h4 class="fs-4 fw-bold mb-18"><?php echo esc_html($titulo); ?></h4>
                          <p class="fs-p"><?php echo esc_html($extracto); ?></p>
                          <a href="<?php echo esc_url($url_noticia); ?>">
                            <p class="fs-p-small">
                              LEER ARTÍCULO
                            </p>
                          </a>
                        </article>


                      </div>
                      <?php
                    }
                  }
                }
              }
              ?>

            </div>
          </div>
          <div class="col-12 col-lg-4">
            <?php get_template_part('template-parts/home/section', 'magazine') ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <img src="<?php echo esc_url($imagen_publicidad); ?>" class="img-fluid" alt="Banner">
      </div>
    </div>
  </div>
</section>