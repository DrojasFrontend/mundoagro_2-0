<?php 
$grupo_congresos    = get_field('grupo_congresos');
$titulo_principal   = !empty($grupo_congresos['titulo_principal']) ? esc_html($grupo_congresos['titulo_principal']) : '';
$imagen_id          = !empty($grupo_congresos['banner']['ID']) ? intval($grupo_congresos['banner']['ID']) : '';
$titulo             = !empty($grupo_congresos['titulo']) ? esc_html($grupo_congresos['titulo']) : '';
$descripcion        = !empty($grupo_congresos['descripcion']) ? esc_html($grupo_congresos['descripcion']) : '';
$fecha              = !empty($grupo_congresos['fecha']) ? esc_html($grupo_congresos['fecha']) : '';
$lugar              = !empty($grupo_congresos['lugar']) ? esc_html($grupo_congresos['lugar']) : '';
$cta                = !empty($grupo_congresos['cta']) ? $grupo_congresos['cta'] : [];
$cta_url            = !empty($cta['url']) ? esc_url($cta['url']) : '';
$cta_titulo         = !empty($cta['titulo']) ? esc_html($cta['titulo']) : '';
$cta_target         = !empty($cta['target']) ? $cta['target'] : '';
?>

<section class="mb-100">
    <div class="container">
        <div class="row">
            <?php if($titulo_principal) { ?>
                <div class="col-12 mb-18 wow fadeIn animated">
                    <h2 class="fs-2 text-black fw-bold"><?php echo $titulo_principal; ?></h2>
                </div>
            <?php } ?>

            <div class="col-12 wow fadeIn animated">
                <div class="p-8 bg-white rounded shadow">
                    <?php if ($imagen_id) : ?>
                        <?php echo generar_image_responsive($imagen_id, 'custom-size', SITE_NAME, 'img-fluid'); ?>
                    <?php endif; ?>
                    
                    <div class="p-18 pt-0">
                        <?php if ($titulo) : ?>
                            <h3 class="fs-3 text-black fw-bold mb-18"><?php echo esc_html($titulo); ?></h3>
                        <?php endif; ?>

                        <?php if ($descripcion) : ?>
                            <p class="fs-p-large"><?php echo esc_html($descripcion); ?></p>
                        <?php endif; ?>

                        <?php if ($fecha) : ?>
                            <p class="d-flex align-center fs-p-small mb-8">
                                <i class="icono icono-calendario"></i><?php echo esc_html($fecha); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($lugar) : ?>
                            <p class="d-flex align-center fs-p-small mb-24">
                                <i class="icono icono-ubicacion"></i><?php echo esc_html($lugar); ?>
                            </p>
                        <?php endif; ?>

                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
