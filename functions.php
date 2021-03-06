<?php 

// registramos
wp_register_style('bootstrap', get_theme_file_uri( 'inc/bootstrap.min.css' ) );

wp_register_style('dt_style', get_stylesheet_uri(), array( 'bootstrap') );

//encolamos
function encolar_estilos(){

    wp_enqueue_style( 'dt_style' );

}

// gancho 

add_action('wp_enqueue_scripts','encolar_estilos');

//jquery
wp_register_script( 'jquery', get_theme_file_uri( 'inc/jquery.min.js' ),'','3.5.1', true );

// Javascript

wp_register_script( 'bootstrapjs', get_theme_file_uri( 'inc/bootstrap.min.js' ),['jquery'],'4.5.1', true );



wp_register_script( 'dt_script', get_theme_file_uri( 'script.js' ),['bootstrapjs','jquery'],'', true );

//encolamos

function encolar_script(){

    wp_enqueue_script( 'dt_script' );

}


// gancho

add_action('wp_enqueue_scripts','encolar_script');


// Creamos el menu principal (podemos añadir mas menus en estas funciones)
//agregamos un nuevo menu

function agregar_menu(){
    register_nav_menu('principal', __('principal'));
}

//enganchamos menu a wordpress

add_action('init','agregar_menu');

//mostramos menu

function mostrar_menu(){
    wp_nav_menu([
        'theme_location'=>'principal',
        'container'=>'ul',
        'container_class'=>'nav-link',
         'container_id'=>'principal'  
     ]);
    
}

// Terminamos el menu principal



// thumbnails


add_theme_support( 'post-thumbnails' );


// encabezado header

function imagen_custom_header() {
    $args = array(
        'default-image'  	=> get_template_directory_uri() . 'img/bmwx8.jpg',
        'default-text-color' => '000',
        'width'          	=> 1000,
        'height'         	=> 250,
        'flex-width'     	=> true,
        'flex-height'    	=> true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'imagen_custom_header' );



// widgets sidebar

// Registramos un nueva (o nuevas) zona de widgets simple denominada 'sidebar'
function agregar_soporte_widgets() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook o gancho del widget para que se inicie
add_action( 'widgets_init', 'agregar_soporte_widgets' );










































?>