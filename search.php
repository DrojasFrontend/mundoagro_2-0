<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mundoagro_2.0
 */

get_header();
?>
	
	<!-- MAIN -->
    <main class="mt-30">
        <div class="container">
             <!--archive header-->
            <div class="archive-header text-center">
                <div class="breadcrumb font-small">
                    <?php global $wp_query;
                    echo 'Se encontraron ' .$wp_query->found_posts. ' resultados para:'; ?>
                </div>
                <h2 class="font-weight-bold"><span class="font-family-normal">"<?php
                    /* translators: %s: search query. */
                    printf( esc_html__( '%s', 'mundoagro_2-0' ), '<span>' . get_search_query() . '</span>' );
                    ?>"</span></h2>
                <span class="line-dots mt-20 mb-40"></span>
            </div>


            <!--Loop Grid 5-->
            <div class="row mb-50">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-12 col-md-pull-3">
                    <div class="mb-30">
                        <div class="loop-grid-3">
                            <?php
                            // The Loop
                            $count = 0;
                            while ( have_posts() ) : the_post(); ?>
                                <article class="row wow fadeIn animated">
                                    <div class="col-md-2">
                                        <div class="entry-meta meta-2 font-small text-uppercase color-muted mt-15">
                                            <span class="mr-10 mb-5"> <?php the_time('F j, Y') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="post-title mb-10 font-weight-bold">
                                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p class="excerpt mb-20">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <div class="entry-meta meta-2 font-small color-muted">
                                            <p class="mb-5">
                                                Por <a href="javascript:void(0);"><span class="author-name"><?php echo get_the_author(); ?></span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="mb-15">
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_post_thumbnail('medium');?>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </div>
                                </article>
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

        </div>
    </main>
    <!-- End Main content -->
<?php
get_sidebar();
get_footer();
