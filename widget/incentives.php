<?php
class Incentives extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'Incentives';
	}

	public function get_title() {
		return __( 'Incentives', 'plugin-name' );
	}

	public function get_icon() {
		return 'fa fa-calendar';
	}

	public function get_categories() {
		return [ 'OBPress' ];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'info_box_section',
			[
				'label' => __('Incentives Box', 'OBPress_Incentives'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'incentives_box_padding',
			[
				'label' => __( 'Incentives Box Padding', 'OBPress_SearchBarPlugin' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'default' => [
					'top' => '27',
					'right' => '23',
					'bottom' => '20',
					'left' => '23',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-incentive' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'color_section',
			[
				'label' => __('Colors', 'OBPress_Incentives'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_incentives_box_background_color',
			[
				'label' => __('Incentives Box Background Color', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-incentive' => 'background-color: {{obpress_incentives_box_background_color}}',
				],
			]
		);

		$this->add_control(
			'obpress_incentives_box_title_color',
			[
				'label' => __('Incentives Title Color', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-incentive h4' => 'color: {{obpress_incentives_box_title_color}}',
				],
			]
		);		

		$this->add_control(
			'obpress_incentives_box_offer_color',
			[
				'label' => __('Incentives Offer Color', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#777777',
				'selectors' => [
					'.obpress-incentive p' => 'color: {{obpress_incentives_box_offer_color}}',
				],
			]
		);		

		$this->end_controls_section();

		$this->start_controls_section(
			'Typography',
			[
				'label' => __('Typography', 'OBPress_Incentives'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'incentive_title_typography',
				'label' => __('Incentive Title Typography', 'OBPress_Incentives'),
				'selector' => '.obpress-incentive h4',
			]
		);		

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'incentive_offer_typography',
				'label' => __('Incentive Offer Typography', 'OBPress_Incentives'),
				'selector' => '.obpress-incentive p',
			]
		);		

		$this->end_controls_section();

		$this->start_controls_section(
			'incentives_button_section',
			[
				'label' => __('Button', 'OBPress_Incentives'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_incentive_button_background_color',
			[
				'label' => __('Button Background Color', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-incentive button' => 'background-color: {{obpress_incentive_button_background_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_incentive_button_text_color',
			[
				'label' => __('Button Text Color', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-incentive button' => 'color: {{obpress_incentive_button_text_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'incentive_buttons_typography',
				'label' => __('Typography', 'OBPress_Incentives'),
				'selector' => '.obpress-incentive button',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => __('Border', 'OBPress_Incentives'),
				'selector' => '.obpress-incentive button',
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'incentives_slider_section',
			[
				'label' => __('Slider', 'OBPress_Incentives'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'incentives_allow_loop',
			[
				'label' => __('Allow Looping', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('On', 'OBPress_Incentives'),
				'label_off' => __('Off', 'OBPress_Incentives'),
				'return_value' => 'true',
				'default' => 'true',
			]
		);

		$this->add_control(
			'incentives_center_slides',
			[
				'label' => __('Centered Slides', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('On', 'OBPress_Incentives'),
				'label_off' => __('Off', 'OBPress_Incentives'),
				'return_value' => 'true',
				'default' => 'false',
			]
		);

		$this->add_control(
			'incentives_slides_per_view',
			[
				'label' => __('Slides Per View', 'OBPress_Incentives'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['slides'],
				'range' => [
					'slides' => [
						'min' => 1,
						'max' => 10,
						'step' => 0.1,
					]
				],
				'default' => [
					'unit' => 'slides',
					'size' => 3.3,
				]
			]
		);

		$this->add_control(
			'incentives_slider_space_between',
			[
				'label' => __( 'Space Between Slides', 'OBPress_Incentives' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 10,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 20,
				]
			]
		);

		$this->add_control(
			'incentives_slider_transition',
			[
				'label' => __( 'Slider Transition(seconds)', 'OBPress_SearchBarPlugin' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 's'],
				'range' => [
					's' => [
						'min' => 0,
						'max' => 5,
						'step' => 0.1,
					]
				],
				'default' => [
					'unit' => 's',
					'size' => 1,
				]
			]
		);

		$this->add_control(
			'incentives_slide_pagination',
			[
				'label' => __( 'Slider Pagination', 'OBPress_SearchBarPlugin' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'lines',
				'options' => [
					'lines'  => __( 'Lines', 'plugin-domain' ),
					'bullets' => __( 'Bullets', 'plugin-domain' ),
					'disabled' => __( 'Disabled', 'plugin-domain')
				],
			]
		);


		$this->add_control(
			'incentives_number_of_slides',
			[
				'label' => __( 'Number of Pagination Bullets', 'OBPress_SearchBarPlugin' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '5',
				'options' => [
					'2'  => __( '2', 'plugin-domain' ),
					'3' => __( '3', 'plugin-domain' ),
					'4' => __( '4', 'plugin-domain'),
					'5' => __( '5', 'plugin-domain')
				],
			]
		);

		$this->add_control(
			'obpress_incentives_pagination_bullet_color',
			[
				'label' => __('Pagination Bullet Color', 'OBPress_SpecialOffers'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-incentives-swiper-nav .swiper-pagination-bullet' => 'background-color: {{obpress_incentives_pagination_bullet_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_incentives_pagination_bullet_back_icon',
			[
				'label' => __( 'Back Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'obpress_incentives_pagination_bullet_next_icon',
			[
				'label' => __( 'Next Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->end_controls_section();

	}
    
	protected function render() {
		$settings_incentives = $this->get_settings_for_display();

		function DiscountCulture($value, $language) {
			if($language == 1) {
				$value = number_format($value, 2, '.', ',');
			}
			else {
				$value = number_format($value, 2, ',', '.');
			}
	
			return $value;
		}

        require_once(WP_PLUGIN_DIR . '/obpress_plugin_manager/BeApi/BeApi.php');

		require_once(WP_PLUGIN_DIR . '/obpress_plugin_manager/class-lang-curr-functions.php');
		new Lang_Curr_Functions();

		Lang_Curr_Functions::chainOrHotel($id);

		$language = Lang_Curr_Functions::getLanguage();

		$chain = get_option('chain_id');

		$incentives_from_api = BeApi::getClientAvailableIncentives($chain, $language);
		$incentives_for_each_hotel= [];

		if (isset($incentives_from_api->RatePlans->RatePlan)) {
			foreach ($incentives_from_api->RatePlans->RatePlan as $RatePlan) {
				foreach ($RatePlan->Offers as $Offer) {
					$Offer->RatePlanID = $RatePlan->RatePlanID;
					$Offer->HotelID = $RatePlan->ServiceRPHs[0]->RPH;
				}
				$incentives_for_each_hotel[$RatePlan->ServiceRPHs[0]->RPH][$RatePlan->RatePlanID] = $RatePlan->Offers;
			}
		}
		
		$incentives = [];
		foreach ($incentives_for_each_hotel as $incentive_per_hotel) {
			foreach ($incentive_per_hotel as $keyRate => $incentive_per_rate) {
				foreach ($incentive_per_rate as $incentive) {
					$HotelCode = $incentive->HotelID;
					$incentives[] = $incentive;                          
				}
			}
		}

		$prevIcon = "url('../icons/prev.svg')";
		$nextIcon = "url('../icons/next.svg')";


		if(isset($settings_incentives['obpress_incentives_pagination_bullet_back_icon']['value']['url']) && !empty($settings_incentives['obpress_incentives_pagination_bullet_back_icon']['value']['url'])) {
			$prevIcon = $settings_incentives['obpress_incentives_pagination_bullet_back_icon']['value']['url'];
		}

		if(isset($settings_incentives['obpress_incentives_pagination_bullet_next_icon']['value']['url']) && !empty($settings_incentives['obpress_incentives_pagination_bullet_next_icon']['value']['url'])){
			$nextIcon = $settings_incentives['obpress_incentives_pagination_bullet_next_icon']['value']['url'];
		}

        require_once(WP_PLUGIN_DIR . '/OBPress_Incentives/widget/assets/templates/template.php');
	}
}

