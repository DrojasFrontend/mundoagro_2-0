<?php
/**
* Foto del Mes Category Template
*/
 
get_header(); ?> 
 

    <!-- MAIN -->
    <main class="mt-30">
        <div class="container">
            <div class="page-header text-center mt-40 mb-30">
                <div class="text-section">Sección</div>
                <div class="page-name"><?php echo single_cat_title(); ?></div>
                <?php // Display optional category description
                if ( category_description() ) : ?>
                <div><?php echo category_description(); ?></div>
                <?php endif; ?>
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
            
            <!--Loop Grid 5-->
            <div class="mb-30">
                <div class="row vertical-divider">
                <?php
                // The Loop
                $count = 0;
                while ( have_posts() ) : the_post(); ?>
                    <article class="col-xl-3 col-md-6 mb-15 mt-15 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('thumbnail-sm');?>
                            </a>
                        </figure>
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </h6>
                        <p class="excerpt mt-2">
                            <?php echo excerpt(55, get_the_ID()); ?>
                        </p>
                        <div class="entry-meta meta-2 font-small text-uppercase color-muted">
                            <span class="mr-10"> <?php the_time('F j, Y') ?></span>
                        </div>
                    </article>
                <?php $count++;
                if ($count%4==0): ?>
                </div>
                <div class="row vertical-divider">
                <?php endif; ?>
                <?php endwhile; ?>
                </div>
            </div>

            <!-- PAGINATION -->
            <div class="pagination-area pt-30 border-top-2 mt-30 mb-50 font-heading wow fadeIn animated">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-start">
                            <?php 
                                palfrey_pagination();
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <!-- End Main content -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>