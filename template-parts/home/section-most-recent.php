<?php
// Obtener las noticias destacadas del campo repetidor
$grupo_noticias_recientes = get_field("grupo_noticias_mas_recientes");
$noticias_mas_recientes = $grupo_noticias_recientes["noticias_mas_recientes"] ?? [];
?>

<section class="news-most-recent mb-50">
    <div class="container">
        <div class="row">
            <div class="d-flex gap-18 mb-18">
                <div class="col-12 col-lg-5">
                    <h2 class="fs-2 text-black fw-medium">Lo más reciente</h2>
                </div>
                <div class="col-12 col-lg-7 d-flex ">
                    <div class="linea mt-18">
                        <span class="punto"></span>
                        <span class="barra"></span>
                        <span class="punto"></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="d-flex gap-18 container-recent-news">
                    <?php
                    $contador = 0; // Contador para limitar a 4 noticias
                    if ($noticias_mas_recientes) {
                        foreach ($noticias_mas_recientes as $noticia_destacada) {
                            $noticias = $noticia_destacada['noticias_recientes'] ?? [];
                            foreach ($noticias as $noticia_id) {
                                if ($contador >= 4)
                                    break 2; // Detiene el bucle cuando se alcanzan 4 noticias
                    
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
                                    <div class="col-12 col-lg-3 ps-18">
                                        <article class="recent-featured-news pe-18">
                                            <a href="<?php echo esc_url($perfil_url); ?>" class="d-block">
                                                <img src="<?php echo esc_url($imagen); ?>" class="w-100 h-234 object-fit-fill" alt="">
                                            </a>
                                            <h4 class="fs-4 fw-bold mb-18"><?php echo esc_html($titulo); ?></h4>
                                            <p class="fs-p pt-18"><?php echo esc_html($extracto); ?></p>
                                            <a href="<?php echo esc_url($perfil_url); ?>">
                                                <p class="fs-p-small">LEER ARTÍCULO</p>
                                            </a>
                                        </article>
                                    </div>
                                    <?php
                                    $contador++;
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>