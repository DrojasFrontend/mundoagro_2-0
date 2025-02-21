<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mundoagro_2.0
 */

get_header();
?>

    <!-- MAIN -->
    <main class="mt-30">
        <div class="container with-sidebar mb-40">

                <div class="content">
                    <!-- Destacadas -->
                    <div class="destacados mb-30">
                        <div class="row vertical-divider">
                            <div class="col-lg-8 col-md-8">
                                <div class="slide-fade mb-lg-0 mb-md-4 mb-sm-4">
                                    <?php $posts_offset = 0; $offset_destacados = 0;
                                        $myposts_destacados1 = get_posts(array('numberposts'=>1,
                                                     'tax_query' => array(
                                                            array(
                                                                    'taxonomy' => 'destacados',
                                                                    'field' => 'slug',
                                                                    'terms' => array('destacado-1'),
                                                            )
                                                    )
                                                     ));
                                        if($myposts_destacados1):
                                            $myposts = $myposts_destacados1;
                                        else:
                                            $myposts = get_posts(array('numberposts'=>1, 
                                                                'category_name' => 'noticias,columnas', 
                                                                'numberposts'=>1,
                                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'destacados',
                                                                        'operator' => 'NOT EXISTS'
                                                                    )
                                                                )
                                                        ));
                                            $cat = get_the_category($myposts[0]->ID)[0]->cat_name;
                                            if($cat == 'Noticias'):
                                                $posts_offset += 1;
                                            endif;
                                            $offset_destacados += 1;
                                         endif;
                                        if($myposts):
                                        foreach($myposts as $mypost): ?>
                                        <article class="first-post slide-fade-item mb-md-4 mb-lg-0">
                                            <figure class="mb-30">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>">
                                                    <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-lg'); ?>
                                                </a>
                                            </figure>

                                            <div class="post-content">
                                                <div class="entry-meta meta-0 mb-15 font-small">
                                                <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                    $tematica_id = $tematica->term_id;
                                                    $tematica_name =$tematica->name; 
                                                    $link = get_term_link($tematica) ?>
                                                    <!--?php print_r($tematica); ?-->
                                                    <a href="<?php echo $link; ?>">
                                                        <span class="post-cat position-relative">
                                                         <?php echo $tematica_name; ?>
                                                        </span>
                                                    </a>
                                                <?php endforeach; ?>
                                                </div>
                                                <h3 class="post-title mb-20 position-relative">
                                                    <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                                </h3>
                                                <p class="excerpt">
                                                    <?php echo excerpt(55, $mypost->ID); ?>
                                                </p>
                                            </div>
                                        </article>
                                        <?php endforeach; wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                    <?php $myposts_destacados2 = get_posts(array('numberposts'=>1,
                                                     'tax_query' => array(
                                                            array(
                                                                    'taxonomy' => 'destacados',
                                                                    'field' => 'slug',
                                                                    'terms' => array('destacado-2'),
                                                            )
                                                    )
                                                     ));
                                        if($myposts_destacados2):
                                            $myposts = $myposts_destacados2;
                                        else:
                                            $myposts = get_posts(array('numberposts'=>1, 
                                                                'category_name' => 'noticias,columnas', 
                                                                'numberposts'=>1,
                                                                'offset' => $offset_destacados,
                                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'destacados',
                                                                        'operator' => 'NOT EXISTS'
                                                                    )
                                                                )
                                                        ));
                                            $cat = get_the_category($myposts[0]->ID)[0]->cat_name;
                                            if($cat == 'Noticias'):
                                                $posts_offset += 1;
                                            endif;
                                            $offset_destacados += 1;
                                         endif;
                                       if($myposts):
                                       foreach($myposts as $mypost): ?>
                                        <article class="first-post slide-fade-item mb-md-4 mb-lg-0">
                                            <figure class="mb-30">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>">
                                                    <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-lg'); ?>
                                                </a>
                                            </figure>

                                            <div class="post-content">
                                                <div class="entry-meta meta-0 mb-15 font-small">
                                                <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                    $tematica_id = $tematica->term_id;
                                                    $tematica_name =$tematica->name; 
                                                    $link = get_term_link($tematica) ?>
                                                    <!--?php print_r($tematica); ?-->
                                                    <a href="<?php echo $link; ?>">
                                                        <span class="post-cat position-relative">
                                                         <?php echo $tematica_name; ?>
                                                        </span>
                                                    </a>
                                                <?php endforeach; ?>
                                                </div>
                                                <h3 class="post-title mb-20 position-relative">
                                                    <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                                </h3>
                                                <p class="excerpt">
                                                    <?php echo excerpt(55, $mypost->ID); ?>
                                                </p>
                                            </div>
                                        </article>
                                        <?php endforeach; wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>   
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="row vertical-divider">
                                    <?php $myposts_destacados3 = get_posts(array('numberposts'=>1,
                                                     'tax_query' => array(
                                                            array(
                                                                    'taxonomy' => 'destacados',
                                                                    'field' => 'slug',
                                                                    'terms' => array('destacado-3'),
                                                            )
                                                    )
                                                     ));
                                        if($myposts_destacados3):
                                            $myposts = $myposts_destacados3;
                                        else:
                                            $myposts = get_posts(array('numberposts'=>1, 
                                                                'category_name' => 'noticias,columnas', 
                                                                'numberposts'=>1,
                                                                'offset' => $offset_destacados,
                                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'destacados',
                                                                        'operator' => 'NOT EXISTS'
                                                                    )
                                                                )
                                                        ));
                                            $cat = get_the_category($myposts[0]->ID)[0]->cat_name;
                                            if($cat == 'Noticias'):
                                                $posts_offset += 1;
                                            endif;
                                            $offset_destacados += 1;
                                         endif;
                                        if($myposts):
                                        foreach($myposts as $mypost): ?>
                                        <article class="col-lg-12 col-md-12 mb-sm-3 wow fadeIn animated">
                                            <figure class="mb-15">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>">
                                                    <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-md'); ?>
                                                </a>
                                            </figure>
                                            <div class="entry-meta meta-0 mb-15 font-small">
                                                <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                    $tematica_id = $tematica->term_id;
                                                    $tematica_name =$tematica->name; 
                                                    $link = get_term_link($tematica) ?>
                                                    <!--?php print_r($tematica); ?-->
                                                    <a href="<?php echo $link; ?>">
                                                        <span class="post-cat position-relative">
                                                         <?php echo $tematica_name; ?>
                                                        </span>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                            <h6 class="post-title mb-10">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                            </h6>
                                        </article>
                                    <?php endforeach; wp_reset_postdata(); ?>
                                    <?php endif; ?>

                                    <?php $myposts_destacados4 = get_posts(array('numberposts'=>1,
                                                     'tax_query' => array(
                                                            array(
                                                                    'taxonomy' => 'destacados',
                                                                    'field' => 'slug',
                                                                    'terms' => array('destacado-4'),
                                                            )
                                                    )
                                                     ));
                                        if($myposts_destacados4):
                                            $myposts = $myposts_destacados4;
                                        else:
                                            $myposts = get_posts(array('numberposts'=>1, 
                                                                'category_name' => 'noticias,columnas', 
                                                                'numberposts'=>1,
                                                                'offset' => $offset_destacados,
                                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'destacados',
                                                                        'operator' => 'NOT EXISTS'
                                                                    )
                                                                )
                                                        ));
                                            $cat = get_the_category($myposts[0]->ID)[0]->cat_name;
                                            if($cat == 'Noticias'):
                                                $posts_offset += 1;
                                            endif;
                                         endif;
                                        if($myposts):
                                        foreach($myposts as $mypost): ?>
                                        <article class="col-lg-12 col-md-12 mb-sm-3 wow fadeIn animated">
                                            <figure class="mb-15">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>">
                                                    <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-md'); ?>
                                                </a>
                                            </figure>
                                            <div class="entry-meta meta-0 mb-15 font-small">
                                                <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                    $tematica_id = $tematica->term_id;
                                                    $tematica_name =$tematica->name; 
                                                    $link = get_term_link($tematica) ?>
                                                    <!--?php print_r($tematica); ?-->
                                                    <a href="<?php echo $link; ?>">
                                                        <span class="post-cat position-relative">
                                                         <?php echo $tematica_name; ?>
                                                        </span>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                            <h6 class="post-title mb-10">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                            </h6>
                                        </article>
                                    <?php endforeach; wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sidebar-mobile">
                        <?php echo do_shortcode("[bsa_pro_ad_space id=3]"); ?>
                        <?php echo do_shortcode("[bsa_pro_ad_space id=2]"); ?>
                    </div> 
                    
                    <!-- Banner 01 -->
                    <div class="d-none banner banner-01 top-divider">
                        <?php dynamic_sidebar( 'banner-1' ); ?>
                    </div>

                    <!-- Actualidad -->
                    <section class="actualidad">
                        <h6 class="section-header">
                            <span class="subtitle">Actualidad</span>
                            <span class="line"></span>
                        </h6>

                        <!-- ACTUALIDAD 3 X HORIZONTAL -->
                        <div class="row vertical-divider">
                            <?php $myposts = get_posts(array('category_name' => 'noticias', 'numberposts'=>3, 'offset' => $posts_offset,
                                'tax_query'      => array(
                                        array(
                                            'taxonomy' => 'destacados',
                                            'operator' => 'NOT EXISTS'
                                        )
                                    )
                                ));?>
                            <?php if($myposts):
                               foreach($myposts as $mypost): ?>
                                <article class="col-md-4 wow fadeIn animated">
                                    <figure class="mb-15">
                                        <a href="<?php echo get_permalink($mypost->ID); ?>">
                                            <?php echo get_the_post_thumbnail($mypost->ID, 'wide-md'); ?>
                                            <!--img src="http://via.placeholder.com/800x450" alt=""-->
                                        </a>
                                    </figure>
                                    <div class="entry-meta meta-0 mb-15 font-small">
                                        <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                            $tematica_id = $tematica->term_id;
                                            $tematica_name =$tematica->name; 
                                            $link = get_term_link($tematica) ?>
                                            <!--?php print_r($tematica); ?-->
                                            <a href="<?php echo $link; ?>">
                                                <span class="post-cat position-relative">
                                                 <?php echo $tematica_name; ?>
                                                </span>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                    <h6 class="post-title mb-10">
                                        <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                    </h6>
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                        
                        <!-- ACTUALIDAD 3 X VERTICAL -->
                        <?php $myposts = get_posts(array('category_name' => 'noticias', 'numberposts'=>3, 'offset'=>3 + $posts_offset,
                            'tax_query'  => array(
                                    array(
                                        'taxonomy' => 'destacados',
                                        'operator' => 'NOT EXISTS'
                                    )
                                )));?>
                            <?php if($myposts):
                               foreach($myposts as $mypost): ?>
                            <article class="row wow fadeIn animated">
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-30 mb-30"></div>
                                </div>
                                <div class="col-md-5 mb-md-0 mb-sm-3">
                                    <figure class="mb-0">
                                        <a href="<?php echo get_permalink($mypost->ID); ?>">
                                            <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-md'); ?>
                                            <!--img src="http://via.placeholder.com/800x450" alt=""-->
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-7 col-xl-6 align-self-center">
                                    <div class="post-content">
                                        <div class="entry-meta meta-0 mb-25 font-small">
                                            <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                $tematica_id = $tematica->term_id;
                                                $tematica_name =$tematica->name; 
                                                $link = get_term_link($tematica) ?>
                                                <!--?php print_r($tematica); ?-->
                                                <a href="<?php echo $link; ?>">
                                                    <span class="post-cat position-relative">
                                                     <?php echo $tematica_name; ?>
                                                    </span>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <h4 class="post-title mb-30 position-relative">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                        </h4>
                                        <p class="excerpt">
                                            <?php echo excerpt(55, $mypost->ID); ?>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <?php endforeach; wp_reset_postdata(); ?>
                        <?php endif; ?>
                        <div class="read-more text-right mb-30">
                            <a href="/noticias/" class="btn btn-black">Ver más noticias<i class="ti-angle-double-right small"></i></a>
                        </div>
                    </section>

                    <!-- Banner 02 -->
                    <div class="d-none banner banner-01 top-divider">
                        <?php dynamic_sidebar( 'banner-2' ); ?>
                    </div>

                    <!-- Empresas -->
                    <section class="actualidad">
                        <h6 class="section-header">
                            <span class="subtitle">Empresas</span>
                            <span class="line"></span>
                        </h6>

                        <!-- Empresas 3 X HORIZONTAL -->
                        <div class="row vertical-divider">
                            <?php $myposts = get_posts(
                                array('category_name' => 'empresas', 'numberposts'=>3)
                            );?>
                            <?php if($myposts):
                               foreach($myposts as $mypost): ?>
                                <article class="col-md-4 wow fadeIn animated">
                                    <figure class="mb-15">
                                        <a href="<?php echo get_permalink($mypost->ID); ?>">
                                            <?php echo get_the_post_thumbnail($mypost->ID, 'wide-md'); ?>
                                            <!--img src="http://via.placeholder.com/800x450" alt=""-->
                                        </a>
                                    </figure>
                                    <div class="entry-meta meta-0 mb-15 font-small">
                                        <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                            $tematica_id = $tematica->term_id;
                                            $tematica_name =$tematica->name; 
                                            $link = get_term_link($tematica) ?>
                                            <!--?php print_r($tematica); ?-->
                                            <a href="<?php echo $link; ?>">
                                                <span class="post-cat position-relative">
                                                 <?php echo $tematica_name; ?>
                                                </span>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                    <h6 class="post-title mb-10">
                                        <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                    </h6>
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                        
                        <div class="read-more text-right mb-30">
                            <a href="/empresas" class="btn btn-black">Ver más empresas<i class="ti-angle-double-right small"></i></a>
                        </div>
                    </section>

                    <!--Columnas -->
                    <section class="columnas mb-30">
                        <h6 class="section-header">
                            <span class="subtitle">Columnas</span>
                            <span class="line"></span>
                        </h6>
                        <div class="row vertical-divider">
                            <div class="col-xl-6 col-lg-12">
                            <?php $myposts = get_posts(array('category_name' => 'columnas', 'numberposts'=>1));?>
                            <?php if($myposts):
                               foreach($myposts as $mypost): ?>
                                <article class="row first-post wow fadeIn animated mb-md-4 mb-lg-0">
                                    <div class="col-lg-12 col-md-6">
                                        <figure class="mb-30">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>">
                                                <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-md'); ?>
                                                <!--img src="http://via.placeholder.com/800x450" alt=""-->
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 mb-15 font-small">
                                            <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                $tematica_id = $tematica->term_id;
                                                $tematica_name =$tematica->name; 
                                                $link = get_term_link($tematica) ?>
                                                <!--?php print_r($tematica); ?-->
                                                <a href="<?php echo $link; ?>">
                                                    <span class="post-cat position-relative">
                                                     <?php echo $tematica_name; ?>
                                                    </span>
                                                </a>
                                            <?php endforeach; ?>
                                            </div>
                                            <h4 class="post-title position-relative">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                            </h4>
                                            <div class="entry-meta meta-2 font-small">
                                                <p class="mb-5">
                                                    Por <a href="author.html"><span class="author-name text-uppercase"><?php echo get_the_author_meta('display_name'); ?></span></a>
                                                </p>
                                            </div>
                                            <p class="excerpt mt-30">
                                                <?php echo excerpt(55, $mypost->ID); ?>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="row vertical-divider">
                                <?php $myposts = get_posts(array('category_name' => 'columnas', 'numberposts'=>2, 'offset'=>1));?>
                                <?php if($myposts):
                                       foreach($myposts as $mypost): ?>
                                    <article class="col-md-6 wow fadeIn animated">
                                        <figure class="mb-15">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>">
                                                <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-md'); ?>
                                                <!--img src="http://via.placeholder.com/800x450" alt=""-->
                                            </a>
                                        </figure>
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                $tematica_id = $tematica->term_id;
                                                $tematica_name =$tematica->name; 
                                                $link = get_term_link($tematica) ?>
                                                <!--?php print_r($tematica); ?-->
                                                <a href="<?php echo $link; ?>">
                                                    <span class="post-cat position-relative">
                                                     <?php echo $tematica_name; ?>
                                                    </span>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <h6 class="post-title mb-10">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                        </h6>
                                        <div class="entry-meta meta-2 font-small">
                                            <p class="mb-5">
                                                Por <a href="author.html"><span class="author-name"><?php echo get_the_author_meta('display_name'); ?></span></a>
                                            </p>
                                        </div>
                                    </article>
                                    <?php endforeach; wp_reset_postdata(); ?>
                                <?php endif; ?>
                                    <div class="col-12">
                                        <div class="horizontal-divider mb-15 mt-15"></div>
                                    </div>
                                </div>
                                <div class="row vertical-divider">
                                <?php $myposts = get_posts(array('category_name' => 'columnas', 'numberposts'=>2, 'offset'=>3));?>
                                <?php if($myposts):
                                       foreach($myposts as $mypost): ?>
                                    <article class="col-md-6 wow fadeIn animated">
                                        <figure class="mb-15">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>">
                                                <?php echo get_the_post_thumbnail($mypost->ID, 'thumbnail-md'); ?>
                                                <!--img src="http://via.placeholder.com/800x450" alt=""-->
                                            </a>
                                        </figure>
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <?php foreach((wp_get_post_terms($mypost->ID, 'tematica')) as $tematica):
                                                $tematica_id = $tematica->term_id;
                                                $tematica_name =$tematica->name; 
                                                $link = get_term_link($tematica) ?>
                                                <!--?php print_r($tematica); ?-->
                                                <a href="<?php echo $link; ?>">
                                                    <span class="post-cat position-relative">
                                                     <?php echo $tematica_name; ?>
                                                    </span>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <h6 class="post-title mb-10">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                        </h6>
                                        <div class="entry-meta meta-2 font-small">
                                            <p class="mb-5">
                                                Por <a href="javascript:void(0);"><span class="author-name"><?php echo get_the_author_meta('display_name'); ?></span></a>
                                            </p>
                                        </div>
                                    </article>
                                    <?php endforeach; wp_reset_postdata(); ?>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="read-more text-right mt-30">
                            <a href="/columnas/" class="btn btn-black">Ver más columnas <i class="ti-angle-double-right small"></i></a>
                        </div>
                    </section>

                    <!-- EDITORIAL -->
                    <section class="editorial d-none">
                        <h6 class="section-header">
                            <span class="subtitle">Editorial</span>
                            <span class="line"></span>
                        </h6>
                        <div class="row vertical-divider">
                            <div class="col-md-12 col-lg-8">
                            <?php $myposts = get_posts(array('category_name' => 'editorial', 'numberposts'=>1));?>
                            <?php if($myposts):
                               foreach($myposts as $mypost): ?>
                                <article class="row wow fadeIn animated">
                                    <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 mb-md-0 mb-sm-3">
                                        <figure class="mb-0 text-center">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>">
												<img src="https://www.mundoagro.cl/wp-content/themes/mundoagro_2-0/assets/imgs/editorial/julio-foto-marzo.jpg" alt="Julio Rodiño Durán">
                                            </a>
                                            <figcaption class="mt-3">
                                                <span class="uppercase"><b>JULIO RODIÑO DURÁN</b></span><br>
                                                Director Editorial</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-sm-7 col-md-8 col-lg-7 col-xl-7 align-self-center">
                                        <div class="post-content">
                                            <?php $numero_de_edicion = get_post_meta( $mypost->ID, 'numero_de_edicion', true ); ?>
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><span class="post-editorial position-relative">Edición <?php echo $numero_de_edicion; ?></span></a>
                                            <div class="mb-10 text-uppercase spaced"><?php echo get_the_date('F Y', $mypost->ID) ?></div>
                                            <div class="separador mb-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="6" viewBox="0 0 160 6">
                                                    <g id="Grupo_504" data-name="Grupo 504" transform="translate(-2746.362 -613.724)">
                                                        <rect id="Rectángulo_61" data-name="Rectángulo 61" width="6" height="53.333" transform="translate(2906.362 613.724) rotate(90)" fill="#ffc405" />
                                                        <rect id="Rectángulo_62" data-name="Rectángulo 62" width="6" height="53.333" transform="translate(2853.029 613.724) rotate(90)" fill="#9cd42a" />
                                                        <rect id="Rectángulo_63" data-name="Rectángulo 63" width="6" height="53.333" transform="translate(2799.695 613.724) rotate(90)" fill="#00a44e" />
                                                    </g>
                                                </svg>
                                            </div>

                                            <h4 class="post-title mb-20 position-relative">
                                                <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                            </h4>
                                            <p class="excerpt">
                                                <?php echo excerpt(55, $mypost->ID); ?>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>
                            <div class="offset-lg-0 col-lg-4 pl-lg-4 d-none d-lg-block">
                                <h6 class="subtitle-02 mb-4">Editoriales Anteriores</h6>
                                <?php $myposts = get_posts(array('category_name' => 'editorial', 'numberposts'=>3, 'offset'=>1));?>
                                <?php if($myposts):
                                   foreach($myposts as $key=>$mypost): ?>
                                    <article class="wow fadeIn animated">
                                        <?php if($key != 0): ?>
                                        <div class="horizontal-divider mt-25 mb-25"></div>
                                        <?php endif; ?>
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <?php $numero_de_edicion = get_post_meta( $mypost->ID, 'numero_de_edicion', true ); ?>
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><span class="post-editorial position-relative">Edición <?php echo $numero_de_edicion; ?></span></a>
                                        </div>
                                        <h6 class="post-title mb-20 font-weight-500">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                        </h6>
                                    </article>

                                    <?php endforeach; wp_reset_postdata(); ?>
                                <?php endif; ?>
                                    <div class="read-more text-right mt-30">
                                        <a href="/editorial/" class="btn btn-black">Ver más Editoriales <i class="ti-angle-double-right small"></i></a>
                                    </div>
                            </div>
                        </div>

                    </section>
                </div>
                <div class="sidebar">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>

        </div>

        <!-- REVISTA DIGITAL FRANJA -->
        <div class="container-fluid bg-full mb-30">
            <div class="revista-digital-block">
                <div class="revista-digital-item txt">
                        <h4 class="mb-30">REVISTA DIGITAL</h4>
                        <img class="mb-10" alt="Home" src="https://www.mundoagro.cl/wp-content/uploads/2020/05/dummy-divider-revista-digital.png" class=" lazyloaded" data-src="https://www.mundoagro.cl/wp-content/uploads/2020/05/dummy-divider-revista-digital.png">
                        <p>Análisis, ideas y artículos técnicos en profundidad, mes a mes</p>
                        <button href="/suscripcion-revista/" class="btn btn-black"> Suscríbete</button>
                        <a href="/revista-digital-biblioteca/" style="display:block; margin-top:10px"> Ver más ediciones »</a>
                </div>
                <?php $myposts = get_posts(array('post_type' => 'revistas', 'numberposts'=>4));?>
                <?php if($myposts):
                    foreach($myposts as $mypost): ?>
                    <!--div class="revista-digital-item wow zoomIn animate"-->
                    <div class="revista-digital-item wow zoomIn animated">
                        <figure class="revista-thumbnail mb-15">
                        <?php $url_revista = get_post_meta( $mypost->ID, 'url_issuu', true ); ?>
                        <a href="<?php echo $url_revista; ?>">
                            <?php  $url_img = get_the_post_thumbnail_url($mypost->ID, 'medium') ?>
                            <img src="<?php echo $url_img ?>" class="item-revista shadow-01 wp-post-image" />
                        </a>
                        </figure>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="container with-sidebar mb-40">
            <div class="content">

                    <!-- FOTO DEL MES -->
                    <section class="foto-del-mes mb-30">
                        <h6 class="section-header">
                            <span class="subtitle">Foto del mes</span>
                            <span class="line"></span>
                        </h6>

                        <div class="row vertical-divider">
                            <div class="col-xl-7 col-lg-12 pr-lg-4">
                            <?php $myposts = get_posts(array('category_name' => 'foto-del-mes', 'numberposts'=>1));?>
                            <?php if($myposts):
                                foreach($myposts as $mypost): ?>
                                <article class=" wow fadeIn animated">
                                    <a href="<?php echo get_permalink($mypost->ID); ?>">
                                      <figure class="mb-15">
                                        <?php echo get_the_post_thumbnail($mypost->ID, 'wide-md'); ?>
                                      </figure>
                                    </a>
                                    <h4 class="post-title mb-10">
                                        <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                    </h4>
                                    <div class="entry-meta meta-2">
                                        <span class="mr-10 text-uppercase"><?php echo get_the_date('F Y', $mypost->ID) ?></span>
                                    </div>
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>

                            <div class="col-xl-5 pl-lg-4 d-none d-xl-block ">
                            <?php $myposts = get_posts(array('category_name' => 'foto-del-mes', 'numberposts'=>3, 'offset'=>1));?>
                            <?php if($myposts):
                                foreach($myposts as $key=>$mypost): ?>
                                <article class="row wow fadeIn animated align-items-center">
                                    <?php if($key != 0): ?>
                                    <div class="col-12">
                                        <div class="has-top-border mb-15 mt-15"></div>
                                    </div>
                                <?php endif; ?>
                                    <div class="col-md-6">
                                      <a href="<?php echo get_permalink($mypost->ID); ?>">
                                        <figure class="mb-0">
                                            <?php echo get_the_post_thumbnail($mypost->ID, 'wide-md'); ?>
                                        </figure>
                                      </a>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="post-title">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                        </h6>
                                        <div class="entry-meta meta-2">
                                            <span class="mr-10 text-uppercase"> <?php echo get_the_date('F Y', $mypost->ID) ?></span>
                                        </div>
                                    </div>
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="read-more text-right mt-3"><a href="/foto-del-mes/" class="btn btn-black">Ver más Fotos del Mes <i class="ti-angle-double-right small"></i></a></div>
                    </section>
                    
                    <!-- DESPUES DE HORA -->
                    <section class="despues-de-hora mb-30">
                        <h6 class="section-header">
                            <span class="subtitle">Después de Hora</span>
                            <span class="line"></span>
                        </h6>

                        <div class="row vertical-divider">
                            <div class="col-xl-7 col-lg-12 pr-lg-4">
                            <?php $myposts = get_posts(array('category_name' => 'despues-de-hora', 'numberposts'=>1));?>
                            <?php if($myposts):
                                foreach($myposts as $key=>$mypost): ?>
                                <article class=" wow fadeIn animated">
                                  <a href="<?php echo get_permalink($mypost->ID); ?>">
                                    <figure class="mb-15">
                                        <?php echo get_the_post_thumbnail($mypost->ID, 'wide-md'); ?>
                                    </figure>
                                  </a>
                                    <h4 class="post-title mb-10">
                                        <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                    </h4>
                                    <div class="entry-meta meta-2">
                                        <span class="mr-10 text-uppercase">
                                            <?php if (get_field('persona', $mypost->ID)): 
                                                echo get_field('persona', $mypost->ID);
                                                echo '<br/>';
                                                echo get_field('cargo-dh', $mypost->ID);
                                            endif; ?>
                                        </span>
                                    </div><!--
                                    <p class="excerpt mt-20">
                                        on el objetivo de promover la utilización de energías renovables y más eficientes, durante el año 2019 Hortifrut comenzó a desarrollar de la mano de Solarity, empresa especialista en la entrega de energía limpia, un proyecto fotovoltaico para el consumo eléctrico de los campos y plantas de la compañía. 
                                    </p>-->
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>

                            <div class="col-xl-5 pl-lg-4 d-none d-xl-block ">
                            <?php $myposts = get_posts(array('category_name' => 'despues-de-hora', 'numberposts'=>3, 'offset'=>1));?>
                            <?php if($myposts):
                                foreach($myposts as $key=>$mypost): ?>
                                <article class="row wow fadeIn animated align-items-center">
                                    <?php if($key != 0): ?>
                                    <div class="col-12">
                                        <div class="has-top-border mb-15 mt-15"></div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-6">
                                      <a href="<?php echo get_permalink($mypost->ID); ?>">
                                        <figure class="mb-0">
                                            <?php echo get_the_post_thumbnail($mypost->ID, 'wide-md'); ?>
                                        </figure>
                                      </a>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="post-title">
                                            <a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a>
                                        </h6>
                                        <div class="entry-meta meta-2">
                                            <span class="mr-10 text-uppercase font-small">
                                            <?php if (get_field('persona', $mypost->ID)): 
                                                echo get_field('persona', $mypost->ID);
                                            endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="read-more text-right mt-3"><a href="/despues-de-hora/" class="btn btn-black">Ver más Después de Hora <i class="ti-angle-double-right small"></i></a></div>
                    </section>
                </div>
            <div class="sidebar d-lg-block sticky-sidebar">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
        </div>
        
    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>