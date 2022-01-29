<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper-full">

			<!-- header -->
			<header class="header row center" role="banner">
					<!-- logo -->
					<div class="logo col-12 center text-center">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img" width="72">
						</a>
					</div>
					<!-- /logo -->
			</header>

					<!-- nav -->
					<nav class="nav row end" role="navigation">
                        <div class="col-lg-8 col-md-4 col-sm-4 col-xs-4 start">
                        
                            <p><a class="social-links" href="https://www.twitter.com/RepeaterDigital" title="Twitter Link"><img height="24" width="24"  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter.svg" alt="Twitter logo" /></a><a href="https://www.instagram.com/RepeaterDigital" title="Instagram Link"><img height="24" width="24"  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/instagram.svg" alt="Instagram logo"/></a> @RepeaterDigital</p>
                        
                        </div>
                        
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			<!-- /header -->
        </div>