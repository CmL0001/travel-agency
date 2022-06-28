			<div class="clear"></div>

			</div>
			<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer clear" role="contentinfo">

				<div class="wrapper">

					<div class="footer-widget">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
					</div>

				</div>
				<div class="clear"></div>
				<div class="copyright">
					<p>All rights Reserved - Around the World <?php echo date('Y'); ?></p>
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
