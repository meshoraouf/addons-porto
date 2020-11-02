
<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Elementor_Home_Widget extends \Elementor\Widget_Base {

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
        return 'section';
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
        return __( 'Section', 'adons-porto' );
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
        return 'fas fa-pen-alt';
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
			'porto_content_section',
			[
				'label' => __( 'Content', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]
          );
            $this->add_control(
                'porto_layout_section',
                [
                    'label' => __( 'Layout Section', 'elementor' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'about',
                    'options' => [
                        'about'  => __( 'About', 'elementor' ),
                        'skill' => __( 'Skill', 'elementor' ),
                       
                    ],
                ]
            );

       

        $this->end_controls_section();
        
		$this->start_controls_section(
			'porto_style_section',
			[
				'label' => __( 'Style', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,

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
      
           
                

          get_style($settings['porto_layout_section']);
           
        ?>
       
        <?php

    }
 
}