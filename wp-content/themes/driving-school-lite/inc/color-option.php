<?php
	
	$driving_school_lite_first_theme_color = get_theme_mod('driving_school_lite_first_theme_color');

	$driving_school_lite_custom_css = '';

	if($driving_school_lite_first_theme_color != false){
		$driving_school_lite_custom_css .=' #footer input[type="submit"], .bradcrumbs a:hover, #sidebar .tagcloud a:hover, input[type="submit"],.topbar, h1.page-title, h1.search-title, #slider .carousel-caption, .blogbtn a, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .widget_calendar tbody a, .wrap input[type="submit"], .contact-icon,a.button{';
			$driving_school_lite_custom_css .='background-color: '.esc_html($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}
	if($driving_school_lite_first_theme_color != false){
		$driving_school_lite_custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, #our-features .right-part:hover h3, #our-features .right-part:hover a, .post-info i, a, .nav-menu li a:hover, .enroll span a:hover, #header span.location i, .social-media i, .social-media i:hover, .logo h1 a:hover,  #our-features h2, .footerinner ul li a:hover, .woocommerce-message::before, span.post-title, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$driving_school_lite_custom_css .='color: '.esc_html($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}
	if($driving_school_lite_first_theme_color != false){
		$driving_school_lite_custom_css .=' #our-features .right-part:hover h3, #our-features .right-part:hover a, #our-features hr.head, .woocommerce-message, #sidebar .widget{';
			$driving_school_lite_custom_css .='border-color: '.esc_html($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}

	// Layout Options
	$driving_school_lite_theme_layout = get_theme_mod( 'driving_school_lite_theme_layout_options','Default Theme');
    if($driving_school_lite_theme_layout == 'Default Theme'){
		$driving_school_lite_custom_css .='body{';
			$driving_school_lite_custom_css .='max-width: 100%;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_theme_layout == 'Container Theme'){
		$driving_school_lite_custom_css .='body{';
			$driving_school_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_theme_layout == 'Box Container Theme'){
		$driving_school_lite_custom_css .='body{';
			$driving_school_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$driving_school_lite_custom_css .='}';
	}

	/*----------------Slider Content Layout --------------*/

	$driving_school_lite_slider_layout = get_theme_mod( 'driving_school_lite_slider_alignment_option','Left Align');
    if($driving_school_lite_slider_layout == 'Left Align'){
		$driving_school_lite_custom_css .='#slider .carousel-caption{';
			$driving_school_lite_custom_css .='text-align:left; left:0;
						   -webkit-clip-path: polygon(0 0, 100% 0, 75% 100%, 100% 100%, 0 100%); 
						   clip-path: polygon(0 0, 100% 0, 75% 100%, 100% 100%, 0% 100%);';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$driving_school_lite_custom_css .='text-align:left;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_slider_layout == 'Center Align'){
		$driving_school_lite_custom_css .='#slider .carousel-caption{';
			$driving_school_lite_custom_css .='text-align:center; left:30%; right:30%; clip-path:none; top:15%; bottom:30%;';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .carousel-caption.d-none.d-md-block{';
			$driving_school_lite_custom_css .=' width:auto; height:auto; padding:0';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$driving_school_lite_custom_css .='text-align:center;';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){
			#slider .more-btn{';
			$driving_school_lite_custom_css .='padding:20px 0;';
		$driving_school_lite_custom_css .='} }';
		$driving_school_lite_custom_css .='#slider .inner_carousel{';
			$driving_school_lite_custom_css .='padding:4%; background-color:#ffc61a;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_slider_layout == 'Right Align'){
		$driving_school_lite_custom_css .='#slider .carousel-caption{';
			$driving_school_lite_custom_css .='text-align:right;
						   right:0; left:auto;
						   -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 25% 100%); 
						   clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 25% 100%);';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$driving_school_lite_custom_css .='text-align:right;';
		$driving_school_lite_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$driving_school_lite_preloader_color = get_theme_mod('driving_school_lite_preloader_color');

	if($driving_school_lite_preloader_color != false){
		$driving_school_lite_custom_css .=' .tg-loader{';
			$driving_school_lite_custom_css .='border-color: '.esc_html($driving_school_lite_preloader_color).';';
		$driving_school_lite_custom_css .='} ';
		$driving_school_lite_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$driving_school_lite_custom_css .='background-color: '.esc_html($driving_school_lite_preloader_color).';';
		$driving_school_lite_custom_css .='} ';
	}

	$driving_school_lite_preloader_bg_color = get_theme_mod('driving_school_lite_preloader_bg_color');

	if($driving_school_lite_preloader_bg_color != false){
		$driving_school_lite_custom_css .=' #overlayer, .preloader{';
			$driving_school_lite_custom_css .='background-color: '.esc_html($driving_school_lite_preloader_bg_color).';';
		$driving_school_lite_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/
	$driving_school_lite_top_button_padding = get_theme_mod('driving_school_lite_top_button_padding');
	$driving_school_lite_bottom_button_padding = get_theme_mod('driving_school_lite_bottom_button_padding');
	$driving_school_lite_left_button_padding = get_theme_mod('driving_school_lite_left_button_padding');
	$driving_school_lite_right_button_padding = get_theme_mod('driving_school_lite_right_button_padding');
	if($driving_school_lite_top_button_padding != false || $driving_school_lite_bottom_button_padding != false || $driving_school_lite_left_button_padding != false || $driving_school_lite_right_button_padding != false){
		$driving_school_lite_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$driving_school_lite_custom_css .='padding-top: '.esc_html($driving_school_lite_top_button_padding).'px; padding-bottom: '.esc_html($driving_school_lite_bottom_button_padding).'px; padding-left: '.esc_html($driving_school_lite_left_button_padding).'px; padding-right: '.esc_html($driving_school_lite_right_button_padding).'px; display:inline-block;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_button_border_radius = get_theme_mod('driving_school_lite_button_border_radius');
	$driving_school_lite_custom_css .='.more-btn span, .more-btn a, .blogbtn a, #comments input[type="submit"].submit{';
		$driving_school_lite_custom_css .='border-radius: '.esc_html($driving_school_lite_button_border_radius).'px;';
	$driving_school_lite_custom_css .='}';

	/*----------- Copyright css -----*/
	$driving_school_lite_copyright_top_padding = get_theme_mod('driving_school_lite_top_copyright_padding');
	$driving_school_lite_copyright_bottom_padding = get_theme_mod('driving_school_lite_top_copyright_padding');
	if($driving_school_lite_copyright_top_padding != false || $driving_school_lite_copyright_bottom_padding != false){
		$driving_school_lite_custom_css .='.copyright{';
			$driving_school_lite_custom_css .='padding-top: '.esc_html($driving_school_lite_copyright_top_padding).'px; padding-bottom: '.esc_html($driving_school_lite_copyright_bottom_padding).'px; ';
		$driving_school_lite_custom_css .='}';
	} 

	$driving_school_lite_copyright_alignment = get_theme_mod('driving_school_lite_copyright_alignment', 'center');
	if($driving_school_lite_copyright_alignment == 'center' ){
		$driving_school_lite_custom_css .='#footer .copyright p{';
			$driving_school_lite_custom_css .='text-align: '. $driving_school_lite_copyright_alignment .';';
		$driving_school_lite_custom_css .='}';
	}elseif($driving_school_lite_copyright_alignment == 'left' ){
		$driving_school_lite_custom_css .='#footer .copyright p{';
			$driving_school_lite_custom_css .=' text-align: '. $driving_school_lite_copyright_alignment .';';
		$driving_school_lite_custom_css .='}';
	}elseif($driving_school_lite_copyright_alignment == 'right' ){
		$driving_school_lite_custom_css .='#footer .copyright p{';
			$driving_school_lite_custom_css .='text-align: '. $driving_school_lite_copyright_alignment .';';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_copyright_font_size = get_theme_mod('driving_school_lite_copyright_font_size');
	$driving_school_lite_custom_css .='#footer .copyright p{';
		$driving_school_lite_custom_css .='font-size: '.esc_html($driving_school_lite_copyright_font_size).'px;';
	$driving_school_lite_custom_css .='}';

	/*------ Topbar padding ------*/
	$driving_school_lite_top_topbar_padding = get_theme_mod('driving_school_lite_top_topbar_padding');
	$driving_school_lite_bottom_topbar_padding = get_theme_mod('driving_school_lite_bottom_topbar_padding');
	if($driving_school_lite_top_topbar_padding != false || $driving_school_lite_bottom_topbar_padding != false){
		$driving_school_lite_custom_css .='.topbar{';
			$driving_school_lite_custom_css .='padding-top: '.esc_html($driving_school_lite_top_topbar_padding).'px; padding-bottom: '.esc_html($driving_school_lite_bottom_topbar_padding).'px; ';
		$driving_school_lite_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$driving_school_lite_product_border = get_theme_mod('driving_school_lite_product_border',false);

	if($driving_school_lite_product_border == true){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$driving_school_lite_custom_css .='border: 1px solid '.esc_html($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_top = get_theme_mod('driving_school_lite_product_top_padding');
	$driving_school_lite_product_bottom = get_theme_mod('driving_school_lite_product_bottom_padding');
	$driving_school_lite_product_left = get_theme_mod('driving_school_lite_product_left_padding');
	$driving_school_lite_product_right = get_theme_mod('driving_school_lite_product_right_padding');
	if($driving_school_lite_product_top != false || $driving_school_lite_product_bottom != false || $driving_school_lite_product_left != false || $driving_school_lite_product_right != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$driving_school_lite_custom_css .='padding-top: '.esc_html($driving_school_lite_product_top).'px; padding-bottom: '.esc_html($driving_school_lite_product_bottom).'px; padding-left: '.esc_html($driving_school_lite_product_left).'px; padding-right: '.esc_html($driving_school_lite_product_right).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_border_radius = get_theme_mod('driving_school_lite_product_border_radius');
	if($driving_school_lite_product_border_radius != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$driving_school_lite_custom_css .='border-radius: '.esc_html($driving_school_lite_product_border_radius).'px;';
		$driving_school_lite_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$driving_school_lite_product_button_top = get_theme_mod('driving_school_lite_product_button_top_padding',10);
	$driving_school_lite_product_button_bottom = get_theme_mod('driving_school_lite_product_button_bottom_padding',10);
	$driving_school_lite_product_button_left = get_theme_mod('driving_school_lite_product_button_left_padding',15);
	$driving_school_lite_product_button_right = get_theme_mod('driving_school_lite_product_button_right_padding',15);
	if($driving_school_lite_product_button_top != false || $driving_school_lite_product_button_bottom != false || $driving_school_lite_product_button_left != false || $driving_school_lite_product_button_right != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$driving_school_lite_custom_css .='padding-top: '.esc_html($driving_school_lite_product_button_top).'px; padding-bottom: '.esc_html($driving_school_lite_product_button_bottom).'px; padding-left: '.esc_html($driving_school_lite_product_button_left).'px; padding-right: '.esc_html($driving_school_lite_product_button_right).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_button_border_radius = get_theme_mod('driving_school_lite_product_button_border_radius');
	if($driving_school_lite_product_button_border_radius != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$driving_school_lite_custom_css .='border-radius: '.esc_html($driving_school_lite_product_button_border_radius).'px;';
		$driving_school_lite_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$driving_school_lite_product_sale_top = get_theme_mod('driving_school_lite_product_sale_top_padding');
	$driving_school_lite_product_sale_bottom = get_theme_mod('driving_school_lite_product_sale_bottom_padding');
	$driving_school_lite_product_sale_left = get_theme_mod('driving_school_lite_product_sale_left_padding');
	$driving_school_lite_product_sale_right = get_theme_mod('driving_school_lite_product_sale_right_padding');
	if($driving_school_lite_product_sale_top != false || $driving_school_lite_product_sale_bottom != false || $driving_school_lite_product_sale_left != false || $driving_school_lite_product_sale_right != false){
		$driving_school_lite_custom_css .='.woocommerce span.onsale {';
			$driving_school_lite_custom_css .='padding-top: '.esc_html($driving_school_lite_product_sale_top).'px; padding-bottom: '.esc_html($driving_school_lite_product_sale_bottom).'px; padding-left: '.esc_html($driving_school_lite_product_sale_left).'px; padding-right: '.esc_html($driving_school_lite_product_sale_right).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_sale_border_radius = get_theme_mod('driving_school_lite_product_sale_border_radius',50);
	if($driving_school_lite_product_sale_border_radius != false){
		$driving_school_lite_custom_css .='.woocommerce span.onsale {';
			$driving_school_lite_custom_css .='border-radius: '.esc_html($driving_school_lite_product_sale_border_radius).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_menu_case = get_theme_mod('driving_school_lite_product_sale_position', 'Right');
	if($driving_school_lite_menu_case == 'Right' ){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$driving_school_lite_custom_css .=' left:auto; right:0;';
		$driving_school_lite_custom_css .='}';
	}elseif($driving_school_lite_menu_case == 'Left' ){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$driving_school_lite_custom_css .=' left:-10px; right:auto;';
		$driving_school_lite_custom_css .='}';
	}