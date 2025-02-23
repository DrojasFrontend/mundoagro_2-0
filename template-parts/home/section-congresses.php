<?php
// Obtener los valores de los campos ACF
$banner_congreso = get_field("banner_congreso");
$titulo_congreso = get_field("titulo_congreso");
$descripcion_congreso = get_field("descripcion_congreso");
$fecha_congreso = get_field("fecha_congreso");
$lugar_congreso = get_field("lugar_congreso");

// Extraer la URL de la imagen (si existe)
$banner_url = isset($banner_congreso['url']) ? $banner_congreso['url'] : '';

?>

<?php if ($titulo_congreso || $descripcion_congreso || $banner_url) : ?>
<section class="mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 mb-18">
                <h2 class="fs-2 text-black fw-medium">Congresos</h2>
            </div>
            <div class="col-12">
                <div class="card p-8 bg-white rounded-sm shadow-card">
                    <?php if ($banner_url) : ?>
                        <img class="card-img-top rounded-sm" src="<?php echo esc_url($banner_url); ?>" alt="<?php echo esc_attr($titulo_congreso ?: 'Imagen del Congreso'); ?>">
                    <?php endif; ?>
                    
                    <div class="card-body p-18 pt-0">
                        <?php if ($titulo_congreso) : ?>
                            <h2 class="fs-2 text-black fw-medium"><?php echo esc_html($titulo_congreso); ?></h2>
                        <?php endif; ?>

                        <?php if ($descripcion_congreso) : ?>
                            <p class="card-text"><?php echo esc_html($descripcion_congreso); ?></p>
                        <?php endif; ?>

                        <?php if ($fecha_congreso || $lugar_congreso) : ?>
                            <p class="card-text m-0 p-8 d-flex">
                                <?php if ($fecha_congreso) : ?>
                                    <img src="http://mundoagrodev.local/wp-content/uploads/2025/02/calendar_icon.png" class="me-8" alt="Icono Calendario">  <?php echo esc_html($fecha_congreso); ?>
                                <?php endif; ?>
                            </p>
                            <p class="card-text m-0 p-8 d-flex">
                                <?php if ($lugar_congreso) : ?>
                                    <img src="http://mundoagrodev.local/wp-content/uploads/2025/02/location_icon.png" class="me-8" alt="Icono Locacion">  <?php echo esc_html($lugar_congreso); ?>
                                <?php endif; ?>
                            </p>
                        <?php endif; ?>

                        <div class="text-center">
                            <a href="#" class="bg-green p-8 text-white rounded-sm">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
