<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ameno
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(is_front_page()) { ?>
<div id="frontHeader" class="container">
    
    <header class="intro">
        <?php if( get_header_image() && !('blank' == get_header_textcolor()) ) : ?>
        <img class="intro__image" src="<?php echo get_header_image(); ?>" alt="Iceland galcier"/>
        <?php else: ?>
        <img class="intro__image" src="<?php echo get_template_directory_uri(); ?>/slidingheader/img/header03.jpg" alt="Iceland galcier"/>
        <?php endif; ?>
        <?php ameno_social_menu();  ?>
        
        <div class="intro__content">
            <h1 class="intro__title"><?php bloginfo( 'name' ); ?></h1>
            <div class="intro__subtitle">
                <h2 class="intro__description"><?php bloginfo( 'description' ); ?></h2>
                
                <button class="trigger">
                    <svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
                        <g class="icon icon--grid">
                            <rect x="32.5" y="5.5" width="22" height="22"/>
                            <rect x="4.5" y="5.5" width="22" height="22"/>
                            <rect x="32.5" y="33.5" width="22" height="22"/>
                            <rect x="4.5" y="33.5" width="22" height="22"/>
                        </g>
                        <g class="icon icon--cross">
                            <line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
                            <line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
                        </g>
                    </svg>
                    <span>View content</span>
                </button>
            </div>
        </div><!-- /intro__content -->
    </header><!-- /intro -->
    
    <section class="items-wrap">

        <?php
            // Get the 12 latest posts
            $args = array(
                'posts_per_page' => 12
            );
    
            $latest_posts_query = new WP_Query( $args );
    
            // The Loop
            if ( $latest_posts_query->have_posts() ) {
                    while ( $latest_posts_query->have_posts() ) {
    
                        $latest_posts_query->the_post();
                        // Get the standard index page content
                        if (has_post_thumbnail()) {
                            echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'ameno') . get_the_title() . '"  class="item" rel="bookmark">';	
                            the_post_thumbnail('square-thumb', array( 'class' => 'item__image' ));
                            echo '<h2 class="item__title">' . get_the_title() . '</h2>';
                            echo '</a>';
                        }
    
                    }
            }
            /* Restore original Post Data */
            wp_reset_postdata();
    
        ?>
        
    </section>
    
</div><!-- /container -->
<?php } ?>
        
        
<header id="masthead" class="site-header" role="banner">
	
    <?php if( !is_front_page() ) :?>
    <div id="header-meta"> 
		<div class="logo">
        	<h1 class="logo-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="logo-description"><?php bloginfo( 'description' ); ?></h2>
        </div>
        <div class="search-toggle">
            <i class="fa fa-search"></i>
            <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'ameno' ); ?></a>
        </div>
		<?php ameno_social_menu();  ?>
    </div>
    
    <div id="search-container" class="search-box-wrapper clear">
        <div class="search-box clear">
            <?php get_search_form(); ?>
        </div>
    </div> 

    <?php
        if ( get_header_image() && !('blank' == get_header_textcolor()) ) { 
            echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">'; 
        }
    ?>
    </div><!-- .site-branding -->
	<?php endif; ?>
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ameno' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ameno' ); ?></a>

	<div id="content" class="site-content">