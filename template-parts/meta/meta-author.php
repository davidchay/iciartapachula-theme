<?php
	echo $byline = sprintf(
	'<span class="author vcard">' .
	get_avatar( get_the_author_meta( 'ID' ), 32 ). 
	esc_html_x( '%s', 'post author', 'start' ),
	'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
);
?>