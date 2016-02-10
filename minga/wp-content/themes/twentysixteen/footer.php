<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">
				<div>
					<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQJZsHF5JjCRC5lGfCvAACAEwzIKyST2WPrz-QDr9u3oY77d80z">
					<div>
						<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="color-white">LA MINGA</a></span>
						<p><?php bloginfo('description'); ?></p>
					</div>
				</div>
				<div>
					<p>84 quai de jemmapes 75010 Paris</p>
					<p><span class="color-white">SUIVEZ NOUS</span> : <a href="">FACEBOOK</a> - <a href="">TWITTER</a></p>
				</div>
				
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
