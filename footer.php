<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flot
 */
?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="widget-grid">
			<?php get_sidebar(); ?>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'flot' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'flot' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'flot' ), 'Flot', '<a href="http://towry.me/" rel="designer">towry</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="lightbox" style="display:none; text-align: center; z-index:99999; background-color: rgba(0,0,0,.8); width:100%;height:100%;position:fixed;top:0px;left:0;"></div>

<?php wp_footer(); ?>

</body>
</html>
