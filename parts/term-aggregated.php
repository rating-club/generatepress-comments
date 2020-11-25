<div style="margin-top: 1em; padding-top: 1em; border-top: 1px solid #ddd;">
	<h4>
		Aggregated rating for this term
	</h4>
	<?php

    /* Get term ID for the current archive page query */
	$term = get_queried_object_id();

	/* Get aggregated rating of all posts belonging to specified term */
	$rating = gdrts_aggregate()->posts_by_term($term, array(
		'post_type'  => 'post',
		'method'     => 'stars-rating'
    ));

	/** Render the custom static stars with the max stars of 5, and specified rating from the aggregated result */
	echo gdrts_render_custom_stars_block(array(
	        'stars' => 5,
            'rating' => $rating->rating,
            'style_size' => 48
        ));

	?>
	<p>
		Rating: <?php echo $rating->rating; ?>/5, From <?php echo $rating->items; ?> posts and <?php echo $rating->votes; ?> votes.
	</p>
</div>