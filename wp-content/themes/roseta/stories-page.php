<?php /* Template Name: Stories Page */ ?>
 
<?php get_header(); ?>
 
<div id="stories-page" class="container">
    <?php
       $the_query = new WP_Query(
		    array( 
				'tax_query' => array(
                  'relation' => 'OR',
                     array(
                        'taxonomy' => 'post_tag',
                        'field' => 'slug',
                        'terms' => 'stories',
                     ),
					 array(
                        'taxonomy' => 'post_tag',
                        'field' => 'slug',
                        'terms' => 'story',
                     ),
                     array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'stories',
                     ),
					 array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'story',
                     ),
                 ),
                'posts_per_page' => 6,
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

                $pId = get_the_ID();
                $featured_img_url = 'http://localhost:8080/trannhattam/wp-content/uploads/2019/05/tnt.png';
                if (has_post_thumbnail($pId) ){
                    $featured_img_url = get_the_post_thumbnail_url($pId,'full'); 
                }
                $pTitle = get_the_title();
                $pUrl = get_post_permalink($pId);

		        $rs .= 
				'<div class="story-item">'.
					'<div class="story-item-inner">'.
					'<a href="' . $pUrl . '" title="' . $pTitle . '">' .
					    '<div class="story-item-image">'.
					        '<img alt="' . $pTitle . '" src="' . $featured_img_url . '"/>'.
					        '<div class="story-item-overlay" title="' . $pTitle . '">' . $pTitle . '</div>'.
					    '</div>'.
					'</a>'.
					    '<div class="story-item-content">'.
					        '<div class="story-item-title">'.
					             '<a href="' . $pUrl . '" title="' . $pTitle . '">' . $pTitle .'</a>' .
					        '</div>'.
					        '<p>' . get_the_excerpt() . '</p>'.
					    '</div>'.
				    '</div>'.
				'</div>';
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