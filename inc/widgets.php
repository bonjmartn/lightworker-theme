<?php

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

function footer_widgets( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>'
	));
}

function social_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
}

function endofpost_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '<div class="endofpost">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

function social_widget_sidebar( $name, $id, $description ) {

	register_sidebar(array(
		'name' => sprintf( $name ),	 
		'id' => $id, 
		'description' => sprintf( $description ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

// Create Homepage Widgets

create_widget( 'Homepage Feature 1', 'create-your-own-1', 'First feature area on the homepage' );
create_widget( 'Homepage Feature 2', 'create-your-own-2', 'Second feature area on the homepage' );
create_widget( 'Homepage Feature 3', 'create-your-own-3', 'Third feature area on the homepage' );

// Create Sidebar Widget areas

create_widget( 'Sidebar', 'blog', 'Displays on the homepage, pages, and posts' );

// CTA Bar Widget

create_widget( 'Call to Action Bar', 'front-bar', 'Displays on the bottom of the homepage, just above the footer' );

// Social Icons Footer Widget

social_widget( 'Social Icons Footer', 'social-icons-footer', 'Social icons that display in the footer. If you dont want to show one of the icons, leave the URL field blank.' );

// Create Widget areas for Footer

footer_widgets( 'Footer 1', 'footer-1', 'Displays first in the footer' );
footer_widgets( 'Footer 2', 'footer-2', 'Displays second in the footer' );
footer_widgets( 'Footer 3', 'footer-3', 'Displays third in the footer' );

// Create End of Posts widget area

endofpost_widget( 'End of Posts', 'end-post', 'Displays at the bottom of blog posts' );

?>