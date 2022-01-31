<?php get_header(); ?>
<div class="cover">
<div class="wrapper-full">
    <section class="row">
        
<div class="col-lg-3 col-lg-offset-3">
     <img class="responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_1.jpg" alt="Graphic Poster" class="multiply" width="469" height="476" />   
            
</div>
        
        
<div class="col-lg-3 bg-red">
     <img class="responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-red.svg" alt="Logo" class="logo-red" width="469" height="486" />   
            
</div>    
    
    </section>
    </div>
    
</div>    
    <div class="hero"> 
    
    
    
    </div>    
	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<h1><?php esc_html_e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part( 'loop' ); ?>

			<?php get_template_part( 'pagination' ); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
