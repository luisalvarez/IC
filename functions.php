<?php 
function ic_theme_enqueue_scripts() {
  // css style
  wp_enqueue_style( 'boostrap_ic', get_stylesheet_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'agency_ic_theme', get_stylesheet_directory_uri().'/css/agency.min.css');
  wp_enqueue_style( 'font_awesome_ic', get_stylesheet_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');

  
  // register AngularJS
  wp_register_script('angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.js', array(), null, false);
 
  // register our app.js, which has a dependency on angular-core
  // wp_register_script('angular-app', get_bloginfo('template_directory').'/app.js', array('angular-core'), null, false);
 
  // enqueue all scripts
  wp_enqueue_script('angular-core');
  // wp_enqueue_script('angular-app');


  // wp_enqueue_script('angularjs', get_template_directory_uri() .'/../../plugins/angularjs-for-wp/js/angular.min.js');
  // wp_enqueue_script('angularjs-route', get_template_directory_uri() .'/node_modules/angular-route/angular-route.min.js');
  wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'angularjs', 'angularjs-route' ));
 
  // we need to create a JavaScript variable to store our API endpoint...   
  wp_localize_script( 'angular-core', 'AppAPI', 
    array( 
      'url' => get_bloginfo('wpurl').'/api/'
    )
  ); // this is the API address of the JSON API plugin
  // ... and useful information such as the theme directory and website url
  wp_localize_script( 'angular-core', 'BlogInfo', 
    array( 
      'url' => get_bloginfo('template_directory').'/', 
      'site' => get_bloginfo('wpurl')
    )
  );


    // <!-- Theme JavaScript -->
    wp_enqueue_script("jquery");
    wp_enqueue_script("boostrap_ic_js", get_template_directory_uri()."/vendor/bootstrap/js/bootstrap.min.js", array(), false, true);
    wp_enqueue_script("jqeury_boostrap_ic_js", get_template_directory_uri()."/js/jqBootstrapValidation.js", array(), false, true);
    // wp_enqueue_script("contact_ic_js", get_template_directory_uri()."/js/contact_me.js", array(), false, true);
    wp_enqueue_script("angency_ic_js", get_template_directory_uri()."/js/agency.min.js", array(), false, true);

}
add_action('wp_enqueue_scripts', 'ic_theme_enqueue_scripts');
?>