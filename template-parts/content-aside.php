<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">

        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
    
        <footer class="entry-footer">
                <?php k_ameno_posted_on(); ?>
                <?php edit_post_link( __( ' | Edit', 'k-ameno' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-footer -->
        
    </div>
</article><!-- #post-## -->