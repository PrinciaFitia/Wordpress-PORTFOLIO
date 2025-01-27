<?php
// use Elementor;
use Elementor\Controls_Manager;
use Elementor\Core\Kits\Controls\Repeater as Global_Style_Repeater;
use Elementor\Repeater;
use Elementor\Plugin;

function solace_button_elementor_after_save( $elementor_element, $data ) {

	$current = \Elementor\Plugin::$instance->kits_manager->get_current_settings();

	$button_border_radius = $current['button_border_radius'];

	if (isset($button_border_radius['top'])) {
		$top_radius = $button_border_radius['top'];
	}

	if (isset($button_border_radius['right'])) {
		$right_radius = $button_border_radius['right'];
	}

	if (isset($button_border_radius['bottom'])) {
		$bottom_radius = $button_border_radius['bottom'];
	}

	if (isset($button_border_radius['left'])) {
		$left_radius = $button_border_radius['left'];
	}

	if (isset($top_radius)) {
		set_theme_mod('button_top_radius', $top_radius);
	}

	if (isset($right_radius)) {
		set_theme_mod('button_right_radius', $right_radius);
	}

	if (isset($bottom_radius)) {
		set_theme_mod('button_bottom_radius', $bottom_radius);
	}

	if (isset($left_radius)) {
		set_theme_mod('button_left_radius', $left_radius);
	}
}

add_action( 'elementor/document/after_save', 'solace_button_elementor_after_save', 10, 2 );

/**
 * Apply Elementor button styles.
 */
