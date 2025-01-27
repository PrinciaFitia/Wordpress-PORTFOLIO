jQuery(document).ready(function($) {


	$( "#accordion-section-solace_general_options" ).addClass( "down" );
	$( "#accordion-section-solace_page_settings" ).addClass( "down" );
	$( "#accordion-section-solace_features" ).addClass( "down" );
	$( "#accordion-panel-solace_wc_custom" ).addClass( "down" );
	$( "#accordion-section-solace_core_options" ).addClass( "down" );

	$( "#accordion-section-solace_test_2" ).addClass( "hide" );
	$( "#accordion-section-solace_colors_background_section" ).addClass( "hide" );
	$( "#accordion-section-solace_typography_headings" ).addClass( "hide" );

	$( "#accordion-section-solace_container" ).addClass( "hide" );
	$( "#accordion-section-solace_sidebar" ).addClass( "hide" );
	$( "#accordion-section-solace_blog_archive_layout" ).addClass( "hide" );
	$( "#accordion-section-solace_blog_page_title" ).addClass( "hide" );
	$( "#accordion-section-solace_single_post_layout" ).addClass( "hide" );
	$( "#accordion-section-solace_single_page_layout" ).addClass( "hide" );
	$( "#accordion-section-solace_features_scroll_to_top" ).addClass( "hide" );
	$( "#accordion-panel-solace_wc_custom_general" ).addClass( "hide" );
	$( "#accordion-section-solace_wc_product_page" ).addClass( "hide" );
	$( "#accordion-section-solace_wc_single_product" ).addClass( "hide" );
	// $( "#accordion-panel-solace_wc_custom_product_pages" ).addClass( "hide" );
	$( "#accordion-panel-solace_panel_wc_product_page" ).addClass( "hide" );
	$( "#accordion-panel-solace_wc_custom_single_product" ).addClass( "hide" );

	// GROUP CORE OPTIONS
	$( "#accordion-panel-widgets" ).addClass( "hide" );
	$( "#accordion-section-solace_core_site_identity" ).addClass( "hide" );
	$( "#accordion-panel-nav_menus" ).addClass( "hide" );
	$( "#accordion-section-solace_core_homepage" ).addClass( "hide" );
	$( "#accordion-section-custom_css" ).addClass( "hide" );

	$('.customize-pane-toggle').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
	});

	$('#accordion-section-solace_general_options').on('click', function(e) {
		e.preventDefault();

		if ($("#accordion-section-solace_colors_background_section").hasClass('hide')) {
			$( "#accordion-section-solace_typography_headings" ).removeClass( "hide" );
			$( "#accordion-section-solace_colors_background_section" ).removeClass( "hide" );
			$( "#accordion-section-solace_general_options" ).removeClass( "down" );
			$( "#accordion-section-solace_general_options" ).addClass( "up" );
			
		} else {
			$( "#accordion-section-solace_typography_headings" ).addClass( "hide" );
			$( "#accordion-section-solace_colors_background_section" ).addClass( "hide" );
			$( "#accordion-section-solace_general_options" ).removeClass( "up" );
			$( "#accordion-section-solace_general_options" ).addClass( "down" );
		}
		return false;

	});

	$('#accordion-panel-solace_wc_custom').on('click', function(e) {
		e.preventDefault();

		if ($("#accordion-panel-solace_wc_custom").hasClass('down')) {
			$( "#accordion-panel-solace_wc_custom" ).removeClass( "down" );
			$( "#accordion-panel-solace_wc_custom_general" ).removeClass( "hide" );
			$( "#accordion-section-solace_wc_product_page" ).removeClass( "hide" );
			$( "#accordion-section-solace_wc_single_product" ).removeClass( "hide" );
			// $( "#accordion-panel-solace_wc_custom_product_pages" ).removeClass( "hide" );
			$( "#accordion-panel-solace_panel_wc_product_page" ).removeClass( "hide" );
			$( "#accordion-panel-solace_wc_custom_single_product" ).removeClass( "hide" );
			$( "#accordion-panel-solace_wc_custom" ).addClass( "up" );
			
		} else {
			// $( "#accordion-panel-solace_wc_custom_product_pages" ).addClass( "hide" );
			$( "#accordion-panel-solace_panel_wc_product_page" ).addClass( "hide" );
			$( "#accordion-panel-solace_wc_custom_single_product" ).addClass( "hide" );
			$( "#accordion-panel-solace_wc_custom_general" ).addClass( "hide" );
			$( "#accordion-section-solace_wc_product_page" ).addClass( "hide" );
			$( "#accordion-section-solace_wc_single_product" ).addClass( "hide" );
			$( "#accordion-panel-solace_wc_custom" ).removeClass( "up" );
			$( "#accordion-panel-solace_wc_custom" ).addClass( "down" );
		}
		return false;

	});

	$('#sub-accordion-section-solace_blog_page_title .customize-section-back').on('click', function(e) {
		e.preventDefault();
		if ($("#accordion-section-solace_container").hasClass('hide')) {
			$( "#accordion-section-solace_container" ).removeClass( "hide" );
			$( "#accordion-section-solace_sidebar" ).removeClass( "hide" );
			$( "#accordion-section-solace_blog_archive_layout" ).removeClass( "hide" );
			$( "#accordion-section-solace_single_post_layout" ).removeClass( "hide" );
			$( "#accordion-section-solace_single_page_layout" ).removeClass( "hide" );

			$( "#accordion-section-solace_page_settings" ).removeClass( "down" );
			$( "#accordion-section-solace_page_settings" ).addClass( "up" );
		} else {
			$( "#accordion-section-solace_container" ).addClass( "hide" );
			$( "#accordion-section-solace_sidebar" ).addClass( "hide" );
			$( "#accordion-section-solace_blog_archive_layout" ).addClass( "hide" );
			$( "#accordion-section-solace_single_post_layout" ).addClass( "hide" );
			$( "#accordion-section-solace_single_page_layout" ).addClass( "hide" );

			$( "#accordion-section-solace_page_settings" ).removeClass( "up" );
			$( "#accordion-section-solace_page_settings" ).addClass( "down" );
		}
		// wp.customize.section('solace_page_settings').focus();
		wp.customize.section('solace_blog_archive_layout').focus();
		return false;
	});

	$('#accordion-section-solace_page_settings').on('click', function(e) {
		e.preventDefault();

		if ($("#accordion-section-solace_container").hasClass('hide')) {
			$( "#accordion-section-solace_container" ).removeClass( "hide" );
			$( "#accordion-section-solace_sidebar" ).removeClass( "hide" );
			$( "#accordion-section-solace_blog_archive_layout" ).removeClass( "hide" );
			$( "#accordion-section-solace_single_post_layout" ).removeClass( "hide" );
			$( "#accordion-section-solace_single_page_layout" ).removeClass( "hide" );

			$( "#accordion-section-solace_page_settings" ).removeClass( "down" );
			$( "#accordion-section-solace_page_settings" ).addClass( "up" );
		} else {
			$( "#accordion-section-solace_container" ).addClass( "hide" );
			$( "#accordion-section-solace_sidebar" ).addClass( "hide" );
			$( "#accordion-section-solace_blog_archive_layout" ).addClass( "hide" );
			$( "#accordion-section-solace_single_post_layout" ).addClass( "hide" );
			$( "#accordion-section-solace_single_page_layout" ).addClass( "hide" );

			$( "#accordion-section-solace_page_settings" ).removeClass( "up" );
			$( "#accordion-section-solace_page_settings" ).addClass( "down" );
		}
		return false;

	});

	

	$('#accordion-section-solace_blog_archive_layout').on('click', function(e) {
		e.preventDefault();

		if ($("#accordion-section-solace_container").hasClass('hide')) {
			$( "#accordion-section-solace_container" ).removeClass( "hide" );
			$( "#accordion-section-solace_sidebar" ).removeClass( "hide" );
			$( "#accordion-section-solace_blog_archive_layout" ).removeClass( "hide" );
			$( "#accordion-section-solace_single_post_layout" ).removeClass( "hide" );
			$( "#accordion-section-solace_single_page_layout" ).removeClass( "hide" );

			$( "#accordion-section-solace_blog_archive_layout" ).removeClass( "down" );
			$( "#accordion-section-solace_blog_archive_layout" ).addClass( "up" );
		} else {
			$( "#accordion-section-solace_container" ).addClass( "hide" );
			$( "#accordion-section-solace_sidebar" ).addClass( "hide" );
			$( "#accordion-section-solace_blog_archive_layout" ).addClass( "hide" );
			$( "#accordion-section-solace_single_post_layout" ).addClass( "hide" );
			$( "#accordion-section-solace_single_page_layout" ).addClass( "hide" );

			$( "#accordion-section-solace_blog_archive_layout" ).removeClass( "up" );
			$( "#accordion-section-solace_blog_archive_layout" ).addClass( "down" );
		}
		return false;

	});

	$('#accordion-section-solace_features').on('click', function(e) {
		
		e.preventDefault();

		if ($("#accordion-section-solace_features_scroll_to_top").hasClass('hide')) {
			$( "#accordion-section-solace_features_scroll_to_top" ).removeClass( "hide" );

			$( "#accordion-section-solace_features" ).removeClass( "down" );
			$( "#accordion-section-solace_features" ).addClass( "up" );
		} else {
			$( "#accordion-section-solace_features_scroll_to_top" ).addClass( "hide" );

			$( "#accordion-section-solace_features" ).removeClass( "up" );
			$( "#accordion-section-solace_features" ).addClass( "down" );
		}
		return false;

	});

	$('#accordion-section-solace_core_options').on('click', function(e) {
		
		e.preventDefault(); 
		
		if ($( "#accordion-section-solace_core_options").hasClass('down')) {
			$( "#accordion-section-solace_core_options" ).removeClass( "down" );
			$( "#accordion-panel-widgets" ).removeClass( "hide" );
			$( "#accordion-section-solace_core_site_identity" ).removeClass( "hide" );
			$( "#accordion-panel-nav_menus" ).removeClass( "hide" );
			$( "#accordion-section-solace_core_homepage" ).removeClass( "hide" );
			$( "#accordion-section-custom_css" ).removeClass( "hide" );
			$( "#accordion-section-solace_core_options" ).addClass( "up" );
		} else {
			$( "#accordion-panel-widgets" ).addClass( "hide" );
			$( "#accordion-section-solace_core_site_identity" ).addClass( "hide" );
			$( "#accordion-panel-nav_menus" ).addClass( "hide" );
			$( "#accordion-section-solace_core_homepage" ).addClass( "hide" );
			$( "#accordion-section-custom_css" ).addClass( "hide" );
			$( "#accordion-section-solace_core_options" ).removeClass( "up" );
			$( "#accordion-section-solace_core_options" ).addClass( "down" );
		}
		return false;

	});

	// JS FOR ELEMENT LOGO & SITE IDENTITY
	var newDiv = $('<li id="customize-control-logo_show_title" class="customize-control customize-control-solace_toggle_control riconew">');

});
