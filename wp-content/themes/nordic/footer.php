<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nordic
 */
?>

	</div><!-- #content -->
        
	<footer id="colophon" class="site-footer" role="contentinfo">		                        
                <?php get_sidebar( 'footer' ); ?>
                <div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'nordic' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'nordic' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'nordic' ), 'Nordic', '<a href="http://sandpatrol.com/" rel="designer">Sandpatrol</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
