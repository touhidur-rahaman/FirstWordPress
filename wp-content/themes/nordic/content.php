<?php
/**
 * @package Nordic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <div class="index-box">
        <?php 
            if (has_post_thumbnail()) {
                echo '<div class="large-index-thumbnail clear">';
                echo '<a href="' . get_permalink() . '" title="' . __('Click to read ', 'nordic') . get_the_title() . '" rel="bookmark">';
                echo the_post_thumbnail('large-thumb');
                echo '</a>';
                echo '</div>';
            }
        ?>
        <header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php nordic_posted_on(); ?>
                    
                            <?php 
                                                       
                                if ( ! post_password_required() &&  (  ! is_front_page() ) && ( comments_open() || '0' != get_comments_number() ) ) { 
                                    echo '<span class="comments-link">';
                                    comments_popup_link( __( 'Leave a comment', 'nordic' ), __( '1 Comment', 'nordic' ), __( '% Comments', 'nordic' ) );
                                    echo '</span>';
                                }
                            ?>
                                                           
                            <?php nordic_entry_footer(); ?>
                    
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt();
		?>

	</div><!-- .entry-content -->


        <footer class="entry-footer continue-reading">
            <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'nordic') . get_the_title() . '" rel="bookmark"><i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
        </footer><!-- .entry-footer -->
                
    </div><!--.index-box-->
</article><!-- #post-## -->