function solace_apply_elementor_button_styles() {

    // If plugin elementor deactive.
    if ( ! class_exists( 'Elementor\Plugin' ) ) {
        return;
    }

    $elementor_active_kit = get_option( 'elementor_active_kit' );

	// Retrieve the Elementor page settings meta data.
	$meta = get_post_meta( $elementor_active_kit, '_elementor_page_settings', true );
	$body_classes = get_body_class();

	if (in_array('dokan-store', $body_classes) || in_array('dokan-dashboard', $body_classes)) {
		$meta = false;
	} 

	// echo '<pre>';
	// print_r($meta);
	// echo '</pre>';

	if ( $meta ) {

		// Construct the CSS style for button border radius.
		$style = '';
		$selector = "
		.solace-shortcode-wc ul.products li.product .nv-card-content-wrapper a.button,
		.elementor-shortcode ul.products li.product .nv-card-content-wrapper a.button,
		body .nv-card-content-wrapper .add_to_cart_button,
		body .solace-mc-embedded-subscribe, 
		.builder-item--button_base .button,
		.builder-item--button_base2 .button,
		.builder-item--button_base3 .button,
		.builder-item--button_base4 .button,
		body.woocommerce ul.products li.product .button,
		body .search-form .search-submit,
		body .menu-item-nav-search.canvas .nv-nav-search .close-container button svg,
		body .main-all .container-all .row1 .left .boxes .box-image .the-category,
		body .wp-block-search .wp-block-search__button,
		body .comments-area form input[type=submit],
		body .site-footer .nv-html-content #mc-embedded-subscribe,
		body div.builder-item--nav-icon button,
		body:not(.dokan-theme-solace) .woocommerce ul.products li.product .button,
		body #review_form #respond input#submit,
		body .woocommerce div.product form.cart .button,
		body .woocommerce .woocommerce-message .button,
		body .woocommerce .cart .button,
		body:not(.dokan-theme-solace) .woocommerce a.button, .woocommerce a.button.alt,
		body .woocommerce table.cart td.actions .coupon .input-text#coupon_code+.button,
		body .woocommerce-page .woocommerce-info a,
		body .woocommerce button.button, .woocommerce button.button.alt,
		body .woocommerce-account a.button.wc-forward,
		body .wp-block-woocommerce-cart .wp-block-button__link.add_to_cart_button.ajax_add_to_cart,
		body .wp-block-woocommerce-cart .wp-block-button__link.add_to_cart_button,
		body .woocommerce-account .woocommerce form.woocommerce-EditAccountForm button[type=submit]";

		$selector_hover = "
		.solace-shortcode-wc ul.products li.product .nv-card-content-wrapper a.button:hover,
		.elementor-shortcode ul.products li.product .nv-card-content-wrapper a.button:hover,
		body .nv-card-content-wrapper .add_to_cart_button:hover,
		body .solace-mc-embedded-subscribe:hover,
		.builder-item--button_base .button:hover,
		.builder-item--button_base2 .button:hover,
		.builder-item--button_base3 .button:hover,
		.builder-item--button_base4 .button:hover,
		body.woocommerce ul.products li.product .button:hover,
		body .search-form .search-submit:hover,
		body .menu-item-nav-search.canvas .nv-nav-search .close-container button:hover svg,
		body .main-all .container-all .row1 .left .boxes .box-image .the-category:hover,
		body .wp-block-search .wp-block-search__button:hover,
		body .comments-area form input[type=submit]:hover,
		body .site-footer .nv-html-content #mc-embedded-subscribe:hover,
		body div.builder-item--nav-icon button:hover,
		body:not(.dokan-theme-solace) .woocommerce ul.products li.product .button:hover,
		body #review_form #respond input#submit:hover,
		body .woocommerce div.product form.cart .button:hover,
		body .woocommerce .woocommerce-message .button:hover,
		body .woocommerce .cart .button:hover,
		body:not(.dokan-theme-solace) .woocommerce a.button:hover, .woocommerce a.button.alt:hover,
		body .woocommerce table.cart td.actions .coupon .input-text#coupon_code+.button:hover,
		body .woocommerce-page .woocommerce-info a:hover,
		body .woocommerce button.button:hover, .woocommerce button.button.alt:hover,
		body .woocommerce-account a.button.wc-forward:hover,
		body .wp-block-woocommerce-cart .wp-block-button__link.add_to_cart_button.ajax_add_to_cart:hover,
		body .wp-block-woocommerce-cart .wp-block-button__link.add_to_cart_button:hover,
		body .woocommerce-account .woocommerce form.woocommerce-EditAccountForm button[type=submit]:hover";		

		$selector_only = " body.woocommerce-shop nav.woocommerce-pagination ul li span.current";

		// Typography font family.
		if ( isset( $meta['button_typography_font_family'] ) ) {

			$font_family = $meta['button_typography_font_family'];

			$style .= $selector . "{";
			$style .= "font-family: {$font_family};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}	

		// Typography font size.
		if ( 
			isset( $meta['button_typography_font_size'] ) &&
			isset( $meta['button_typography_font_size']['unit'] ) &&
			isset( $meta['button_typography_font_size']['size'] )
		) {

			$font_unit = $meta['button_typography_font_size']['unit'];
			$font_size = $meta['button_typography_font_size']['size'];

			$style .= $selector . "{";
			$style .= "font-size: {$font_size}$font_unit;";
			$style .= "}";


			if ( 
				isset( $meta['button_typography_font_size_tablet'] ) &&
				isset( $meta['button_typography_font_size_tablet']['unit'] ) &&
				isset( $meta['button_typography_font_size_tablet']['size'] )
			) {
				$font_unit = $meta['button_typography_font_size_tablet']['unit'];
				$font_size = $meta['button_typography_font_size_tablet']['size'];

				$style .= "@media only screen and (max-width: 1024px) {";
				$style .= $selector . "{";
				$style .= "font-size: {$font_size}$font_unit;";
				$style .= "}";
				$style .= "}";
			}

			if ( 
				isset( $meta['button_typography_font_size_mobile'] ) &&
				isset( $meta['button_typography_font_size_mobile']['unit'] ) &&
				isset( $meta['button_typography_font_size_mobile']['size'] )
			) {
				$font_unit = $meta['button_typography_font_size_mobile']['unit'];
				$font_size = $meta['button_typography_font_size_mobile']['size'];

				$style .= "@media only screen and (max-width: 767px) {";
				$style .= $selector . "{";
				$style .= "font-size: {$font_size}$font_unit;";
				$style .= "}";
				$style .= "}";
			}			

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style Typography weight
		if ( isset( $meta['button_typography_font_weight'] ) ) {

			$button_font_weight = $meta['button_typography_font_weight'];

			$style .= $selector . "{";
			$style .= "font-weight: {$button_font_weight};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style Typography transform.
		if ( isset( $meta['button_typography_text_transform'] ) ) {

			$button_text_transform = $meta['button_typography_text_transform'];

			$style .= $selector . "{";
			$style .= "text-transform: {$button_text_transform};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style Typography style.
		if ( isset( $meta['button_typography_font_style'] ) ) {

			$button_font_style = $meta['button_typography_font_style'];

			$style .= $selector . "{";
			$style .= "font-style: {$button_font_style};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style Typography decoration.
		if ( isset( $meta['button_typography_text_decoration'] ) ) {

			$button_text_decoration = $meta['button_typography_text_decoration'];

			$style .= $selector . "{";
			$style .= "text-decoration: {$button_text_decoration};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}

		// Typography line height.
		if ( 
			isset( $meta['button_typography_line_height'] ) &&
			isset( $meta['button_typography_line_height']['unit'] ) &&
			isset( $meta['button_typography_line_height']['size'] )
		) {

			$unit = $meta['button_typography_line_height']['unit'];
			$line_height = $meta['button_typography_line_height']['size'];

			$style .= $selector . "{";
			$style .= "line-height: {$line_height}$unit;";
			$style .= "}";

			if ( 
				isset( $meta['button_typography_line_height_tablet'] ) &&
				isset( $meta['button_typography_line_height_tablet']['unit'] ) &&
				isset( $meta['button_typography_line_height_tablet']['size'] )
			) {
				$unit = $meta['button_typography_line_height_tablet']['unit'];
				$line_height = $meta['button_typography_line_height_tablet']['size'];

				$style .= "@media only screen and (max-width: 1024px) {";
				$style .= $selector . "{";
				$style .= "line-height: {$line_height}$unit;";
				$style .= "}";
				$style .= "}";
			}

			if ( 
				isset( $meta['button_typography_line_height_mobile'] ) &&
				isset( $meta['button_typography_line_height_mobile']['unit'] ) &&
				isset( $meta['button_typography_line_height_mobile']['size'] )
			) {
				$unit = $meta['button_typography_line_height_mobile']['unit'];
				$line_height = $meta['button_typography_line_height_mobile']['size'];

				$style .= "@media only screen and (max-width: 767px) {";
				$style .= $selector . "{";
				$style .= "line-height: {$line_height}$unit;";
				$style .= "}";
				$style .= "}";
			}			

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Typography letter spacing.
		if ( 
			isset( $meta['button_typography_letter_spacing'] ) &&
			isset( $meta['button_typography_letter_spacing']['unit'] ) &&
			isset( $meta['button_typography_letter_spacing']['size'] )
		) {

			$unit = $meta['button_typography_letter_spacing']['unit'];
			$letter_spacing = $meta['button_typography_letter_spacing']['size'];

			$style .= $selector . "{";
			$style .= "letter-spacing: {$letter_spacing}$unit;";
			$style .= "}";

			if ( 
				isset( $meta['button_typography_letter_spacing_tablet'] ) &&
				isset( $meta['button_typography_letter_spacing_tablet']['unit'] ) &&
				isset( $meta['button_typography_letter_spacing_tablet']['size'] )
			) {
				$unit = $meta['button_typography_letter_spacing_tablet']['unit'];
				$letter_spacing = $meta['button_typography_letter_spacing_tablet']['size'];

				$style .= "@media only screen and (max-width: 1024px) {";
				$style .= $selector . "{";
				$style .= "letter-spacing: {$letter_spacing}$unit;";
				$style .= "}";
				$style .= "}";
			}

			if ( 
				isset( $meta['button_typography_letter_spacing_mobile'] ) &&
				isset( $meta['button_typography_letter_spacing_mobile']['unit'] ) &&
				isset( $meta['button_typography_letter_spacing_mobile']['size'] )
			) {
				$unit = $meta['button_typography_letter_spacing_mobile']['unit'];
				$letter_spacing = $meta['button_typography_letter_spacing_mobile']['size'];

				$style .= "@media only screen and (max-width: 767px) {";
				$style .= $selector . "{";
				$style .= "letter-spacing: {$letter_spacing}$unit;";
				$style .= "}";
				$style .= "}";
			}			

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}				

		// Typography word spacing.
		if ( 
			isset( $meta['button_typography_word_spacing'] ) &&
			isset( $meta['button_typography_word_spacing']['unit'] ) &&
			isset( $meta['button_typography_word_spacing']['size'] )
		) {

			$unit = $meta['button_typography_word_spacing']['unit'];
			$word_spacing = $meta['button_typography_word_spacing']['size'];

			$style .= $selector . "{";
			$style .= "word-spacing: {$word_spacing}$unit;";
			$style .= "}";

			if ( 
				isset( $meta['button_typography_word_spacing_tablet'] ) &&
				isset( $meta['button_typography_word_spacing_tablet']['unit'] ) &&
				isset( $meta['button_typography_word_spacing_tablet']['size'] )
			) {
				$unit = $meta['button_typography_word_spacing_tablet']['unit'];
				$word_spacing = $meta['button_typography_word_spacing_tablet']['size'];

				$style .= "@media only screen and (max-width: 1024px) {";
				$style .= $selector . "{";
				$style .= "word-spacing: {$word_spacing}$unit;";
				$style .= "}";
				$style .= "}";
			}

			if ( 
				isset( $meta['button_typography_word_spacing_mobile'] ) &&
				isset( $meta['button_typography_word_spacing_mobile']['unit'] ) &&
				isset( $meta['button_typography_word_spacing_mobile']['size'] )
			) {
				$unit = $meta['button_typography_word_spacing_mobile']['unit'];
				$word_spacing = $meta['button_typography_word_spacing_mobile']['size'];

				$style .= "@media only screen and (max-width: 767px) {";
				$style .= $selector . "{";
				$style .= "word-spacing: {$word_spacing}$unit;";
				$style .= "}";
				$style .= "}";
			}			

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style button text shadow.
		if ( 
			isset( $meta['button_text_shadow_text_shadow_type'] ) && 
			isset( $meta['button_text_shadow_text_shadow'] )
		) {

			$text_shadow_horizontal = $meta['button_text_shadow_text_shadow']['horizontal'];
			$text_shadow_vertical = $meta['button_text_shadow_text_shadow']['vertical'];
			$text_shadow_blur = $meta['button_text_shadow_text_shadow']['blur'];
			$text_shadow_color = $meta['button_text_shadow_text_shadow']['color'];

			$style .= $selector . "{";
			$style .= "text-shadow: {$text_shadow_horizontal}px {$text_shadow_vertical}px {$text_shadow_blur}px {$text_shadow_color};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style button text color.
		if ( isset( $meta['button_text_color'] ) ) {

			$text_color = $meta['button_text_color'];

			$style .= $selector . "{";
			$style .= "color: {$text_color};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}	

		// Style button hover text color.
		if ( isset( $meta['button_hover_text_color'] ) ) {

			$hover_text_color = $meta['button_hover_text_color'];

			$style .= $selector_hover . "{";
			$style .= "color: {$hover_text_color};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}	
	
		// Style button background color.
		if ( isset( $meta['button_background_color'] ) ) {

			$bg = $meta['button_background_color'];

			$style .= $selector . "{";
			$style .= "background: {$bg};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style button hover background color.
		if ( isset( $meta['button_hover_background_color'] ) ) {

			$bg = $meta['button_hover_background_color'];

			$style .= $selector_hover . "{";
			$style .= "background: {$bg};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}			

		// Style button border.
		if ( 
			isset( $meta['button_border_border'] ) && 
			isset( $meta['button_border_width']['unit'] ) && 
			isset( $meta['button_border_width']['top'] ) && 
			isset( $meta['button_border_width']['right'] ) && 
			isset( $meta['button_border_width']['bottom'] ) && 
			isset( $meta['button_border_width']['left'] ) &&
			isset( $meta['button_border_color'] ) 
		) {

			$button_border_border = $meta['button_border_border'];
			$button_border_border_unit = $meta['button_border_width']['unit'];
			$button_border_border_top = $meta['button_border_width']['top'];
			$button_border_border_right = $meta['button_border_width']['right'];
			$button_border_border_bottom = $meta['button_border_width']['bottom'];
			$button_border_border_left = $meta['button_border_width']['left'];
			$button_border_color = $meta['button_border_color'];

			$style .= $selector . "{";
			$style .= "border-top: {$button_border_border_top}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "border-right: {$button_border_border_right}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "border-bottom: {$button_border_border_bottom}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "border-left: {$button_border_border_left}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "}";

			if ( 
				isset( $meta['button_border_width_tablet']['unit'] ) && 
				isset( $meta['button_border_width_tablet']['top'] ) && 
				isset( $meta['button_border_width_tablet']['right'] ) && 
				isset( $meta['button_border_width_tablet']['bottom'] ) && 
				isset( $meta['button_border_width_tablet']['left'] )
			) {
				$button_border_border = $meta['button_border_border'];
				$button_border_border_unit = $meta['button_border_width_tablet']['unit'];
				$button_border_border_top = $meta['button_border_width_tablet']['top'];
				$button_border_border_right = $meta['button_border_width_tablet']['right'];
				$button_border_border_bottom = $meta['button_border_width_tablet']['bottom'];
				$button_border_border_left = $meta['button_border_width_tablet']['left'];

				$style .= "@media only screen and (max-width: 1024px) {";
				$style .= $selector . "{";
				$style .= "border-top: {$button_border_border_top}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-right: {$button_border_border_right}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-bottom: {$button_border_border_bottom}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-left: {$button_border_border_left}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "}";
				$style .= "}";
			}

			if ( 
				isset( $meta['button_border_width_mobile']['unit'] ) && 
				isset( $meta['button_border_width_mobile']['top'] ) && 
				isset( $meta['button_border_width_mobile']['right'] ) && 
				isset( $meta['button_border_width_mobile']['bottom'] ) && 
				isset( $meta['button_border_width_mobile']['left'] ) 
			) {
				$button_border_border = $meta['button_border_border'];
				$button_border_border_unit = $meta['button_border_width_mobile']['unit'];
				$button_border_border_top = $meta['button_border_width_mobile']['top'];
				$button_border_border_right = $meta['button_border_width_mobile']['right'];
				$button_border_border_bottom = $meta['button_border_width_mobile']['bottom'];
				$button_border_border_left = $meta['button_border_width_mobile']['left'];				

				$style .= "@media only screen and (max-width: 767px) {";
				$style .= $selector . "{";
				$style .= "border-top: {$button_border_border_top}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-right: {$button_border_border_right}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-bottom: {$button_border_border_bottom}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-left: {$button_border_border_left}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "}";
				$style .= "}";
			}

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}

		// Style button hover border.
		if ( 
			isset( $meta['button_hover_border_border'] ) && 
			isset( $meta['button_hover_border_width']['unit'] ) && 
			isset( $meta['button_hover_border_width']['top'] ) && 
			isset( $meta['button_hover_border_width']['right'] ) && 
			isset( $meta['button_hover_border_width']['bottom'] ) && 
			isset( $meta['button_hover_border_width']['left'] ) &&
			isset( $meta['button_hover_border_color'] ) 
		) {

			$button_border_border = $meta['button_hover_border_border'];
			$button_border_border_unit = $meta['button_hover_border_width']['unit'];
			$button_border_border_top = $meta['button_hover_border_width']['top'];
			$button_border_border_right = $meta['button_hover_border_width']['right'];
			$button_border_border_bottom = $meta['button_hover_border_width']['bottom'];
			$button_border_border_left = $meta['button_hover_border_width']['left'];
			$button_border_color = $meta['button_hover_border_color'];

			$style .= $selector_hover . "{";
			$style .= "border-top: {$button_border_border_top}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "border-right: {$button_border_border_right}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "border-bottom: {$button_border_border_bottom}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "border-left: {$button_border_border_left}{$button_border_border_unit} {$button_border_border} $button_border_color;";
			$style .= "}";

			if ( 
				isset( $meta['button_hover_border_width_tablet']['unit'] ) && 
				isset( $meta['button_hover_border_width_tablet']['top'] ) && 
				isset( $meta['button_hover_border_width_tablet']['right'] ) && 
				isset( $meta['button_hover_border_width_tablet']['bottom'] ) && 
				isset( $meta['button_hover_border_width_tablet']['left'] )
			) {
				$button_border_border = $meta['button_hover_border_border'];
				$button_border_border_unit = $meta['button_hover_border_width_tablet']['unit'];
				$button_border_border_top = $meta['button_hover_border_width_tablet']['top'];
				$button_border_border_right = $meta['button_hover_border_width_tablet']['right'];
				$button_border_border_bottom = $meta['button_hover_border_width_tablet']['bottom'];
				$button_border_border_left = $meta['button_hover_border_width_tablet']['left'];

				$style .= "@media only screen and (max-width: 1024px) {";
				$style .= $selector_hover . "{";
				$style .= "border-top: {$button_border_border_top}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-right: {$button_border_border_right}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-bottom: {$button_border_border_bottom}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-left: {$button_border_border_left}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "}";
				$style .= "}";
			}

			if ( 
				isset( $meta['button_hover_border_width_mobile']['unit'] ) && 
				isset( $meta['button_hover_border_width_mobile']['top'] ) && 
				isset( $meta['button_hover_border_width_mobile']['right'] ) && 
				isset( $meta['button_hover_border_width_mobile']['bottom'] ) && 
				isset( $meta['button_hover_border_width_mobile']['left'] ) 
			) {
				$button_border_border = $meta['button_hover_border_border'];
				$button_border_border_unit = $meta['button_hover_border_width_mobile']['unit'];
				$button_border_border_top = $meta['button_hover_border_width_mobile']['top'];
				$button_border_border_right = $meta['button_hover_border_width_mobile']['right'];
				$button_border_border_bottom = $meta['button_hover_border_width_mobile']['bottom'];
				$button_border_border_left = $meta['button_hover_border_width_mobile']['left'];				

				$style .= "@media only screen and (max-width: 767px) {";
				$style .= $selector_hover . "{";
				$style .= "border-top: {$button_border_border_top}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-right: {$button_border_border_right}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-bottom: {$button_border_border_bottom}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "border-left: {$button_border_border_left}{$button_border_border_unit} {$button_border_border} $button_border_color;";
				$style .= "}";
				$style .= "}";
			}

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style button border radius.
		if ( 
			isset( $meta['button_border_radius'] ) && 
			isset( $meta['button_border_radius']['unit'] ) && 
			isset( $meta['button_border_radius']['top'] ) && 
			isset( $meta['button_border_radius']['right'] ) && 
			isset( $meta['button_border_radius']['bottom'] ) && 
			isset( $meta['button_border_radius']['left'] ) 
		) {

			$border_radius_unit = $meta['button_border_radius']['unit'];
			$border_radius_top = $meta['button_border_radius']['top'];
			$border_radius_right = $meta['button_border_radius']['right'];
			$border_radius_bottom = $meta['button_border_radius']['bottom'];
			$border_radius_left = $meta['button_border_radius']['left'];

			$style .= $selector . "{";
			$style .= "border-top-left-radius: {$border_radius_top}{$border_radius_unit};";
			$style .= "border-top-right-radius: {$border_radius_right}{$border_radius_unit};";
			$style .= "border-bottom-right-radius: {$border_radius_bottom}{$border_radius_unit};";
			$style .= "border-bottom-left-radius: {$border_radius_left}{$border_radius_unit};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}

		// Style button hover border radius.
		if ( 
			isset( $meta['button_hover_border_radius'] ) && 
			isset( $meta['button_hover_border_radius']['unit'] ) && 
			isset( $meta['button_hover_border_radius']['top'] ) && 
			isset( $meta['button_hover_border_radius']['right'] ) && 
			isset( $meta['button_hover_border_radius']['bottom'] ) && 
			isset( $meta['button_hover_border_radius']['left'] ) 
		) {

			$border_radius_unit = $meta['button_hover_border_radius']['unit'];
			$border_radius_top = $meta['button_hover_border_radius']['top'];
			$border_radius_right = $meta['button_hover_border_radius']['right'];
			$border_radius_bottom = $meta['button_hover_border_radius']['bottom'];
			$border_radius_left = $meta['button_hover_border_radius']['left'];

			$style .= $selector_hover . "{";
			$style .= "border-top-left-radius: {$border_radius_top}{$border_radius_unit};";
			$style .= "border-top-right-radius: {$border_radius_right}{$border_radius_unit};";
			$style .= "border-bottom-right-radius: {$border_radius_bottom}{$border_radius_unit};";
			$style .= "border-bottom-left-radius: {$border_radius_left}{$border_radius_unit};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}

		// Style button padding.
		if ( 
			isset( $meta['button_padding'] ) &&
			isset( $meta['button_padding']['unit'] ) &&
			isset( $meta['button_padding']['top'] ) &&
			isset( $meta['button_padding']['right'] ) &&
			isset( $meta['button_padding']['bottom'] ) &&
			isset( $meta['button_padding']['left'] ) &&
			isset( $meta['button_padding']['isLinked'] )
		) {

			$button_unit = $meta['button_padding']['unit'];
			$button_top = $meta['button_padding']['top'];
			$button_right = $meta['button_padding']['right'];
			$button_bottom = $meta['button_padding']['bottom'];
			$button_left = $meta['button_padding']['left'];
			$button_is_linked = $meta['button_padding']['isLinked'];

			$style .= $selector . "{";
			$style .= "padding-top: {$button_top}{$button_unit};";
			$style .= "padding-right: {$button_right}{$button_unit};";
			$style .= "padding-bottom: {$button_bottom}{$button_unit};";
			$style .= "padding-left: {$button_left}{$button_unit};";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}

		// Style button padding tablet.
		if ( 
			isset( $meta['button_padding_tablet'] ) &&
			isset( $meta['button_padding_tablet']['unit'] ) &&
			isset( $meta['button_padding_tablet']['top'] ) &&
			isset( $meta['button_padding_tablet']['right'] ) &&
			isset( $meta['button_padding_tablet']['bottom'] ) &&
			isset( $meta['button_padding_tablet']['left'] ) &&
			isset( $meta['button_padding_tablet']['isLinked'] )
		) {

			$button_unit = $meta['button_padding_tablet']['unit'];
			$button_top = $meta['button_padding_tablet']['top'];
			$button_right = $meta['button_padding_tablet']['right'];
			$button_bottom = $meta['button_padding_tablet']['bottom'];
			$button_left = $meta['button_padding_tablet']['left'];
			$button_is_linked = $meta['button_padding_tablet']['isLinked'];

			$style .= "@media only screen and (max-width: 1024px) {";
			$style .= $selector . "{";
			$style .= "padding-top: {$button_top}{$button_unit};";
			$style .= "padding-right: {$button_right}{$button_unit};";
			$style .= "padding-bottom: {$button_bottom}{$button_unit};";
			$style .= "padding-left: {$button_left}{$button_unit};";
			$style .= "}";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}
	
		// Style button padding mobile.
		if ( 
			isset( $meta['button_padding_mobile'] ) &&
			isset( $meta['button_padding_mobile']['unit'] ) &&
			isset( $meta['button_padding_mobile']['top'] ) &&
			isset( $meta['button_padding_mobile']['right'] ) &&
			isset( $meta['button_padding_mobile']['bottom'] ) &&
			isset( $meta['button_padding_mobile']['left'] ) &&
			isset( $meta['button_padding_mobile']['isLinked'] )
		) {

			$button_unit = $meta['button_padding_mobile']['unit'];
			$button_top = $meta['button_padding_mobile']['top'];
			$button_right = $meta['button_padding_mobile']['right'];
			$button_bottom = $meta['button_padding_mobile']['bottom'];
			$button_left = $meta['button_padding_mobile']['left'];
			$button_is_linked = $meta['button_padding_mobile']['isLinked'];

			$style .= "@media only screen and (max-width: 767px) {";
			$style .= $selector . "{";
			$style .= "padding-top: {$button_top}{$button_unit};";
			$style .= "padding-right: {$button_right}{$button_unit};";
			$style .= "padding-bottom: {$button_bottom}{$button_unit};";
			$style .= "padding-left: {$button_left}{$button_unit};";
			$style .= "}";
			$style .= "}";

			// Add the inline style to the 'solace-theme'.
			wp_add_inline_style( 'solace-theme', $style );
		}		

		// Style button color.
		if ( isset( $meta['__globals__']['button_text_color'] ) ) {
			$button_text_color = $meta['__globals__']['button_text_color'];
			$button_text_color = str_replace( 'globals/colors?id=', '', $button_text_color );

			// Display the color value if the target ID was found, otherwise show a not found message.
			if ($button_text_color) {
				// Pattern to match selectors to remove
				$pattern = '/\.builder-item--button_base(2|3|4)? \.button,? ?/';

				// Remove matched selectors
				$without_item_button_base = preg_replace($pattern, '', $selector);				

				$style .= $without_item_button_base . "{";
					$style .= "color: var(--e-global-color-$button_text_color) !important;";
					$style .= "fill: var(--e-global-color-$button_text_color) !important;";
				$style .= "}";

				// Add the inline style to the 'solace-theme'.
				wp_add_inline_style( 'solace-theme', $style );				
			}
		}		

		// Style button hover color.
		if ( isset( $meta['__globals__']['button_hover_text_color'] ) ) {
			$button_hover_text_color = $meta['__globals__']['button_hover_text_color'];
			$button_hover_text_color = str_replace( 'globals/colors?id=', '', $button_hover_text_color );

			// Display the color value if the target ID was found, otherwise show a not found message.
			if ($button_hover_text_color) {

				// Pattern to match selectors to remove
				$pattern = '/\.builder-item--button_base(2|3|4)? \.button(:hover)?,? ?/';

				// Remove matched selectors
				$without_item_button_base = preg_replace($pattern, '', $selector_hover);				

				$style .= $without_item_button_base . "{";
					$style .= "color: var(--e-global-color-$button_hover_text_color) !important;";
					$style .= "fill: var(--e-global-color-$button_hover_text_color) !important;";
				$style .= "}";

				// Add the inline style to the 'solace-theme'.
				wp_add_inline_style( 'solace-theme', $style );				
			}
		}		

		// Style button background.
		if ( isset( $meta['__globals__']['button_background_color'] ) ) {
			$button_background_color = $meta['__globals__']['button_background_color'];
			$button_background_color = str_replace( 'globals/colors?id=', '', $button_background_color );

			// Display the color value if the target ID was found, otherwise show a not found message.
			if ($button_background_color) {
				// Pattern to match selectors to remove
				$pattern = '/\.builder-item--button_base(2|3|4)? \.button,? ?/';

				// Remove matched selectors
				$without_item_button_base = preg_replace($pattern, '', $selector);

				$style .= $without_item_button_base . "{";
					$style .= "background: var(--e-global-color-$button_background_color) !important;";
				$style .= "}";

				// Add the inline style to the 'solace-theme'.
				wp_add_inline_style( 'solace-theme', $style );				
			}
		}
	
		// Style button hover background.
		if ( isset( $meta['__globals__']['button_hover_background_color'] ) ) {
			$button_hover_background_color = $meta['__globals__']['button_hover_background_color'];
			$button_hover_background_color = str_replace( 'globals/colors?id=', '', $button_hover_background_color );

			// Display the color value if the target ID was found, otherwise show a not found message.
			if ($button_hover_background_color) {

				// Pattern to match selectors to remove
				$pattern = '/\.builder-item--button_base(2|3|4)? \.button(:hover)?,? ?/';

				// Remove matched selectors
				$without_item_button_base = preg_replace($pattern, '', $selector_hover);	
				
				$style .= $without_item_button_base . "{";
					$style .= "background: var(--e-global-color-$button_hover_background_color) !important;";
				$style .= "}";

				// Add the inline style to the 'solace-theme'.
				wp_add_inline_style( 'solace-theme', $style );				
			}
		}
	}

    // Fix button site settings global to partial edit customizer.
    $style = "
        body.customize-partial-edit-shortcuts-shown span.customize-partial-edit-shortcut button.customize-partial-edit-shortcut-button {
            box-shadow: unset;
            border-radius: 100%;
            border: none;
            padding: 0;
        }
    ";

    // Add the inline style to the 'solace-theme'.
    wp_add_inline_style( 'solace-theme', $style );
}
add_action('wp_enqueue_scripts', 'solace_apply_elementor_button_styles');
