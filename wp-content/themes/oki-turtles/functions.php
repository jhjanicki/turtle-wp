<?php

function theme_styles(){
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('jquery_css','http://www.jqueryscript.net/css/jquerysctipttop.css');
	wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');	
	wp_enqueue_style('leaflet_css', get_template_directory_uri().'/js/leaflet/leaflet.css');	
	wp_enqueue_style('font_awesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style('Roboto_css', 'https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic');
	wp_enqueue_style('Open_Sans_css', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');
	wp_enqueue_style('Raleway_css', 'https://fonts.googleapis.com/css?family=Raleway:400,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200,100,100italic');
	wp_enqueue_style('Tillium_css','https://fonts.googleapis.com/css?family=Titillium+Web:400,900,700,700italic,600italic,400italic,600,300italic,300,200italic,200');
	wp_enqueue_style('Lato_lora_css','https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic|Lora:400,400italic,700,700italic');
}



function theme_js(){
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('d3_js','http://d3js.org/d3.v3.min.js',array('jquery'),'',true);
	wp_enqueue_script('d3_geo_js','http://d3js.org/d3.geo.projection.v0.min.js',array('jquery'),'',true);
	wp_enqueue_script('leaflet_js','http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js','','',true);
	wp_enqueue_script('map_js',get_template_directory_uri().'/js/project.js',array('jquery','d3_js','d3_geo_js','leaflet_js'),'',true);
	wp_enqueue_script('mailer_js',get_template_directory_uri().'/js/mailer.js',array('jquery'),'',true);
}


add_action('wp_enqueue_scripts','theme_styles');

add_action('wp_enqueue_scripts','theme_js');

add_filter('show_admin_bar','__return_false');

add_theme_support('menus');

function register_theme_menus(){

	register_nav_menus(
		array(
			'header-menu'  => __('Header Menu')
		)
	);
}

add_action('init', 'register_theme_menus');

require_once('wp_bootstrap_navwalker.php');

function create_widget($name, $id, $description){ 
	register_sidebar(array(
		'name' => __($name),
		'id' => $id,
		'description' => __($description),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}


create_widget('Page Sidebar', 'page', 'Displays on the pages with a call to sidebar');
create_widget('Blog Sidebar', 'blog', 'Displays on the blog with a call to sidebar');
create_widget('Front Page Parallax', 'front-parallax', 'Displays the main image of the homepage');


?>