<?php
if (function_exists('get_field')) {


	// Font Awesome
	if ( get_field( 'font_awesome', 'option' ) == 1 ) {
		add_action( 'wp_enqueue_scripts', 'fontawesome_enqueue' );
		add_action('admin_init', 'fontawesome_enqueue');

		function fontawesome_enqueue() {
		   wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', '', '5.14.0', 'all');
		}

	}



	// Slick Carousel
	if ( get_field( 'slick_slider_enqueu', 'option' ) == 1 ) {
		add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );

		function themeprefix_slick_enqueue_scripts_styles() {
		  wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick/slick.css', '1.6.0', 'all');
		  wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick/slick-theme.css', '1.6.0', 'all');
		  wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick/slick.min.js', array( 'jquery' ), '1.6.0', true );
		}
	}



	// Animate on Scroll
	if ( get_field( 'animate_on_scroll', 'option' ) == 1 ) {
		add_action('wp_head', 'aos_css');
		function aos_css() { ?>
		    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<?php }


		add_action('wp_footer', 'aos_js');

		function aos_js() { ?>
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			<script>AOS.init({ once: true, }); </script>
		<?php }
	}



	// Hover CSS
	if ( get_field( 'hover_css', 'option' ) == 1 ) {
		add_action('wp_head', 'hover_css');

		function hover_css() { ?>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
		<?php }
	}



	// Masonry.js
	if ( get_field( 'masonry_js', 'option' ) == 1 ) {
		add_action('wp_footer', 'colcade_cdn');
		add_action('admin_head', 'colcade_cdn');
		function colcade_cdn() { ?>
			<script src="https://unpkg.com/colcade@0/colcade.js"></script>
		<?php }

	}



	// Selectric.js
	if ( get_field( 'selectric_js_cdn', 'option' ) == 1 ) {
		function selectric_css() { ?>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/selectric@1.13.0/public/themes/square/selectric.css" integrity="sha256-wC/S8QnGYMPb96rsFUP1tKtVdzwfqVaeFSS31i5NwMg=" crossorigin="anonymous">
		<?php }
		add_action('wp_head', 'selectric_css');

		function selectric_js() { ?>
			<script src="https://cdn.jsdelivr.net/npm/selectric@1.13.0/public/jquery.selectric.min.js" integrity="sha256-FEyhf2150teujGP4O8fW1UwKlodqIsIPSXvwvu1VGmE=" crossorigin="anonymous"></script>
		<?php }
		add_action('wp_footer', 'selectric_js');

		function selectric_enqueue() {
			wp_enqueue_script( 'selectric', get_stylesheet_directory_uri() . '/js/selectric/selectric.js', array( 'jquery' ), true );
		}
		add_action('wp_enqueue_scripts', 'selectric_enqueue');
	}




	// fullPage.js
	if ( get_field( 'fullpage_js', 'option' ) == 1 ) {
		function fullpage_enqueue() {
			wp_enqueue_style( 'fullpagecss', get_stylesheet_directory_uri() . '/css/fullpage/fullpage.css');
			wp_enqueue_script( 'fullpagejs', get_stylesheet_directory_uri() . '/js/fullpage/fullpage.js', array( 'jquery' ), true );
		}
		add_action('wp_enqueue_scripts', 'fullpage_enqueue');

		function fullpage_js_license() { ?>
			<script type="text/javascript">
				jQuery('#fullpage').fullpage({
				    licenseKey: '8EC6CB06-70C0435B-98DE7503-00D3F98C'
				});
			</script>
		<?php }

		add_action('wp_footer', 'fullpage_js_license');
	}




	// Morphext
	if ( get_field( 'morphext', 'option' ) == 1 ) {
		function animate_css() { ?>
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
		<?php }
		add_action('wp_head', 'animate_css');

		function morphext_css() { ?>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Morphext/2.4.4/morphext.css" integrity="sha512-rbQVBRhxp7t0s71vF4UBqe5cFYvlG3l/q5KR02v6aGjqh5U0//71F0l5i/+2Q0GB7Z0rgcrzQQOin+WFm1VmJw==" crossorigin="anonymous" />
		<?php }
		add_action('wp_head', 'morphext_css');

		function morphext_js() { ?>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Morphext/2.3.4/morphext.min.js" integrity="sha512-qfhSfLmxt6OfkvO4jXuUa37+C4IofXBZBPeItj5lDipHYkjCOTueOvBFtvitOJsn823D8yevMw0k4NdfO8lw/A==" crossorigin="anonymous"></script>
		<?php }
		add_action('wp_footer', 'morphext_js');
	}



}