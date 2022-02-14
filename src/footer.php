			<!-- footer -->
			<footer class="footer row" role="contentinfo">
<div class="offset-lg-2 offset-sm-1 offset-xs-1 offset-md-1 col-lg-4 col-xs-10 col-sm-10 col-md-4">
				
    <p>Repeater Digital is a full stack creative  collaborative, democratically managed by creative professionals with decades of experience.
    </p>
    
    <!-- copyright -->
			    <?php
				    printf( '<p class="copyright">' . __( '&copy; %1$s Copyright %2$s. Powered by <a href="%3$s" title="WordPress">WordPress</a> &amp; <a href="%4$s" title="HTML5 Blank">HTML5 Blank</a>.', 'html5blank' ) . '</p>',
				    	date( 'Y'),
				    	esc_html( get_bloginfo( 'name' ) ),
				    	'//wordpress.org',
				    	'//html5blank.com'
					);
				?>
				<!-- /copyright -->
                </div>

<div class="col-lg-4 col-xs-12 col-sm-12 col-md-7">
    <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>
    
</div>
</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
