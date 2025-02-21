<?php
/*
Template name: Plantilla Biblioteca Revista Digital
*/
?>
<?php get_header(); ?>
    
    <!-- MAIN -->
    <main class="mt-30">
        <div class="container">
            <div class="page-header text-center mt-40 mb-30">
                <div class="text-section">Sección</div>
                <div class="page-name">Revista Digital</div>
                <div>Encuentra todas nuestras ediciones en versión digital</div>
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
                <div class="revista-digital-grid">
                    <?php 
                    //echo $_GET['a'];
                    //echo $_GET['mo'];
                    $btpgid=get_queried_object_id();
                    $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array( 'posts_per_page' => 16, 
                        'category_name' => $btmetanm,
                        'paged' => $paged,'post_type' => 'revistas' );
                    $postslist = new WP_Query( $args );
                    $wp_query = $postslist;
                    if ( $postslist->have_posts() ) :
                        while ( $postslist->have_posts() ) : $postslist->the_post(); ?>
                        <article class="wow fadeIn animated">
                            <figure class="revista-thumbnail mb-15">
                                <?php 
                                    $url_revista = get_post_meta( get_the_ID(), 'url_issuu', true );
                                    $edicion = get_post_meta( get_the_ID(), 'edicion', true );
                                    $mes = get_post_meta( get_the_ID(), 'mes', true );
                                    $ano = get_post_meta( get_the_ID(), 'ano', true );
                                    $titulo_revista = get_post_meta( get_the_ID(), 'titulo_revista', true );
                                ?>
                                <a href="<?php echo $url_revista; ?>">
                                    <?php  $url_img = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>
                                    <img src="<?php echo $url_img ?>" class="shadow-01" alt="">
                                </a>
                            </figure>
                            <div class="entry-meta mt-20">
                                <a href="<?php echo $url_revista; ?>">
                                    <h6 class="post-title">Edición <?php echo $edicion; ?></h6>
                                    <span class="ml-10 text-uppercase"><?php echo $mes .' ' . $ano; ?></span></a>
                            </div>
                        </article>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?>
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

<?php
get_sidebar();
get_footer();
?>