<?php

	$neowp_social_media_facebook_title = get_option( 'neowp_social_share_og_title_field', '' );
	$neowp_social_media_facebook_description = get_option( 'neowp_social_share_og_description_field', '' );

	echo '<meta property="og:url" content="' . get_permalink() .'">';

 if($neowp_social_media_facebook_title != ''){
		echo '<meta property="og:title" content="' . $neowp_social_media_facebook_title .'">';
	} else {
		echo '<meta property="og:title" content="' . get_the_title() .'">';
	}

 if($neowp_social_media_facebook_description != ''){
		echo '<meta property="og:description" content="' . $neowp_social_media_facebook_description .'">';
	} else {
		echo '<meta property="og:description" content="' . get_the_excerpt() . '">';
	}

	if(the_post_thumbnail() != ''){
		echo '<meta property="og:image" content="' . the_post_thumbnail() .'">';
	}

?>