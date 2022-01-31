<?php get_header(); ?>
<div class="grid-container cover">
<div>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/circle.svg" alt="Graphic Poster" class="multiply" width="400"/>   
    <b class="border"></b> 
</div>
<div>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_1.jpg" alt="Graphic Poster" class="multiply" width="400"/>   
    <b class="border"></b> 
</div>      
<div>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo_Red.svg" alt="Logo" class="logo-red" width="400"  />   
            
</div>
<div>

</div>
<div>

</div>   
<div>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Triangle.svg" alt="Logo" class="logo-red" width="40"  />   
            
</div>
    
<div><p>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/RD_Art_Element.svg" alt="Logo" class="logo-red" width="40"  />   
    </p>     
</div>    
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
