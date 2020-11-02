
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
			'porto_style_header',
			[
				'label' => __( 'Style', 'elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,

			]
        );

        
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
                'name' => 'nav_background',

				'label' => __( 'Background Nav', 'elementor' ),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .nav_background' ,
				
			]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => __( 'Typography', 'elementor' ),
                'scheme' =>  \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .nav_background .navbar-nav>li, .nav_background .navbar-brand ,.nav_background .navbar-nav>li>a, .nav_background .navbar-nav>li>a:hover, .nav_background .navbar-nav>li>a:focus, .nav_background .navbar-nav>.active>a, .nav_background .navbar-nav>.active>a:hover, .nav_background .navbar-nav>.active>a:focus',
            ]
        );
        $this->add_group_control(

        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'nav_scroll',
            'label' => __( 'Background Nav scroll', 'elementor' ),
            'types' => ['classic', 'gradient'],
            'selector' => '{{WRAPPER}} .nav_scroll' ,
            
        ]
        
    );

 

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'content_typography_scroll',
            'label' => __( 'Typography Scroll', 'elementor' ),
            'scheme' =>  \Elementor\Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .nav_scroll .navbar-nav>li, .nav_scroll .navbar-brand , .nav_scroll .navbar-nav>li>a, .nav_scroll .navbar-nav>li>a:hover, .nav_scroll .navbar-nav>li>a:focus, .nav_scroll .navbar-nav>.active>a, .nav_scroll .navbar-nav>.active>a:hover, .nav_scroll .navbar-nav>.active>a:focus',
        ]
    );

    $this->add_control(
        'color_text_nav',
        [
            'label' => __( 'Color text nav', 'elementor' ),
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
        'color_text_nav_scroll',
        [
            'label' => __( 'Color text nav scroll', 'elementor' ),
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

    
    $this->add_control(
        'color_text_border',
        [
            'label' => __( 'Color text nav border', 'elementor' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'scheme' => [
                'type' => \Elementor\Scheme_Color::get_type(),
                'value' => \Elementor\Scheme_Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}}  
                .nav li a[aria-current="page"] ' => 'border-bottom: 2px solid {{VALUE}}',
                '.nav li a::before             ' => 'border-bottom: 2px solid : {{VALUE}}',
            ],
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
        header_porto('menu-1');
        ?>

        <?php

    }
}