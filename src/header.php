<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>
    

		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

        
        
		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper-full">

			<!-- header -->
			<header class="header row start-xs" role="banner">
					<!-- logo -->
					<div class="logo col-xs-12">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Repeater Digital" class="logo-img" width="116" height="116">
						</a>
					</div>
                <!-- /logo -->
			</header>


			<!-- /header -->
        </div>
        

<div id="menu">
  <div id="menu-bar" class="bento-menu" onclick="menuOnClick()" event="keydown" onkeydown="RemoveEventListener">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
        <span class="bar"></span>
		<span class="bar"></span>
    </div>
    
  <nav class="nav" id="nav">
      <?php html5blank_nav(); ?>
  </nav> 
</div>

<div class="menu-bg" id="menu-bg"></div>
