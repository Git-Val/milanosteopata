<?php
/**
 * Register sidebars
 *
 * @package physio-qt
 */

function physio_qt_sidebars() {
	
	// Blog Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'physio-qt' ),
		'description'   => esc_html__( 'Sidebar used on the Blog page', 'physio-qt' ),
		'id'            => 'blog-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Topbar
	register_sidebar( array(
		'name'          => esc_html__( 'Topbar', 'physio-qt' ),
		'description'   => esc_html__( 'Widget area in the topbar. Icon box, social, menu or text widget only is recommended. If no widgets are added the default topbar menu under Appearance > Menu\'s will be displayed', 'physio-qt' ),
		'id'            => 'topbar-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
	) );

	// Header
	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'physio-qt' ),
		'description'   => esc_html__( 'Widget area under the navigation. Icon box and social widget only is recommended. Go to Theme Options in the Customizer to set the position to overlay or no overlay', 'physio-qt' ),
		'id'            => 'header-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
	) );

	// Normal Page Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'physio-qt' ),
		'description'   => esc_html__( 'Sidebar used on normal pages', 'physio-qt' ),
		'id'            => 'page-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Shop Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'physio-qt' ),
		'description'   => esc_html__( 'Sidebar used on the WooCommerce pages', 'physio-qt' ),
		'id'            => 'shop-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Top Footer
	$physio_qt_top_footer_columns = (int) get_theme_mod( 'top_footer_columns', 4 );
	if ( $physio_qt_top_footer_columns > 0 ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Top Footer', 'physio-qt' ),
			'description'   => esc_html__( 'Top Footer widget area. Only Icon Box Widget is recommended. Change column amount at: Appearance &gt; Customize &gt; Theme Options &gt; Top Footer', 'physio-qt' ),
			'id'            => 'top-footer',
			'before_widget' => sprintf( '<div class="col-xs-12 col-md-%d"><div class="widget %%2$s">', round( 12 / $physio_qt_top_footer_columns ) ),
			'after_widget'  => '</div></div>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		) );
	}

	// Main Footer
	$physio_qt_main_footer_columns = (int) get_theme_mod( 'main_footer_columns', 4 );
	if ( $physio_qt_main_footer_columns > 0 ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'physio-qt' ),
			'description'   => esc_html__( 'Main Footer widget area. Change column amount at: Appearance &gt; Customize &gt; Theme Options &gt; Main Footer', 'physio-qt' ),
			'id'            => 'main-footer',
			'before_widget' => sprintf( '<div class="col-xs-12 col-md-%d"><div class="widget %%2$s">', round( 12 / $physio_qt_main_footer_columns ) ),
			'after_widget'  => '</div></div>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		) );
	}
}
add_action( 'widgets_init', 'physio_qt_sidebars' );