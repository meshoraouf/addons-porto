<?php
/*
Plugin Name: Addons Porto
Description: Customize WordPress with powerful Design.
Version: 1.0.0
Author: TBIB
Text Domain: addons-porto
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Main Elementor Test Extension Class
 *
 * The main class that initiates and runs the plugin.
 *
 * @since 1.0.0
 */
 class addons_porto {

  

     function addons_porto() {
         //style
           
         wp_register_script( 'vue-js', 'https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js', array(), _S_VERSION, false );

   


        add_action( 'elementor/elements/categories_registered', [ $this, 'add_elementor_widget_categories' ] );
        add_action( 'init', [ $this, 'register_widgets' ] );

    }
  
	public function add_elementor_widget_categories( $elements_manager ) {
		
			$elements_manager->add_category(
			'porto',
			[
				'title' => __( 'porto', 'addons-porto' ),
				'icon' => 'fas fa-briefcase',
			]
		);
	
	}


    /**
     * Admin notice
     *
     * Warning when the site doesn't have Elementor installed or activated.
     *
     * @since 1.0.0
     *
     * @access public
     */
    /**
     * Include Files
     *
     * Load required plugin core files.
     *
     * @since 1.0.0
     *
     * @access public
     */
     function includes() {
         
        require_once( __DIR__ . '/templates/header.php' );
        require_once( __DIR__ . '/templates/home.php' );
    
         require_once( __DIR__ . '/header.php' );
        require_once( __DIR__ . '/home.php' );

  }



   function register_widgets() {

    $this->includes(); 
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Header_Widget() );
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Home_Widget() );

  }

}
function addons(){
    $addons_porto = new addons_porto();
    $addons_porto->addons_porto();

}