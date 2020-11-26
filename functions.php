<?php

/** GeneratePress
 * Load template for aggregated ratings to display after category and tag archive titles.
 */
add_action( 'generate_after_archive_title', 'gdrts__generate_after_archive_title' );
function gdrts__generate_after_archive_title() {
	if ( is_category() || is_tag() ) {
		require_once( 'parts/term-aggregated.php' );
	}
}
