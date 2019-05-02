<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Roseta
 */

get_header();
if ( 2 == cryout_get_option( 'theme_singlenav' ) ) { ?>
	<nav id="nav-fixed">
		<div class="nav-previous"><?php previous_post_link( '%link', '<i class="icon-fixed-nav"></i>' );  previous_post_link( '%link', '<span>%title</span>' );  ?></div>
		<div class="nav-next"><?php next_post_link( '%link', '<i class="icon-fixed-nav"></i>' ); next_post_link( '%link', '<span>%title</span>' );  ?></div>
	</nav>
<?php } ?>
<div class="<?php echo roseta_get_layout_class(); ?>">
	<main id="main" role="main" class="main">
		<?php cryout_before_content_hook(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
        <?php 
            $pClass="bg-white";
            $pId = get_the_ID();
            $showTitle = true;
            $pAllCategories = get_the_terms( $pId, 'category' );
            if ($pAllCategories) {
	            foreach ( $pAllCategories as $cat ) {
                    if ($cat->name == 'Stories' || $cat->name == 'stories' || $cat->name == 'Story' || $cat->name == 'story') {
                        $showTitle = false;
                        $pClass="bg-f5f5f5";
                    }
                }
            }

            $pAllTags = get_the_tags($pId);
            if ($pAllTags) {
                foreach ( $pAllTags as $tag ) {
                    if ($tag->name == 'Stories' || $tag->name == 'stories' || $tag->name == 'Story' || $tag->name == 'story') {
                        $showTitle = false;
                        $pClass="bg-f5f5f5";
                    }
                }
            }
        ?>
			<article id="post-<?php the_ID(); ?>" class="<?php echo $pClass ?>" <?php post_class(); cryout_schema_microdata( 'article' );?>>
				<div class="schema-image">
					<?php cryout_featured_hook(); ?>
				</div>

				<div class="article-inner">
					<header>
						<div class="entry-meta beforetitle-meta">
							<?php cryout_post_title_hook(); ?>
						</div><!-- .entry-meta -->
						<?php if ( FALSE == cryout_get_option( 'theme_headertitles_posts' ) ) {
							the_title( '<h1 class="entry-title singular-title" ' . cryout_schema_microdata('entry-title', 0) . '>', '</h1>' );
						} ?>

						<div class="entry-meta aftertitle-meta">
							<?php cryout_post_meta_hook(); ?>
						</div><!-- .entry-meta -->

					</header>

					<?php cryout_singular_before_inner_hook();  ?>

					<div class="entry-content custom-post-details" <?php cryout_schema_microdata('entry-content'); ?>>
						<div class="container">
                            <?php 
                                if ($showTitle == true) {
	                                the_title( '<h1 style="font-size: 40px;font-weight: normal;" class="entry-title singular-title" ' . cryout_schema_microdata('entry-title', 0) . '>', '</h1>' );
                                }
						    ?>
                            <?php the_content(); ?>
						    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'roseta' ), 'after' => '</span></div>' ) ); ?>
                        </div>
					</div><!-- .entry-content -->

					<footer class="entry-meta entry-utility">
						<?php cryout_post_utility_hook(); ?>
					</footer><!-- .entry-utility -->

				</div><!-- .article-inner -->
				<?php cryout_singular_after_inner_hook();  ?>
			</article><!-- #post-## -->

					<?php if ( get_the_author_meta( 'description' ) ) {
							// If a user has filled out their description, show a bio on their entries
							get_template_part( 'content/author-bio' );
					} ?>

					<?php if ( 1 == cryout_get_option ('theme_singlenav') ) : ?>
						<nav id="nav-below" class="navigation" role="navigation">
							<div class="nav-previous"><em><?php _e('Previous Post', 'roseta');?></em><?php previous_post_link( '%link', '<span>%title</span>' ); ?></div>
							<div class="nav-next"><em><?php _e('Next Post', 'roseta');?></em><?php next_post_link( '%link', '<span>%title</span>' ); ?></div>
						</nav><!-- #nav-below -->
					<?php endif; ?>

					<?php cryout_singular_before_comments_hook();  ?>
					<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

		<?php cryout_after_content_hook(); ?>
	</main><!-- #main -->

	<?php roseta_get_sidebar(); ?>
</div><!-- #container -->

<?php get_footer();
