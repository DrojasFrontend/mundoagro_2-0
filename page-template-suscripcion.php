<?php
/*
Template name: Plantilla Suscripcion
*/
?>
<?php get_header(); ?>

    <!-- MAIN -->
    <main class="mt-40 mb-70">
        <div class="container">
            <div class="page-header text-center mt-40 mb-30">
                <div class="text-section">Suscripción</div>
                <div class="page-name">Suscríbete a Mundoagro</div>
                <div>Infórmate de lo más nuevo en el campo y la agroindustria</div>
                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="102" height="6" viewBox="0 0 102 6">
                        <g id="Grupo_523" data-name="Grupo 523" transform="translate(-1512 -432)">
                            <rect id="Rectángulo_205" data-name="Rectángulo 205" width="34" height="6" transform="translate(1512 432)" fill="#00a44e" />
                            <rect id="Rectángulo_206" data-name="Rectángulo 206" width="34" height="6" transform="translate(1546 432)" fill="#9cd42a" />
                            <rect id="Rectángulo_207" data-name="Rectángulo 207" width="34" height="6" transform="translate(1580 432)" fill="#ffc405" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="container suscripcion-tipo">
            <div class="row text-center">
                <div class="col-md-6 order-md-5 bg-light-grey">
                    <h5 class="text-uppercase font-weight-bold mt-30">Papel Impreso</h5>
                    <h6 class="text-uppercase font-small color-green">* Gratis Revista Digital</h6>
                    <picture>
                        <img src="<?php echo get_template_directory_uri() . '/assets/imgs/theme/img-suscripcion-impreso.png'; ?>">
                    </picture>
                    <a href="/suscripcion-revista-impresa" type="submit" class="btn btn-black">Seleccionar</a>
                </div>
                <div class="col-md-6 order-md-1 bg-white">
                    <h5 class="text-uppercase font-weight-bold mt-30">Papel Digital</h5>
                    <picture>
                        <img src="<?php echo get_template_directory_uri() . '/assets/imgs/theme/img-suscripcion-digital.png'; ?>">
                    </picture>
                    <a href="javascript:void(0);" type="submit" class="btn btn-black">Seleccionar</a>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->

<?php
get_sidebar();
get_footer();
?>