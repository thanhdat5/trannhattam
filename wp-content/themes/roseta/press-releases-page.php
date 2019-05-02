<?php /* Template Name: Press Releases Page */ ?>
 
<?php get_header(); ?>
 
<div id="press-releases-page" class="container">
    <h2>Press Releases</h2>
    <?php
       $the_query = new WP_Query(
		    array( 
				'tax_query' => array(
                  'relation' => 'OR',
                     array(
                        'taxonomy' => 'post_tag',
                        'field' => 'slug',
                        'terms' => 'press-releases',
                     ),
					 array(
                        'taxonomy' => 'post_tag',
                        'field' => 'slug',
                        'terms' => 'press-releases',
                     ),
                     array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'press-releases',
                     ),
					 array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'press-releases',
                     ),
                 ),
                'posts_per_page' => -1,
		        'post_type'      => 'post',
                'post_status' => 'publish',
				'orderby'=> 'ID',
				'order' => 'DESC',
			) 
		);
		// The Loop
        if ( $the_query->have_posts() ) {
            $rs = '';
	        while ( $the_query->have_posts() ) {
		        $the_query->the_post();
                $pCreated = get_the_date('d/m/Y',$pId);
                $pId = get_the_ID();
                $pTitle = get_the_title();
                $pUrl = get_post_permalink($pId);

		        $rs .= '<p class="press-releases-item"><a href="' . $pUrl . '" title="' . $pTitle . '">' . $pCreated . ' - ' . $pTitle .'</a></p>';
	        }
	        /* Restore original Post Data */
	        wp_reset_postdata();
            echo $rs;
        } else {
	        echo '<p>No posts found.</p>';// no posts found
        }
    ?>
	<div class="clearfix">
	</div>
	</div>
</div><!-- .content-area -->
 
<?php get_footer(); ?>