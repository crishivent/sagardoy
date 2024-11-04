<?php 
add_action('wp_enqueue_scripts', 'mis_enqueue_custom');
function mis_enqueue_custom() {
  wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'), false, true);
  wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/scripts.js',array('jquery'), false, true);
  wp_enqueue_style ('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '1.0.0');
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');
  wp_enqueue_style('sagardoycss', get_template_directory_uri().'/style.css', array(), '1.0.0');
  wp_enqueue_style('slickcss', get_template_directory_uri().'/style.css', array(), '1.0.0');
  //wp_enqueue_style('sagardoycss', get_template_directory_uri().'/style.css', array(), '1.0.0');
  wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js',array('jquery'), false, true);
  wp_enqueue_script('slick', get_template_directory_uri().'/assets/js/slick.min.js',array('jquery'), false, true);
  //wp_enqueue_script('menujs', get_template_directory_uri().'/assets/js/menu.js',array('jquery'), false, true);


}
/*
if ( ! file_exists( get_template_directory() . '/clases/class-wp-bootstrap.php' ) ) {
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    require_once get_template_directory() . '/clases/class-wp-bootstrap.php';
}

*/

//Crear página de opciones con ACF

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Opciones Generales Sagardoy'),
            'menu_title'  => __('Opciones Generales'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Footer'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $parent['theme-general-settings'],
        ));
    }
}





/* Menú */
function location_menu() {
  register_nav_menu('main',__( 'main' ));
  register_nav_menu('footer-politicas',__( 'Footer Politicas' ));
}
add_action( 'init', 'location_menu' );


//sidebar
function mi_sidebars(){
    register_sidebar(array(
        "name" => "Sidebar Categoria",
        "id" => "sidebar-categorias",
        "descripcion" => "Contenido que aparece en el sidebar de categorias",
        "class" => "category-sidebar",
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        "before_title" => '<span class="widget-title">',
        "after_title" => "</span>"
    ));
}
add_action('widgets_init','mi_sidebars');

//permitir archivos svg
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

//Desactivar zona widgets por bloques
add_filter( 'use_widgets_block_editor', '__return_false' );



?>