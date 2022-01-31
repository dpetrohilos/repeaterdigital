<?php get_header(); ?>
<div class="grid-container cover">
<div>
    
     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_1.jpg" alt="Graphic Poster" class="multiply" width="565"/>   
    <b class="border"></b> 
</div>      
<div>
     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-red.svg" alt="Logo" class="logo-red" width="565"  />   
            
</div>    
<div>
     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_2.jpg" alt="Graphic Image" width="565"/>   
            
</div>      
<div>
     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_3.jpg" alt="Graphic Image" width="565"/>   
            
</div>     
<div>
     <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_4.jpg" alt="Graphic Image" width="565"/>   
            
</div>       
<div>
    <h1>We Change Narratives</h1>

    <p>We are a worker owned, self-managed communications consulting firm that specializes in strategic digital and visual communication.</p><p>

Repeater Digital strives to isolate the signal from the noise. We use the power of storytelling to transmit and amplify the voices of our partners across the shared global digital community. 
</p><p>
Together, we will shift company culture and create a strong future for your brand.
</p>
    
    <a href="#" class="btn">
    Lets Talk
    </a>
    <a href="#" class="link">
    Case Study
    </a>
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
