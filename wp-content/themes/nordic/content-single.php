<?php
/**
 * @package Nordic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
    <?php 
        if (has_post_thumbnail()) {
            echo '<div class="single-post-thumbnail clear">';
            echo the_post_thumbnail('large-thumb');
            echo '</div>';
        }
    ?>
                
    <header class="entry-header">
                <?php
                    // Hide category and tag text for pages. ut and pasted from template-tags.php for structure of taxonomy
                    if ( 'post' == get_post_type() ) {
                            /* translators: used between list items, there is a space after the comma */
                            $categories_list = get_the_category_list( __( ', ', 'nordic' ) );
                            if ( $categories_list && nordic_categorized_blog() ) {
                                    printf( '<div class="category-list">' . __( '%1$s', 'nordic' ) . '</dic>', $categories_list );
                            }   
                    } 

                    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
                            echo '<span class="comments-link">';
                            comments_popup_link( __( 'Leave a comment', 'nordic' ), __( '1 Comment', 'nordic' ), __( '% Comments', 'nordic' ) );
                            echo '</span>';
                    }
                ?>    
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php nordic_posted_on(); ?>
                    
                    
                            <?php 
                                if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
                                    echo '<span class="comments-link">';
                                    comments_popup_link( __( 'Leave a comment', 'nordic' ), __( '1 Comment', 'nordic' ), __( '% Comments', 'nordic' ) );
                                    echo '</span>';
                                }
                            ?>
                    
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nordic' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
            
            
                <?php
                    echo get_the_tag_list( '<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>', '</li></ul>' );
                ?>
                
                
		<?php nordic_entry_footer(); ?>
            
                
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
