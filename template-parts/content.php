<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k-ameno
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">
	<?php
	if (has_post_thumbnail()) {
		echo '<div class="small-index-thumbnail clear">';
		echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'k-ameno') . get_the_title() . '" rel="bookmark">';
		echo the_post_thumbnail('index-thumb');
		echo '</a>';
		echo '</div>';
	}
	?>
    <header class="entry-header clear">
            <?php
                /* translators: used between list items, there is a space after the comma */
                $category_list = get_the_category_list( __( ', ', 'k-ameno' ) );

                if ( k_ameno_categorized_blog() ) {
                    echo '<div class="category-list">' . $category_list . '</div>';
                }
            ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php k_ameno_posted_on(); ?>
                        <?php 
                        if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
                            echo '<span class="comments-link">';
                            comments_popup_link( __( 'Leave a comment', 'k-ameno' ), __( '1 Comment', 'k-ameno' ), __( '% Comments', 'k-ameno' ) );
                            echo '</span>';
                        }
                        ?>
                        <?php edit_post_link( __( ' | Edit', 'k-ameno' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-footer read-more">
		<?php echo '<a href="' . get_permalink() . '" title="' . __('Read more ', 'k-ameno') . get_the_title() . '" rel="bookmark">Read more</a>'; ?>
    </footer><!-- .entry-footer -->
    
    </div><!-- .index-box -->
</article><!-- #post-## -->