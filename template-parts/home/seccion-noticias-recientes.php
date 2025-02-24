<?php 
$grupo_noticias_recientes = get_field('grupo_noticias_recientes');
$titulo                   = !empty($grupo_noticias_recientes['titulo']) ? esc_html($grupo_noticias_recientes['titulo']) : '';
?>

<section class="mb-100">
    <div class="container">
        <?php if($titulo) { ?>
          <h2 class="fs-2 text-black fw-bold mb-18"><?php echo $titulo; ?></h2>
        <?php } ?>
        <div class="d-grid grid-cols-4 gap-18">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => 'DESC'
            );
    
            $query = new WP_Query($args);
    
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $link = get_permalink();
                    $titulo = get_the_title();
                    $contenido = get_the_content();
                    $imagen = get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'w-100 d-flex object-fit-cover'));
                    ?>
                    
                    <article class="col-12 noticiaRecientes clickeable">
                        <div class="w-100 overflow-hidden mb-8">
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
    
                <?php 
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No hay artículos para mostrar.</p>';
            endif;
            ?>
        </div>
    </div>
</section>