<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mundoagro_2.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/theme.css?version=1.1' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/widgets.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/responsive.css' ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,500;0,700;0,900;1,500;1,700;1,900&family=Noto+Sans+JP:wght@500;700&family=Oswald:wght@500&family=Sintony:wght@400;700&display=swap" rel="stylesheet">

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/9649ec31d27db4fb829494da8/ff27ca4f73b54e4b0517aecce.js");</script>	
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1756522571451598');
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1"
	src="https://www.facebook.com/tr?id=1756522571451598&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	
</head>

<body <?php body_class(); ?>>
    <!-- PROGRESS BAR -->
    <div class="scroll-progress bg-dark"></div>
    <!-- PRELOADER -->
    <div class="preloader-2">
        <div class="preloader-2-inner d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative wow animated fadeIn">
                <div class="text-center">
                    <img class="rotate-vert-center" src="https://www.mundoagro.cl/wp-content/uploads/2020/06/ico-mundoagro-70x70-1.png">
                    <h1 class="font-weight-bold">Mundoagro</h1>
                    <p class="text-uppercase">Cargando...</p>
                </div>
            </div>
        </div>
    </div>
    <?php wp_body_open(); ?>
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mundoagro_2-0' ); ?></a>

    <!-- BANNER TOP -->
	<div class="bg-full">
		<div class="banner banner-top d-none d-sm-block">
				<?php echo do_shortcode("[bsa_pro_ad_space id=7]"); ?>	       
		</div>

		<div class="banner-top-movil d-sm-none">
			<?php echo do_shortcode("[bsa_pro_ad_space id=11]"); ?>	      
		</div>		
		
	</div>
	
	<?php
	$latest = new WP_Query(array('post_type' => 'revistas', 'post_status' => 'publish', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC'));
    if($latest->have_posts()){
        $last_post_id = $latest->posts[0]->ID;
		$last_revista_url = get_post_meta( $last_post_id , 'url_issuu', true );
    }
	?>
	
    <!-- HEADER -->
    <div class="top-bar pt-15 pb-5">
        <div class="container">
            <div class="row font-heading mb-10">
                <div class="col-6">
                    <div id="date-time" class="d-inline-table">
                        <ul>
                            <li><i class="ti-calendar mr-5 font-x-small text-success"></i>
                                <?php $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                echo $dias[date('w')]." ".date('d').", ".$meses[date('n')-1]. ", ".date('Y') ; ?></li>
                            <li><i class="ti-book mr-5 font-x-small text-success"></i><a href="<?php echo $last_revista_url; ?>" target="_blank">Lee la última edición de Mundagro »</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <ul class="header-social-network d-inline-block list-inline mr-10">
                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center color-grey" target="_blank" href="https://facebook.com/MUNDOAGRO"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center color-grey" target="_blank" href="https://twitter.com/mundoagrochile"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center color-grey" target="_blank" href="https://instagram.com/revistamundoagro"><i class="ti-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon linkedin-icon text-xs-center color-grey" target="_blank" href="https://www.linkedin.com/in/revistamundoagro"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <header class="main-header header-style-1 font-heading header-sticky">
        <div class="mobile_menu d-lg-none d-block"></div>
        <div class="container">
            <div class="horizontal-divider"></div>
            <div class="d-flex">
            <!-- HEADER logo-->
            <div class="logo d-md-inline d-none"><a href="<?php echo site_url(); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="265.999" height="60" viewBox="0 0 265.999 60">
                        <g id="Grupo_602" data-name="Grupo 602" transform="translate(-245.001 -233.667)">
                            <g id="Grupo_181" data-name="Grupo 181" transform="translate(224.904 82.643)">
                                <path id="Trazado_23" data-name="Trazado 23" d="M71.074,165.812a17.816,17.816,0,0,0-12.513,8.436h.032l0,0h.035l9.654-.045Zm-14.39,12.776a17.756,17.756,0,0,0-.658,4.785h.008v.005h-.008a17.607,17.607,0,0,0,.643,4.714A25.138,25.138,0,0,1,63,190.477l.047.022,1.859-5.821-7.91-5.826-.055-.035h0l-.028-.031H56.9l0,0-.007-.011h0v0l0,0-.01,0h0l0-.008h-.008l-.005-.008v0l-.005,0-.01,0,0,0-.03-.031,0,0,0-.005-.031-.027-.007,0h0l0-.006-.035-.036-.01,0Zm16.729,22.56H73.8v-.01h0v.01h.388c.09-.181.185-.364.28-.533a24.112,24.112,0,0,1,1.931-3.023,25.664,25.664,0,0,1,2.257-2.636,1.474,1.474,0,0,1,.143-.145v0l.058-.062-5.033-3.615-5.059,3.632.04.045h0a24.781,24.781,0,0,1,4.606,6.34M90.94,188.094a17.891,17.891,0,0,0,.633-4.715h0v-.005a17.574,17.574,0,0,0-.66-4.785,1.864,1.864,0,0,1-.165.157l-.008,0h0v.008h-.008l-.022.013,0,0v.008l-.021.01,0,0-.005.007-.007,0v0c-.02.011-.038.031-.058.041l0,0-7.9,5.8,1.856,5.846a24.955,24.955,0,0,1,6.374-2.4m-1.9-13.844a17.243,17.243,0,0,0-1.216-1.771,19.007,19.007,0,0,0-1.466-1.663,17.776,17.776,0,0,0-9.827-5l2.765,8.374Z" transform="translate(-23.018 -9.474)" fill="#ffc405" fill-rule="evenodd" />
                                <path id="Trazado_24" data-name="Trazado 24" d="M56.951,262.914c.045-.358.085-.715.112-1.073a19.848,19.848,0,0,0-5.789-15.711,19.781,19.781,0,0,0-2.2-1.918,19.466,19.466,0,0,0-2.4-1.533,20.023,20.023,0,0,0-12.181-2.222c-.048.357-.083.715-.115,1.075a20.973,20.973,0,0,0-.032,2.767,19.894,19.894,0,0,0,5.822,12.944c.047.047.09.09.125.129a18.946,18.946,0,0,0,2.081,1.789,19.876,19.876,0,0,0,14.583,3.753" transform="translate(-9.106 -57.18)" fill="#c3d42a" fill-rule="evenodd" />
                                <path id="Trazado_25" data-name="Trazado 25" d="M135.808,240.457c-.36-.047-.721-.088-1.076-.115a20.129,20.129,0,0,0-2.767-.03,19.836,19.836,0,0,0-12.944,5.819c-.046.041-.088.081-.13.12a20.183,20.183,0,0,0-1.789,2.084,19.3,19.3,0,0,0-1.531,2.4,20,20,0,0,0-2.222,12.179c.358.05.718.087,1.076.115a20.343,20.343,0,0,0,2.765.036,19.91,19.91,0,0,0,12.946-5.822.949.949,0,0,1,.133-.12,20.164,20.164,0,0,0,1.786-2.089,20.772,20.772,0,0,0,1.533-2.4,20.1,20.1,0,0,0,2.219-12.181" transform="translate(-59.628 -57.18)" fill="#007236" fill-rule="evenodd" />
                                <path id="Trazado_26" data-name="Trazado 26" d="M279.065,181.022c0-3.41-.311-5.524-.941-6.357a3.449,3.449,0,0,0-5.088,0c-.625.833-.94,2.947-.94,6.357q0,5.085.906,6.282a3.373,3.373,0,0,0,5.163,0q.9-1.2.9-6.282m6.354,0a36.353,36.353,0,0,1-.29,5.556,8.519,8.519,0,0,1-2.322,4.686,10.437,10.437,0,0,1-14.45,0,8.49,8.49,0,0,1-2.326-4.686,35.572,35.572,0,0,1-.29-5.556,35.655,35.655,0,0,1,.29-5.557,8.55,8.55,0,0,1,2.326-4.683,10.438,10.438,0,0,1,14.45,0,8.579,8.579,0,0,1,2.322,4.683,36.439,36.439,0,0,1,.29,5.557m-27.093-4.611a2.558,2.558,0,0,0-.761-1.836,2.689,2.689,0,0,0-2-.773h-3.592v5.224h3.592a2.675,2.675,0,0,0,2-.781,2.546,2.546,0,0,0,.761-1.833m7.73,17.542H258.69l-4.582-9.626h-2.136v9.626h-6.359V168.1h10.242a8.679,8.679,0,0,1,6.575,2.577,7.95,7.95,0,0,1,2.256,5.736,7.064,7.064,0,0,1-4.218,6.757ZM244.2,182.548a19.061,19.061,0,0,1-.551,5.121,8.061,8.061,0,0,1-2,3.523,10.432,10.432,0,0,1-14.52.072,8.488,8.488,0,0,1-2.326-4.686,35.616,35.616,0,0,1-.29-5.556,35.7,35.7,0,0,1,.29-5.557,8.548,8.548,0,0,1,2.326-4.683,9.758,9.758,0,0,1,7.19-2.9,11.983,11.983,0,0,1,4.464.711,11.006,11.006,0,0,1,3.522,2.485l-4.324,4.322a8.138,8.138,0,0,0-1.671-1.376,3.98,3.98,0,0,0-1.992-.475,3,3,0,0,0-2.507,1.12c-.635.833-.945,2.947-.945,6.357,0,3.44.31,5.567.945,6.394a2.959,2.959,0,0,0,2.507,1.09,3.426,3.426,0,0,0,2.592-1,3.934,3.934,0,0,0,.965-2.852v-.293h-3.558v-5.3H244.2ZM215.931,184.8l-2.177-6.9-2.321,6.9Zm9.516,9.153H218.8l-1.2-3.85h-7.95l-1.266,3.85h-6.65l9.406-25.855h4.9Zm-29.13-12.931c0-3.41-.315-5.524-.945-6.357a3.438,3.438,0,0,0-5.079,0c-.636.833-.946,2.947-.946,6.357q0,5.085.911,6.282a3.362,3.362,0,0,0,5.153,0q.9-1.2.906-6.282m6.359,0a35.509,35.509,0,0,1-.295,5.556,8.553,8.553,0,0,1-2.322,4.686,10.443,10.443,0,0,1-14.454,0,8.45,8.45,0,0,1-2.317-4.686,34.715,34.715,0,0,1-.3-5.556,34.8,34.8,0,0,1,.3-5.557,8.509,8.509,0,0,1,2.317-4.683,10.443,10.443,0,0,1,14.454,0,8.614,8.614,0,0,1,2.322,4.683,35.592,35.592,0,0,1,.295,5.557m-26.883,0c0-3.189-.226-5.133-.691-5.806a3.4,3.4,0,0,0-3.052-1.453h-2.792v14.524h2.792a3.408,3.408,0,0,0,3.052-1.458,3.6,3.6,0,0,0,.55-1.516c.09-.778.141-2.209.141-4.29m6.359,0a41.517,41.517,0,0,1-.22,5.595,8.65,8.65,0,0,1-2.466,4.792,9.424,9.424,0,0,1-6.97,2.544H162.91V168.1H172.5a9.433,9.433,0,0,1,6.97,2.539,8.686,8.686,0,0,1,2.466,4.793,41.554,41.554,0,0,1,.22,5.591m-21.76,12.931h-5.558l-8.276-13v13H140.2V168.1h5.558l8.281,12.994V168.1h6.354Zm-22.266-9.083a8.637,8.637,0,0,1-2.849,6.72,10.033,10.033,0,0,1-6.995,2.579,9.779,9.779,0,0,1-6.892-2.542,8.711,8.711,0,0,1-2.87-6.757V168.1h6.352V184.73a4.013,4.013,0,0,0,.908,2.777,3.2,3.2,0,0,0,2.5,1,3.331,3.331,0,0,0,2.544-1,3.879,3.879,0,0,0,.946-2.777V168.1h6.354Zm-21.685,9.083h-6.354V181.57l-3.668,6.389h-4.068l-3.668-6.389v12.383H92.336V168.1h6.242l5.809,11.4,5.809-11.4h6.247ZM76.18,183.277c-.36-.047-.721-.088-1.076-.113a18.669,18.669,0,0,0-2.767-.033,19.893,19.893,0,0,0-12.944,5.814h-.005a1.1,1.1,0,0,1-.125.123,19.87,19.87,0,0,0-1.791,2.089,19.66,19.66,0,0,0-1.528,2.4,20.033,20.033,0,0,0-2.219,12.181c.353.048.711.085,1.073.115a20.825,20.825,0,0,0,2.765.033,19.869,19.869,0,0,0,12.944-5.822h.005a.774.774,0,0,1,.125-.12,20.745,20.745,0,0,0,1.794-2.084,20.456,20.456,0,0,0,1.531-2.4,20.082,20.082,0,0,0,2.219-12.181M47.846,205.734c.05-.355.083-.715.115-1.073a20.91,20.91,0,0,0,.032-2.767,19.9,19.9,0,0,0-5.824-12.949v0a20.064,20.064,0,0,0-2.206-1.914,19.315,19.315,0,0,0-2.4-1.531,19.966,19.966,0,0,0-12.178-2.22c-.048.355-.083.713-.115,1.076a21.283,21.283,0,0,0-.035,2.757,19.929,19.929,0,0,0,5.824,12.952v0a1.168,1.168,0,0,1,.12.128,21.053,21.053,0,0,0,2.086,1.792,19.316,19.316,0,0,0,2.4,1.528,20,20,0,0,0,12.179,2.221m20.074-27.116a17.769,17.769,0,0,0,.632-4.714h0V173.9a17.575,17.575,0,0,0-.66-4.785,1.592,1.592,0,0,1-.17.157l-.005,0v.009l-.01,0-.02.012v.008l0,0-.018.01,0,0-.005.008,0,0,0,.006a.24.24,0,0,0-.058.04h0l-7.9,5.8,1.856,5.846a25.045,25.045,0,0,1,6.372-2.4M50.395,191.675c.125,0,.258,0,.385,0v-.01h0v.01c.13,0,.258,0,.385,0,.09-.181.185-.358.278-.533a24.53,24.53,0,0,1,1.936-3.023,25.45,25.45,0,0,1,2.259-2.636,1.762,1.762,0,0,1,.133-.145h0l.058-.06-5.023-3.619-5.064,3.632.04.047a24.67,24.67,0,0,1,4.611,6.337m-16.729-22.56a17.755,17.755,0,0,0-.655,4.785h.01v.005h-.01a17.783,17.783,0,0,0,.636,4.714A25.1,25.1,0,0,1,39.978,181l.047.022,1.859-5.818-7.91-5.829-.055-.035h0l-.027-.025v-.005h-.008l-.007,0,0-.008,0,0-.01-.005h-.005v-.005l-.008,0-.005-.009,0,0-.01,0-.005,0v0l-.033-.025,0-.005,0,0-.031-.03-.007,0h0l0-.006-.04-.039H33.7Zm14.39-12.776a17.761,17.761,0,0,0-9.836,5.006,18.11,18.11,0,0,0-2.68,3.424h.035l0,.006h.035l9.657-.043Zm17.97,8.436A17.615,17.615,0,0,0,64.81,163a17.834,17.834,0,0,0-11.3-6.667l2.767,8.374Zm-15.243-.065,1.717,5.206,5.493.035-4.42,3.24,1.663,5.236-4.441-3.2-4.473,3.2,1.671-5.219L43.57,169.95l5.481-.022Zm0-13.685A22.884,22.884,0,0,1,73.66,173.9a23.176,23.176,0,0,1-.365,4.088c.745-.008,1.478.018,2.209.078a25.574,25.574,0,0,1,3.38.5,2.568,2.568,0,0,1,2,1.956,25.166,25.166,0,0,1-2.429,17.349,24.826,24.826,0,0,1-1.936,3.019,25.2,25.2,0,0,1-2.254,2.642c-.047.047-.093.1-.138.145l0,0a25.021,25.021,0,0,1-16.279,7.3,25.123,25.123,0,0,1-6.757-.521,2.764,2.764,0,0,1-.3-.075,1.244,1.244,0,0,1-.187.047A25.043,25.043,0,0,1,33.25,208a23.946,23.946,0,0,1-3.027-1.924,24.89,24.89,0,0,1-2.634-2.264c-.047-.042-.1-.085-.15-.134a25.21,25.21,0,0,1-7.267-19.729,26.458,26.458,0,0,1,.483-3.315,2.567,2.567,0,0,1,1.974-2.061,25.075,25.075,0,0,1,5.641-.585,23.126,23.126,0,0,1-.363-4.085,22.882,22.882,0,0,1,22.876-22.881" transform="translate(0 0)" fill="#000016" />
                                <path id="Trazado_27" data-name="Trazado 27" d="M92.633,189.106l1.721,5.206,5.492.038-4.415,3.237,1.658,5.236-4.441-3.205-4.473,3.205,1.674-5.221-4.423-3.252,5.476-.028Z" transform="translate(-41.853 -24.397)" fill="#fff" fill-rule="evenodd" />
                            </g>
                            <rect id="Rectángulo_475" data-name="Rectángulo 475" width="11" height="27" transform="translate(500 249)" fill="none" />
                        </g>
                    </svg></a>
            </div>
            <div class="logo logo-mobile d-inline d-md-none"><a href="<?php echo site_url(); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="50" viewBox="0 0 52 50"><g id="Grupo_605" data-name="Grupo 605" transform="translate(-96 -350)"><rect id="Rectángulo_477" data-name="Rectángulo 477" width="52" height="50" transform="translate(96 350)" fill="none" /><g id="Grupo_604" data-name="Grupo 604" transform="translate(56 -10.667)">
                <path id="Trazado_451" data-name="Trazado 451" d="M68.566,165.812a14.847,14.847,0,0,0-10.428,7.03H58.2l8.045-.037ZM56.574,176.459a14.8,14.8,0,0,0-.548,3.988h.006v0h-.006a14.673,14.673,0,0,0,.536,3.928,20.947,20.947,0,0,1,5.273,1.987l.04.018,1.549-4.851-6.592-4.855-.046-.029h0l-.023-.025h-.006l0,0-.006-.009h0l0,0-.008,0h0l0-.007h-.006l0-.007v0l0,0-.008,0,0,0-.025-.025,0,0,0,0-.025-.022-.006,0h0l0-.005-.029-.03-.008,0Zm13.941,18.8h.321v-.008h0v.008h.323c.075-.151.154-.3.234-.444A20.094,20.094,0,0,1,73,192.3a21.387,21.387,0,0,1,1.881-2.2,1.227,1.227,0,0,1,.119-.121v0l.048-.052-4.195-3.012-4.216,3.027.034.037h0a20.651,20.651,0,0,1,3.838,5.283M85.121,184.38a14.908,14.908,0,0,0,.527-3.93h0v0a14.645,14.645,0,0,0-.55-3.988,1.545,1.545,0,0,1-.137.131l-.006,0h0v.007h-.006l-.019.011h0v.007l-.017.008,0,0,0,.006-.006,0v0c-.017.009-.031.025-.048.034l0,0-6.584,4.832,1.547,4.872a20.8,20.8,0,0,1,5.312-2m-1.58-11.537a14.37,14.37,0,0,0-1.013-1.476,15.835,15.835,0,0,0-1.221-1.386,14.814,14.814,0,0,0-8.189-4.17l2.3,6.978Z" transform="translate(-5.265 199.283)" fill="#ffc405" fill-rule="evenodd" /><path id="Trazado_452" data-name="Trazado 452" d="M53.178,259.141c.037-.3.071-.6.094-.894a16.54,16.54,0,0,0-4.824-13.093,16.485,16.485,0,0,0-1.835-1.6,16.224,16.224,0,0,0-2-1.278,16.686,16.686,0,0,0-10.151-1.851c-.04.3-.069.6-.1.9a17.477,17.477,0,0,0-.027,2.306,16.578,16.578,0,0,0,4.851,10.787c.04.04.075.075.1.108a15.791,15.791,0,0,0,1.734,1.491,16.563,16.563,0,0,0,12.152,3.127" transform="translate(9.948 147.117)" fill="#c3d42a" fill-rule="evenodd" /><path id="Trazado_453" data-name="Trazado 453" d="M132.035,240.427c-.3-.04-.6-.073-.9-.1a16.772,16.772,0,0,0-2.306-.025,16.53,16.53,0,0,0-10.786,4.849c-.038.034-.073.067-.109.1a16.818,16.818,0,0,0-1.491,1.737,16.079,16.079,0,0,0-1.276,2,16.67,16.67,0,0,0-1.851,10.149c.3.042.6.072.9.1a16.952,16.952,0,0,0,2.3.03,16.592,16.592,0,0,0,10.789-4.851.791.791,0,0,1,.11-.1,16.8,16.8,0,0,0,1.489-1.741,17.31,17.31,0,0,0,1.278-2,16.753,16.753,0,0,0,1.849-10.151" transform="translate(-45.299 147.117)" fill="#007236" fill-rule="evenodd" /><path id="Trazado_454" data-name="Trazado 454" d="M66.833,177.9c-.3-.039-.6-.073-.9-.094a15.557,15.557,0,0,0-2.306-.027,16.577,16.577,0,0,0-10.786,4.845h0a.92.92,0,0,1-.1.1,16.557,16.557,0,0,0-1.493,1.741,16.383,16.383,0,0,0-1.274,2,16.694,16.694,0,0,0-1.849,10.151c.294.04.592.071.894.1a17.362,17.362,0,0,0,2.3.028A16.558,16.558,0,0,0,62.1,191.89h0a.645.645,0,0,1,.1-.1,17.287,17.287,0,0,0,1.495-1.737,17.046,17.046,0,0,0,1.276-2A16.735,16.735,0,0,0,66.833,177.9M43.221,196.616c.042-.3.069-.6.1-.894a17.425,17.425,0,0,0,.027-2.306,16.582,16.582,0,0,0-4.853-10.791v0a16.723,16.723,0,0,0-1.839-1.595,16.1,16.1,0,0,0-2-1.276A16.638,16.638,0,0,0,24.5,177.9c-.04.3-.069.594-.1.9a17.734,17.734,0,0,0-.029,2.3A16.607,16.607,0,0,0,29.23,191.89h0a.974.974,0,0,1,.1.106,17.543,17.543,0,0,0,1.738,1.493,16.1,16.1,0,0,0,2,1.274,16.67,16.67,0,0,0,10.149,1.851m16.728-22.6a14.807,14.807,0,0,0,.527-3.928h0v0a14.646,14.646,0,0,0-.55-3.988,1.326,1.326,0,0,1-.142.131l0,0v.008l-.008,0-.016.01v.007l0,0-.015.008,0,0,0,.006h0l0,.005a.2.2,0,0,0-.048.033h0l-6.581,4.832,1.547,4.872a20.872,20.872,0,0,1,5.31-2m-14.6,10.88c.1,0,.215,0,.321,0v-.009h0v.009c.108,0,.215,0,.321,0,.075-.151.154-.3.231-.444a20.441,20.441,0,0,1,1.614-2.519,21.208,21.208,0,0,1,1.882-2.2,1.469,1.469,0,0,1,.11-.121h0l.048-.05-4.186-3.016-4.22,3.027.034.04a20.558,20.558,0,0,1,3.842,5.281M31.4,166.1a14.8,14.8,0,0,0-.546,3.988h.008v0h-.008a14.819,14.819,0,0,0,.53,3.928,20.92,20.92,0,0,1,5.277,1.987l.04.018,1.549-4.848-6.592-4.858-.046-.029h0l-.023-.021v0h-.007l-.006,0,0-.007h0l-.008,0h0v0l-.006,0,0-.008,0,0-.008,0,0,0v0l-.027-.021,0,0,0,0-.025-.025-.006,0h0l0-.005-.034-.033h0ZM43.4,155.452a14.8,14.8,0,0,0-8.2,4.172,15.092,15.092,0,0,0-2.233,2.854h.029l0,0h.029l8.047-.036Zm14.975,7.03a14.679,14.679,0,0,0-1.013-1.475,14.861,14.861,0,0,0-9.413-5.556l2.306,6.978Zm-12.7-.055,1.431,4.338,4.578.029-3.684,2.7,1.386,4.363-3.7-2.669-3.727,2.669,1.392-4.349L39.658,166.8l4.568-.019Zm0-11.4a19.07,19.07,0,0,1,19.065,19.067,19.313,19.313,0,0,1-.3,3.407c.621-.006,1.232.015,1.841.065a21.311,21.311,0,0,1,2.817.413,2.14,2.14,0,0,1,1.664,1.63,20.972,20.972,0,0,1-2.024,14.458,20.688,20.688,0,0,1-1.614,2.516,21.005,21.005,0,0,1-1.879,2.2c-.04.04-.077.081-.115.121l0,0a20.851,20.851,0,0,1-13.566,6.083,20.934,20.934,0,0,1-5.631-.434,2.307,2.307,0,0,1-.252-.062,1.037,1.037,0,0,1-.156.039,20.869,20.869,0,0,1-14.452-2.024,19.953,19.953,0,0,1-2.522-1.6,20.743,20.743,0,0,1-2.2-1.887c-.04-.035-.084-.071-.125-.112a21.009,21.009,0,0,1-6.056-16.44,22.049,22.049,0,0,1,.4-2.763,2.139,2.139,0,0,1,1.645-1.718,20.9,20.9,0,0,1,4.7-.488,19.271,19.271,0,0,1-.3-3.4,19.069,19.069,0,0,1,19.063-19.067" transform="translate(19.904 209.643)" fill="#000016" />
                <path id="Trazado_455" data-name="Trazado 455" d="M91.431,189.106l1.434,4.338,4.576.031-3.68,2.7,1.382,4.363-3.7-2.671-3.727,2.671,1.395-4.351-3.686-2.71,4.563-.023Z" transform="translate(-25.862 182.965)" fill="#fff" fill-rule="evenodd" /></g></g></svg></a>
            </div>
            <div class="off-canvas-toggle-cover d-inline-block ml-20">
                <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                    <span></span>
                </div>
            </div>

                <!--HEADER tools-->
                <div class="header-tools ml-auto d-flex">
                    <div class="ico-suscribete"><a href="/suscripcion-revista"><i class="mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="124" height="20" viewBox="0 0 124 20">
                            <g id="Grupo_662" data-name="Grupo 662" transform="translate(-483 -218)">
                                <text id="SUSCRÍBETE" transform="translate(578 233)" fill="#00a44e" font-style="normal" font-size="13" font-family="NotoSansJP-Bold, Noto Sans JP" font-weight="700" letter-spacing="0.12em">
                                    <tspan x="-94.497" y="0">SUSCRÍBETE</tspan>
                                </text>
                                <g id="Grupo_260" data-name="Grupo 260" transform="translate(58 142)">
                                    <circle id="Elipse_20" data-name="Elipse 20" cx="10" cy="10" r="10" transform="translate(529 76)" fill="#00a44e" />
                                    <path id="Trazado_31" data-name="Trazado 31" d="M-11971.376,1270.4l3.777,3.778-3.777,3.778" transform="translate(12509 -1188)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                            </g>
                        </svg>
                        </i></a>
</div>

                    <div class="br-1"></div>

					<?php if (is_user_logged_in()) : ?>
						<div class="ico-usuario">
							<a class="social-icon facebook-icon text-xs-center color-grey" href="/dashboard/">
								<i class="mr-5">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
										<path fill="currentColor" d="M3 13h8V3H3v10zm10 8h8V3h-8v18zM3 21h8v-6H3v6zm10 0h8v-8h-8v8z"/>
									</svg>
								</i>
							</a>
						</div>
					<?php endif; ?>


					
                    <?php if (!is_user_logged_in()) : ?>
                        <div class="ico-usuario"><a href="/wp-login.php"><i class="mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                                <g id="ico-usuario" transform="translate(-1617.664 -249.135)">
                                    <g id="Grupo_250" data-name="Grupo 250" transform="translate(1617.664 249.135)">
                                        <circle id="Elipse_15" data-name="Elipse 15" cx="13" cy="13" r="13" transform="translate(0 0)" fill="#ffc405" />
                                        <path id="Intersección_2" data-name="Intersección 2" d="M.409,19.4A11.32,11.32,0,0,1,0,16.363c0-4.115,2.148-7.586,5.082-8.657a4.092,4.092,0,1,1,3.835,0C11.85,8.778,14,12.248,14,16.363a11.331,11.331,0,0,1-.409,3.039,13.016,13.016,0,0,1-13.182,0Z" transform="translate(6 4.805)" fill="#fff" />
                                        <g id="Elipse_19" data-name="Elipse 19" transform="translate(0 0)" fill="none" stroke="#ffc405" stroke-width="3">
                                            <circle cx="13" cy="13" r="13" stroke="none" />
                                            <circle cx="13" cy="13" r="11.5" fill="none" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            </i></a>
                        </div>
                    <?php endif; ?>  

                    <div class="br-1"></div>

                    <div class="ico-buscar">
                        <button type="submit" aria-label="Botón de buscador" class="search search-icon search-btn">
                            <i class="ti-close"></i>
                            <i class="ti-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>
            <div class="horizontal-divider"></div>
        </div>
    </header>

    <!--SEARCH-->
    <div class="main-search-form">
        <div class="container">
            <div class="main-search-form-cover pt-50 pb-50 m-auto">
                <div class="row mb-20">
                    <div class="col-12">
                        <form action="<?php echo get_home_url(); ?>" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="¿Qué estás buscando?" name="s">
                                <div class="input-group-append">
                                    <button class="btn btn-black d-flex align-items-center" type="submit">
                                        <i class="ti-search mr-5"></i> Buscar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
