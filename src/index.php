<?php get_header(); ?>
<div class="grid-container cover front">
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
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Triangle.svg" alt="Logo" class="logo-red" width="40"  />   
            
</div>   
<div><p>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/RD_Art_Element.svg" alt="Logo" class="logo-red" width="160"  />   
    </p>     
</div>
    
<div>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_2.jpg" alt="Graphic Poster"  width="400"/>   
</div>  
<div>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_3.jpg" alt="Graphic Poster" width="400"/>   
</div>
<div>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Front_Img_4.jpg" alt="Graphic Poster"  width="800"/>   
</div>
    
<div>
    <h1>We Change <span>Narratives</span></h1>
</div>
<div>
    <p><strong>Repeater Digital</strong> is a full stack creative collaborative, democratically managed by grassroots activists in the DC metro area. We design effective messaging campaigns by asking the right questions of our clients, as well as target audiences. </p></div>    
    
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
