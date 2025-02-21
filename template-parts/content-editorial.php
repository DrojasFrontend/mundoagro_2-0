<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mundoagro_2.0
 */

?>




    <!-- MAIN -->
    <main class="mt-50">
        <div class="container with-sidebar single-content">
            <div class="content with-author">

                <div class="author-box text-center">
                <div class="editorial-author">
                    <img src="https://www.mundoagro.cl/wp-content/themes/mundoagro_2-0/assets/imgs/editorial/julio-foto-marzo.jpg" alt="Julio Rodiño Durán">
                </div>
                    <div class="author-content mt-10">
                        <a href="javascript:void(0);" rel="author"><span class="author-name text-uppercase font-weight-bold color-black">Julio Rodiño</span></a>
                        <p class="mt-5">Director Editorial</p>
                    </div>
                    <div class="divider-agro">
                        <div class="verde"></div>
                        <div class="verde-claro"></div>
                        <div class="amarillo"></div>
                    </div>
                </div>
                <div class="editorial-content">

                <!-- HEADER ARTICULO -->
                <div class="entry-headermb-30">
                    <div class="entry-meta meta-0 mb-15 font-small">
                        <?php foreach((get_the_category()) as $category):
                            $postcat= $category->cat_ID;
                            $catname =$category->cat_name; ?>
                            <a href="<?php echo get_category_link($postcat); ?>">
                                <span class="post-cat position-relative">
                                 <?php echo $catname; ?>
                                </span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php $numero_de_edicion = get_post_meta( get_the_ID(), 'numero_de_edicion', true ); ?>
                    <span class="post-editorial position-relative">Edición <?php echo $numero_de_edicion ?></span>
                    <h1 class="entry-title font-weight-bold">
                        <?php echo get_the_title(); ?>
                    </h1>
                    <div class="entry-date text-uppercase mb-30">
                        Por <strong>Julio Rodiño</strong> | <?php the_time('F j, Y') ?>
                    </div>
                    <!--p class="excerpt mb-30">
                        <?php echo get_the_excerpt(); ?>
                    </p-->
                    <!--<div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="single-tools">
                                <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                    <span class="mr-15">
                                        <span class="mr-5">Font size</span>
                                        <i class="fonts-size-zoom-in ti-zoom-in mr-5"></i>
                                        <i class="fonts-size-zoom-out ti-zoom-out"></i>
                                    </span>
                                    <a class="single-print mr-15"><span><i class="ti-printer mr-5"></i>Print</span></a>
                                    <div class="vline-space d-inline-block"></div>
                                    <a href="#"><span><i class="ti-email mr-5"></i>Email</span></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>

                <!-- BODY ARTICULO -->
                <article class="entry-wraper mb-50">
                    <div class="entry-main-content dropcap wow fadeIn animated">
                        <?php the_content(); ?>
                    </div>

                    <!-- TAGS -->                    
                    <div class="entry-tags mt-50 mb-30 wow fadeIn animated">
                        <span>Etiquetas</span>
                        <div class="tags">
                             <?php 
                                $posttags = get_the_tags();
                                if ($posttags) {
                                  foreach($posttags as $tag) {
                                    echo '<a href="'. get_tag_link($tag) .'">' . $tag->name . '</a>';
                                  }
                                } else {
                                    echo '<a href="https://www.mundoagro.cl/tag/agricultura-familiar/">Editorial</a>';
                                }
                            ?>
                        </div>
                    </div>

                    <!-- AUTOR -->
                    <div class="author-bio wow fadeIn animated">
                        <div class="author-image">
                        <?php $thb_id = get_the_author_meta('ID'); 
                            if (get_field('autor_1') and (get_field('autor_1')['nombre_autor'] != '')): ?>
                                <!-- Nombre del autor no mundoagro -->
                                <?php $image =  get_field('autor_1')['foto_autor'];
                                    $size = 'thumbnail';
                                    $thumb = $image['sizes'][ $size ];
                                    $width = $image['sizes'][ $size . '-width' ];
                                    $height = $image['sizes'][ $size . '-height' ];
                                ?>
                                <img src="<?php echo $thumb; ?>" class="avatar avatar-78 photo lazyload img-circle" alt="<?php echo $alt; ?>" height="78" width="78" loading="lazy" />
                        <?php else: ?>
                            <?php echo get_avatar( $thb_id, '78', '', '', array( 'class' => 'lazyload img-circle' ) );?>
                        <?php endif; ?>
                        </div>
                        <div class="author-info">
                            <div class="divider-small mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25.915" height="8.638" viewBox="0 0 25.915 8.638">
                                    <g id="Grupo_31" data-name="Grupo 31" transform="translate(-2746.362 -613.724)">
                                        <rect id="Rectángulo_61" data-name="Rectángulo 61" width="8.638" height="8.638" transform="translate(2772.276 613.724) rotate(90)" fill="#ffc405" />
                                        <rect id="Rectángulo_62" data-name="Rectángulo 62" width="8.638" height="8.638" transform="translate(2763.638 613.724) rotate(90)" fill="#9cd42a" />
                                        <rect id="Rectángulo_63" data-name="Rectángulo 63" width="8.638" height="8.638" transform="translate(2755 613.724) rotate(90)" fill="#00a44e" />
                                    </g>
                                </svg>
                            </div>
                            
                            <h3>
                            <span class="vcard author">
                                <a href="javascript:void(0);" rel="author">
                                    <?php if (get_field('autor_1')): ?>
                                    <!-- Nombre del autor no mundoagro -->
                                    <span class="name"><?php echo get_field('autor_1')['nombre_autor']; ?></span>
                                    <?php else: ?>
                                        <span class="name"><?php the_author_meta( 'display_name', $thb_id ); ?></span>
                                    <?php endif; ?>
                                </a>
                            </span>
                            </h3>
                            <div class="author-description">
                                <?php if (get_field('autor_1')): ?>
                                <!-- Nombre del autor no mundoagro -->
                                <span class="name"><?php echo get_field('autor_1')['descripcion_autor']; ?></span>
                                <?php else: ?>
                                    <?php the_author_meta( 'description', $thb_id ); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- POPUP MORE POSTS -->
                    <!--<div class="single-more-articles">
                        <h6 class="widget-title mb-30 font-weight-bold text">You might be interested in</h6>
                        <div class="post-block-list post-module-1 post-module-5">
                            <ul class="list-post">
                                <li class="mb-15">
                                    <div class="d-flex">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="http://via.placeholder.com/600x600" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">America’s Governors Get Tested for a Virus That Is Testing Them</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey">
                                                <span class="post-on">25 Jun</span>
                                                <span class="hit-count has-dot">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="http://via.placeholder.com/600x600" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Bartering Child’s Dress for Food: Life in Lebanon’s Economic Crisis</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                <span class="post-on">25 April</span>
                                                <span class="hit-count has-dot">37k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                    

                    <!-- COMMENTS -->
                    <div class="comments-area">

                        <?php if ( comments_open() || get_comments_number() ) :
                        echo comments_template();
                        endif; ?>

                        <h4 class="subtitle mb-30 d-none">03 Comentarios</h4>
                        <div class="comment-list wow fadeIn animated d-none">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="http://via.placeholder.com/133x133" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Robert Edition</a>
                                                </h5>
                                                <p class="date">6 minutes ago </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FORM COMMENTS -->
                    <div class="comment-form wow fadeIn animated d-none">
                        <h4 class="subtitle mb-30">Únete a la conversación</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Escribe un Comentario *"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Nombre *">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email *">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text" placeholder="Sitio web">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-black btn-block p-15">Publicar comentario</button>
                            </div>
                        </form>
                    </div>

                    <!-- RELATED POSTS -->
                    <?php $the_query = codeless_get_related_posts( get_the_ID(), 3 ); 
                    if ( $the_query->have_posts() ) : ?>
                    <div class="related-posts mb-80">
                        <h4 class="subtitle mb-30 mt-20px">Artículos relacionados</h4>
                        <div class="loop-list">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <article class="row mb-30 wow fadeIn animated">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative thumb-overlay mb-md-0 mb-3">
                                        <?php $url_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); ?>
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(<?php echo $url_img ?>)">
                                            <a class="img-link" href="<?php the_permalink() ?>"></a>
                                            <span class="top-right-icon background8"><i class="mdi mdi-flash-on"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 align-center-vertical">
                                    <div class="post-content">
                                        <div class="entry-meta meta-0 font-small mb-15">
                                            <?php foreach((get_the_category()) as $category):
                                                $postcat= $category->cat_ID;
                                                $catname =$category->cat_name; ?>
                                                <a href="<?php echo get_category_link($postcat); ?>">
                                                    <span class="post-cat position-relative">
                                                     <?php echo $catname; ?>
                                                    </span>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <h4 class="post-title mb-15">
                                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p class="font-medium excerpt"><?php echo get_the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; wp_reset_query();?>
                </article>
            </div>
            </div>
            <div class="sidebar ">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                <div class="widget-area">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeIn animated d-none">
                        <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                            <span>Author Award</span>
                        </h6>
                        <div class="author-content text-center">
                            <a href="author.html"><img class="img-circle d-inline-block mb-10" src="http://via.placeholder.com/133x133" alt=""></a>
                            <p><img src="<?php echo get_template_directory_uri() . '/assets/imgs/authors/sign.png'; ?>" alt=""></p>
                            <p>
                                You should write because you love the shape of stories and sentences and the creation of different words on a page. Writing comes from reading, and reading is the finest teacher of how to write.
                            </p>
                            <ul class="header-social-network d-inline-block list-inline font-small">
                                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                            <p class="font-small mt-15 text-muted"><a href="#">View more</a></p>
                        </div>
                    </div>
                    <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated d-none">
                        <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                            <span>Most Popular</span>
                        </h6>
                        <div class="post-block-list post-module-1 post-module-5">
                            <ul class="list-post">
                                <li class="mb-15">
                                    <div class="d-flex">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="http://via.placeholder.com/600x600" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">How I Made $11,000 From Writing in 30 Days</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                <span class="post-on mr-15">25 April</span>
                                                <span class="hit-count has-dot">54k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-15">
                                    <div class="d-flex">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="http://via.placeholder.com/600x600" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Incognito Mode Won’t Keep Your Browsing Private</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                <span class="post-on mr-15">25 April</span>
                                                <span class="hit-count has-dot">54k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                            <a class="color-white" href="single.html">
                                                <img src="http://via.placeholder.com/600x600" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">So You Want To Know The Cause of Avicii’s Death?</a></h6>
                                            <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                <span class="post-on mr-15">25 April</span>
                                                <span class="hit-count has-dot">54k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget widget-latest-comments mb-30 wow fadeIn  animated d-none">
                        <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                            <span>Recent comments</span>
                        </h6>
                        <div class="post-block-list post-module-6 mt-50">
                            <div class="post-module-6-item d-flex wow fadeIn">
                                <span class="item-count vertical-align"><i class="ti-comment"></i></span>
                                <div class="alith_post_title_small">
                                    <p class="font-medium mb-10"><a href="single.html">A writer is someone for whom writing is more difficult than it is for other people.</a></p>
                                    <div class="entry-meta meta-1 font-x-small">
                                        <span class="post-on">On 15 April</span>
                                        <span class="hit-count has-dot">by Johan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-module-6-item d-flex wow fadeIn">
                                <span class="item-count vertical-align"><i class="ti-comment"></i></span>
                                <div class="alith_post_title_small">
                                    <p class="font-medium mb-10"><a href="single.html">Anybody who has survived his childhood has enough information about life to last him the rest of his days.</a></p>
                                    <div class="entry-meta meta-1 font-x-small">
                                        <span class="post-on">On 05 May</span>
                                        <span class="hit-count has-dot">by Emma</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-module-6-item d-flex wow fadeIn">
                                <span class="item-count vertical-align"><i class="ti-comment"></i></span>
                                <div class="alith_post_title_small">
                                    <p class="font-medium mb-10"><a href="single.html">A writer is someone for whom writing is more difficult than it is for other people.</a></p>
                                    <div class="entry-meta meta-1 font-x-small">
                                        <span class="post-on">On 15 May</span>
                                        <span class="hit-count has-dot">by Steven</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-module-6-item d-flex wow fadeIn">
                                <span class="item-count vertical-align"><i class="ti-comment"></i></span>
                                <div class="alith_post_title_small">
                                    <p class="font-medium mb-10"><a href="single.html">Alexe more gulped much garrulous a yikes earthworm wiped because goodness bet mongoose that along accommodatingly tortoise indecisively admirable but shark</a></p>
                                    <div class="entry-meta meta-1 font-x-small">
                                        <span class="post-on">On 17 May</span>
                                        <span class="hit-count has-dot">by Mark</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget widget_newsletter mb-50 wow fadeIn animated d-none">
                        <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                            <span>Newsletter</span>
                        </h6>
                        <div class="newsletter">
                            <p class="">Continue reading uninterrupted with a subscription</p>
                            <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part">
                                <div class="form-newsletter-cover">
                                    <div class="form-newsletter">
                                        <input type="email" name="EMAIL" placeholder="Email address" required="">
                                        <button type="submit">
                                            <span class="long-arrow long-arrow-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>

            <!--end single header-->
        </div>
        <!--container-->
    </main>
