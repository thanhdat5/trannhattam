<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Roseta
 *
 */

get_header(); ?>

	<div class="<?php echo roseta_get_layout_class(); ?>">
		<main id="main" role="main" class="main bg-white" style="width:100%;background-color:#fff !important;padding-bottom:50px !important">
			<div class="container">
			    <?php cryout_before_content_hook(); ?>

			    <?php if ( have_posts() ) : ?>

				    <header class="page-header content-search pad-container" <?php cryout_schema_microdata( 'element' ); ?>>
					    <h1 class="page-title" <?php cryout_schema_microdata( 'entry-title' ); ?>>
						    <?php printf( __( 'Search Results for: %s', 'roseta' ), '<strong>' . get_search_query() . '</strong>' ); ?>
					    </h1>
					    <?php get_search_form(); ?>
				    </header>

				    <div id="content-masonry" class="content-masonry" <?php cryout_schema_microdata( 'blog' ); ?>>
					    <?php /* Start the Loop */
					    while ( have_posts() ) : the_post();
						    get_template_part( 'content/content', get_post_format() );
					    endwhile;
					    ?>
				    </div><!--content-masonry-->
				    <?php

				    roseta_pagination();

			    else :

				    get_template_part( 'content/content', 'notfound' ); 
				    ?> <div id="content-masonry"></div> <?php
				
				    cryout_empty_page_hook();

			    endif; ?>

			     <?php cryout_after_content_hook(); ?>
            </div>
		</main><!-- #main -->

		<?php roseta_get_sidebar(); ?>
	</div><!-- #container -->

<?php get_footer(); ?>
