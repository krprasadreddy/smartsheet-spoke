
			</div>
			<!-- end of .wrapper -->
		
		</div>
		<!-- end of #content-body -->
		
		
		<footer>
		
			<div class="wrapper">
		
				<nav>
					<?php 
						$nav = array(
							  'menu'     	=> 'Main Navigation', 
							  'container'	=> false, 
							  'menu_id'		=> 'footer-links');
						wp_nav_menu($nav); 				
					?>
				</nav>
				
				<div id="copyright"><?php echo get_option('ssCopyright'); ?></div>
				
			
				<?php /* Links to Social Media Sharing */ ?>
				<section id="share">					
					<ul>
						<li><a href="<?php echo get_option('ssFacebookURL'); ?>" class="facebook"><span class="hidden">Facebook</span></a></li>
						<li><a href="<?php echo get_option('ssTwitterURL'); ?>" class="twitter"><span class="hidden">Twitter</span></a></li>
						<li><a href="<?php echo get_option('ssYoutubeURL'); ?>" class="youtube"><span class="hidden">Youtube</span></a></li>
						<li><a href="<?php echo get_option('ssLinkedInURL'); ?>" class="linkedin"><span class="hidden">LinkedIn</span></a></li>
					</ul>
				</section>
				<!-- end of #share section -->
			
			</div>
			<!-- end of .wrapper -->			
		
		</footer>
				
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		
		<!-- fallback reference to jquery file in case google CDN is not accessible -->
        <script>window.jQuery || document.write('<script src="<?php echo get_bloginfo('template_url'); ?>/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        
		<script src="<?php echo get_bloginfo('template_url'); ?>/js/plugins.js"></script>
		<script src="<?php echo get_bloginfo('template_url'); ?>/js/main.js"></script>		
		<?php wp_footer(); ?>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21388828-2', 'cloudspokes.com');
  ga('send', 'pageview');

</script>
	</body>

</html>