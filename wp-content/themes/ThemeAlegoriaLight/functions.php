<?php


require_once get_template_directory() . '/assets/walkers/navwalker.php';

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

/**
 * Include CSS files
 */
function theme_enqueue_scripts()
{


    wp_register_style('Font_Awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all.min.css', []);
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', []);
    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', []);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', [], false, true);
    wp_register_script('WOW', get_template_directory_uri() . '/assets/js/wow.js', [], false, false);
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('animate');
    wp_enqueue_style('Font_Awesome');
    wp_enqueue_style('Style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('WOW');


    // wp_enqueue_style('MDB', get_template_directory_uri() . '/assets/css/mdb.min.css');
    // wp_enqueue_script('MDB', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/**
 *  Register menus
 */
register_nav_menus(array(
    'primary'   => __('Primary Menu', 'alegoriathemelight'),
    'secondary' => __('Secondary Menu', 'alegoriathemelight')
));
function alegoriatheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function alegoriatheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link custom-link';
    return $attrs;
}

add_filter('nav_menu_css_class', 'alegoriatheme_menu_class');
add_filter('nav_menu_link_attributes', 'alegoriatheme_menu_link_class');

/**
 *  Register Post Formats
 */
add_theme_support('post-formats',  array('gallery', 'quote', 'image', 'video'));

/**
 *  Register Sidebars
 */
add_action('widgets_init', 'alegoriatheme_widgets_init');
function alegoriatheme_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Default Sidebar', 'alegoriatheme'),
        'id'            => 'sbDefault',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Home Sidebar', 'alegoriatheme'),
        'id'            => 'sbHome',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
do_action('alegoriatheme_widgets_init');


/**
 *  Adding Logo in personnalization
 */
function theme_prefix_setup()
{
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 175,
            'width'       => '400',
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description')
        )

    );
}

add_action('after_setup_theme', 'theme_prefix_setup');

/**
 * Add Second Logo
 */
function alegoria_customize_register(WP_Customize_Manager $manager)
{
    //All our sections, settings, and controls will be added here

    $manager->add_section('my_site_logo', [
        'title'      => __('Le deuxieme logo', 'alegoria'),
    ]);

    $manager->add_setting('header_background', [
        'default' => '#FF0000'
    ]);

    $manager->add_setting('logo_settings');

    $manager->add_control(
        new WP_Customize_Image_Control(
            $manager,
            'logo_settings',
            array(
                'label'      => __('Upload a logo', 'alegoria'),
                'section'    => 'my_site_logo',
                'settings'   => 'logo_settings'
            )
        )
    );

    $manager->add_control('header_background', [
        'section' => 'my_site_logo',
        'settings' => 'header_background',
        'label' => 'couleur en tête'
    ]);
}

add_action('customize_register', 'alegoria_customize_register');

/**
 * Adding post thumbnails
 */
add_theme_support('post-thumbnails');

/**
 *  Adding Pagination
 */

function alegoriatheme_the_pagination($query = array(), $args = array(), $echo = 1)
{
    global $wp_query;


    if (!empty($query)) {
        $temp_query = $wp_query;
        $wp_query   = NULL;
        $wp_query   = $query;
    }

    $paged = get_query_var('paged');

    $default =  array(
        'base' => str_replace(99999, '%#%', esc_url(get_pagenum_link(99999))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $wp_query->max_num_pages,
        'next_text' => '<i class="ti-arrow-right"></i>',
        'prev_text' => '<i class="ti-arrow-left"></i>',
        'type' => 'list',
        'add_args' => false,
    );

    $args = wp_parse_args($args, $default);

    $pagination = str_replace("<ul class='page-numbers'", '<ul class="pagination"', paginate_links($args));
    $pagination = '<div class="pagination-bx clearfix text-center">
                <div class="pagination">' . $pagination . '</div>
            </div>';

    echo wp_kses_post($pagination);
}
