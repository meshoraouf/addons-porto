<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Elementor_Header_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve oEmbed widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'header';
    }
	public function get_script_depends() {
        return ['vue-js'];
      }
    /**
     * Get widget title.
     *
     * Retrieve header widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Header', 'adons-porto' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve oEmbed widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'fas fa-heading';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'porto' ];
    }

    /**
     * Register oEmbed widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls() {

      
        

		$this->start_controls_section(
		 'porto_normal_header',
			[
				'label' => __( 'Normal', 'addons-porto' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,

			]
          );
          
        $this->add_control(
            'porto_width_header',
            [
                'label' => __( 'Layout Header', 'addons-porto' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'fullwidth',
                'options' => [
                    'fullwidth'  => __( 'Full Width', 'addons-porto' ),
                    'boxed' => __( 'Boxed', 'addons-porto' ),
                   
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
                'name' => 'nav_background',

				'label' => __( 'Background Nav', 'addons-porto' ),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .nav_background' ,
				
			]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => __( 'Typography', 'addons-porto' ),
                'scheme' =>  \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .nav_background .navbar-nav>li, .nav_background .navbar-brand ,.nav_background .navbar-nav>li>a, .nav_background .navbar-nav>li>a:hover, .nav_background .navbar-nav>li>a:focus, .nav_background .navbar-nav>.active>a, .nav_background .navbar-nav>.active>a:hover, .nav_background .navbar-nav>.active>a:focus',
            ]
        );
      

    $this->add_control(
        'color_text_nav',
        [
            'label' => __( 'Color text nav', 'addons-porto' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'scheme' => [
                'type' => \Elementor\Scheme_Color::get_type(),
                'value' => \Elementor\Scheme_Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .nav_background .navbar-nav>li, .nav_background .navbar-brand , .nav_background .navbar-nav>li>a, .nav_background .navbar-nav>li>a:hover, .nav_background .navbar-nav>li>a:focus, .nav_background .navbar-nav>.active>a, .nav_background .navbar-nav>.active>a:hover, .nav_background .navbar-nav>.active>a:focus' => 'color: {{VALUE}}',
            ],
        ]
    );

 

    
    $this->add_control(
        'color_text_border',
        [
            'label' => __( 'Color text nav border', 'addons-porto' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'scheme' => [
                'type' => \Elementor\Scheme_Color::get_type(),
                'value' => \Elementor\Scheme_Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}}  
                .nav li a[aria-current="page"] ' => 'border-bottom: 2px solid {{VALUE}} !important',
                '.nav li a::before             ' => 'background: {{VALUE}} !important',
            ],
        ]
    );
    $this->add_control(
        'porto_scroll_active',
        [
            'label' => __( 'Scroll', 'addons-porto' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
        
            'label_on' => __( 'Normal', 'addons-porto' ),
			'label_off' => __( 'Fixed', 'addons-porto' ),
			'return_value' => 'yes',
			'default' => 'yes',
        ]
    );

        $this->end_controls_section();

    
        $this->start_controls_section(
            'porto_scroll_header',
               [
                   'label' => __( 'Scroll', 'addons-porto' ),
                   'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                   'condition' => [
                    'porto_scroll_active' => 'yes'
                ],

               ]
             );
             
          
           $this->add_group_control(
   
           \Elementor\Group_Control_Background::get_type(),
           [
               'name' => 'nav_scroll',
               'label' => __( 'Background Nav scroll', 'addons-porto' ),
               'types' => ['classic', 'gradient'],
               'selector' => '{{WRAPPER}} .nav_scroll' ,
             
           ]
           
       );
   
    
   
       $this->add_group_control(
           \Elementor\Group_Control_Typography::get_type(),
           [
               'name' => 'content_typography_scroll',
               'label' => __( 'Typography Scroll', 'addons-porto' ),
               'scheme' =>  \Elementor\Scheme_Typography::TYPOGRAPHY_1,
               'selector' => '{{WRAPPER}} .nav_scroll .navbar-nav>li, .nav_scroll .navbar-brand , .nav_scroll .navbar-nav>li>a, .nav_scroll .navbar-nav>li>a:hover, .nav_scroll .navbar-nav>li>a:focus, .nav_scroll .navbar-nav>.active>a, .nav_scroll .navbar-nav>.active>a:hover, .nav_scroll .navbar-nav>.active>a:focus',
           ]
       );
   
       $this->add_control(
           'color_text_nav_scroll',
           [
               'label' => __( 'Color text nav scroll', 'addons-porto' ),
               'type' => \Elementor\Controls_Manager::COLOR,
               'scheme' => [
                   'type' => \Elementor\Scheme_Color::get_type(),
                   'value' => \Elementor\Scheme_Color::COLOR_1,
               ],
               'selectors' => [
                   '{{WRAPPER}} .nav_scroll .navbar-nav>li, .nav_scroll .navbar-brand , .nav_scroll .navbar-nav>li>a, .nav_scroll .navbar-nav>li>a:hover, .nav_scroll .navbar-nav>li>a:focus, .nav_scroll .navbar-nav>.active>a, .nav_scroll .navbar-nav>.active>a:hover, .nav_scroll .navbar-nav>.active>a:focus' => 'color: {{VALUE}}',
               ],
           ]
       );

        $this->end_controls_section();
        


          $this->start_controls_section(
            'porto_icon_header_menu',
               [
                   'label' => __( 'Icon', 'addons-porto' ),
                   'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                  

               ]
             );
             
          
          
   
            $this->add_control(
                'porto_icon_float',
                [
                    'label' => __( 'Layout Section', 'addons-porto' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'right',
                    'options' => [
                        'right'  => __( 'Right', 'addons-porto' ),
                        'unset'  => __( 'Left', 'addons-porto' ),
                     
                       
                    ],
                ]
           
       );
   
    
   
     

        $this->end_controls_section();




         $this->start_controls_section(
			'porto_content_section',
			[
				'label' => __( 'Icon', 'addons-porto' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]
          );
           $this->add_control(
                'porto_icon_menu',
                [
                    'label' => __( 'Icon Menu', 'addons-porto' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    
                ]
            );

          
   
       
           $this->end_controls_section();


    
}

    /**
     * Render oEmbed widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {
    
        $settings = $this->get_settings_for_display();
        
        ?>
<style>
<?php if($settings['porto_width_header']=="fullwidth") {
    ?>.elementor-location-header div .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 100% !important;
    }

    .elementor-location-header div .elementor-section.elementor-section-boxed .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
        padding: 0 !important;
    }


    <?php
}

else {
    ?>.elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 1140px !important;
    }

    .elementor-section.elementor-section-boxed .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
        padding: 0 !important;
    }



    <?php
}

?>.header-nav-toggle {
    float: <?php echo $settings['porto_icon_float'];
    ?>
}
</style>
<?php

        header_porto_ele('menu-1' , $settings);
        
		 if (\Elementor\Plugin::$instance->editor->is_edit_mode() ) : ?>
<script>
jQuery(document).ready(function($) {
    var header = new Vue({
        el: '#header',
        data: {
            info: [{
                    f_name: ''
                },


            ],

            header: true,
            menu: '',
            submenu: []

        },
        mounted() {

            $.ajax({
                type: "GET",
                data_type: "JSON",
                url: porto_data.ajaxurl,
                data: {
                    action: "header"
                },
                success: function(response) {
                    $data = JSON.parse(response);
                    header.info = $data;




                },
                error: function(e, ts, et) {
                    console.log(ts);
                }



            });

            $.ajax({
                type: "GET",
                data_type: "JSON",
                url: 'http://porto.local/wp-json/menus/v2/menu-1',

                success: function(response) {

                    header.menu = response;


                    $.each(response, function(key, value) {
                        if (value.parent != 0) {
                            $list = {
                                'title': value.title,
                                'parent': value.parent
                            };
                            header.submenu.push($list);

                        }
                    });

                },
                error: function(e, ts, et) {
                    console.log(ts);
                }



            });

        },




    })
});
</script>
<?php endif; 

    }
}