<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mundoagro_2.0
 */

?>

    <!-- SIDEBAR -->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-left">
        <button class="off-canvas-close"><i class="ti-close"></i></button>
        <div class="sidebar-inner">
            <!--Latest-->
            <!--div class="sidebar-widget widget-latest-posts mb-30">
                <div class="widget-header position-relative mb-30">
                    <h5 class="widget-title mt-5 mb-30">Don't Miss</h5>
                </div>
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
                        <li class="mb-15">
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
                        <li class="mb-15">
                            <div class="d-flex">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                    <a class="color-white" href="single.html">
                                        <img src="http://via.placeholder.com/600x600" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Cairo Badly Needed a Detox. Lockdown Supplied One, at a Steep Price.</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                        <span class="post-on">25 April</span>
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
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Eating Thai Fruit Demands Serious Effort but Delivers Sublime Reward</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                        <span class="post-on">25 April</span>
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
                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">In Iraq, a New Prime Minister Takes Stock of His Bloodied Land</a></h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                        <span class="post-on">25 April</span>
                                        <span class="hit-count has-dot">54k Views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div-->
            <!--Categories-->
            <div class="sidebar-widget widget_categories mb-50 mt-10">
                <div class="widget-header position-relative mb-20">
                    <h5 class="widget-title mt-5">Menú</h5>
                </div>

                <?php
                wp_nav_menu( array( 
                    'menu' => 7893, 
                    'container_class' => 'widget_nav_menu' ) ); 
                ?>

            </div>
            

        </div>
    </aside>
