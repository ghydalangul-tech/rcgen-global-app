<?php
/**
 * RCGEN Theme Functions
 *
 * @package rcgen-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ─── Theme Setup ─────────────────────────────────────────────────────────────

function rcgen_theme_setup() {
	load_theme_textdomain( 'rcgen-theme', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
		'gallery', 'caption', 'style', 'script',
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Custom image sizes
	add_image_size( 'rcgen-card', 600, 400, true );
	add_image_size( 'rcgen-hero', 1600, 900, true );
	add_image_size( 'rcgen-blog', 800, 500, true );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'rcgen-theme' ),
		'footer'  => __( 'Footer Navigation',  'rcgen-theme' ),
	) );
}
add_action( 'after_setup_theme', 'rcgen_theme_setup' );

// ─── Enqueue Scripts & Styles ─────────────────────────────────────────────────

function rcgen_enqueue_assets() {
	// Google Fonts
	wp_enqueue_style(
		'rcgen-fonts',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700&display=swap',
		array(),
		null
	);

	// Main theme stylesheet
	wp_enqueue_style(
		'rcgen-style',
		get_stylesheet_uri(),
		array( 'rcgen-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	// Main JS (defer)
	wp_enqueue_script(
		'rcgen-main',
		get_template_directory_uri() . '/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Pass data to JS
	wp_localize_script( 'rcgen-main', 'rcgenData', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'rcgen-nonce' ),
	) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rcgen_enqueue_assets' );

// ─── Widget Areas ─────────────────────────────────────────────────────────────

function rcgen_register_sidebars() {
	// Only register a proper footer widget area — NOT the blog sidebar on homepage
	register_sidebar( array(
		'name'          => __( 'Footer: About RCGEN', 'rcgen-theme' ),
		'id'            => 'footer-about',
		'description'   => __( 'First footer column.', 'rcgen-theme' ),
		'before_widget' => '<div class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer: Quick Links', 'rcgen-theme' ),
		'id'            => 'footer-links',
		'description'   => __( 'Second footer column.', 'rcgen-theme' ),
		'before_widget' => '<div class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Intentionally NOT registering an old-style "sidebar" widget area
	// to prevent the Archives/Categories/Search/Recent Posts from appearing on the homepage.
}
add_action( 'widgets_init', 'rcgen_register_sidebars' );

// ─── Custom Post Types ────────────────────────────────────────────────────────

function rcgen_register_post_types() {
	// Events
	register_post_type( 'rcgen_event', array(
		'labels'  => array(
			'name'          => __( 'Events',    'rcgen-theme' ),
			'singular_name' => __( 'Event',     'rcgen-theme' ),
			'add_new_item'  => __( 'Add Event', 'rcgen-theme' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-calendar-alt',
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'rewrite'      => array( 'slug' => 'events' ),
	) );

	// Testimonials
	register_post_type( 'rcgen_testimonial', array(
		'labels'  => array(
			'name'          => __( 'Testimonials',       'rcgen-theme' ),
			'singular_name' => __( 'Testimonial',        'rcgen-theme' ),
			'add_new_item'  => __( 'Add Testimonial',    'rcgen-theme' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-format-quote',
		'supports'     => array( 'title', 'editor', 'thumbnail' ),
	) );
}
add_action( 'init', 'rcgen_register_post_types' );

// ─── Custom Taxonomies ────────────────────────────────────────────────────────

function rcgen_register_taxonomies() {
	register_taxonomy( 'organisation', array( 'post', 'rcgen_event' ), array(
		'labels'       => array(
			'name'          => __( 'Organisations', 'rcgen-theme' ),
			'singular_name' => __( 'Organisation',  'rcgen-theme' ),
		),
		'hierarchical' => true,
		'public'       => true,
		'show_in_rest' => true,
		'rewrite'      => array( 'slug' => 'organisation' ),
	) );
}
add_action( 'init', 'rcgen_register_taxonomies' );

// ─── Event Meta Boxes ─────────────────────────────────────────────────────────

function rcgen_event_meta_boxes() {
	add_meta_box(
		'rcgen_event_details',
		__( 'Event Details', 'rcgen-theme' ),
		'rcgen_event_details_callback',
		'rcgen_event',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'rcgen_event_meta_boxes' );

function rcgen_event_details_callback( $post ) {
	wp_nonce_field( 'rcgen_event_details', 'rcgen_event_nonce' );

	$date     = get_post_meta( $post->ID, '_event_date',     true );
	$time     = get_post_meta( $post->ID, '_event_time',     true );
	$location = get_post_meta( $post->ID, '_event_location', true );

	echo '<table class="form-table">';
	echo '<tr><th><label for="event_date">' . esc_html__( 'Date', 'rcgen-theme' ) . '</label></th>';
	echo '<td><input type="date" id="event_date" name="event_date" value="' . esc_attr( $date ) . '" /></td></tr>';
	echo '<tr><th><label for="event_time">' . esc_html__( 'Time', 'rcgen-theme' ) . '</label></th>';
	echo '<td><input type="time" id="event_time" name="event_time" value="' . esc_attr( $time ) . '" /></td></tr>';
	echo '<tr><th><label for="event_location">' . esc_html__( 'Location', 'rcgen-theme' ) . '</label></th>';
	echo '<td><input type="text" id="event_location" name="event_location" value="' . esc_attr( $location ) . '" placeholder="' . esc_attr__( 'e.g. Vrygrond Community Centre, Cape Town', 'rcgen-theme' ) . '" style="width:100%" /></td></tr>';
	echo '</table>';
}

function rcgen_save_event_meta( $post_id ) {
	if ( ! isset( $_POST['rcgen_event_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['rcgen_event_nonce'], 'rcgen_event_details' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$fields = array( 'event_date', 'event_time', 'event_location' );
	foreach ( $fields as $field ) {
		if ( isset( $_POST[ $field ] ) ) {
			update_post_meta( $post_id, '_' . $field, sanitize_text_field( $_POST[ $field ] ) );
		}
	}
}
add_action( 'save_post_rcgen_event', 'rcgen_save_event_meta' );

// ─── Helper: Get upcoming events ─────────────────────────────────────────────

function rcgen_get_upcoming_events( $limit = 3 ) {
	$today = date( 'Y-m-d' );
	$args  = array(
		'post_type'      => 'rcgen_event',
		'posts_per_page' => $limit,
		'meta_key'       => '_event_date',
		'orderby'        => 'meta_value',
		'order'          => 'ASC',
		'meta_query'     => array(
			array(
				'key'     => '_event_date',
				'value'   => $today,
				'compare' => '>=',
				'type'    => 'DATE',
			),
		),
	);

	return new WP_Query( $args );
}

// ─── Fix: Remove blog sidebar from front page ─────────────────────────────────

function rcgen_remove_homepage_sidebar() {
	if ( is_front_page() || is_home() ) {
		// Unregister the default sidebar widget areas that leak into the footer
		unregister_sidebar( 'sidebar-1' );
	}
}
add_action( 'widgets_init', 'rcgen_remove_homepage_sidebar', 99 );

// ─── SEO: Dynamic page title ──────────────────────────────────────────────────

function rcgen_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	$title .= get_bloginfo( 'name' );
	$site_desc = get_bloginfo( 'description', 'display' );
	if ( $site_desc && ( is_home() || is_front_page() ) ) {
		$title .= " $sep " . $site_desc;
	}
	return $title;
}
add_filter( 'wp_title', 'rcgen_wp_title', 10, 2 );

// ─── Body class: add 'front-page' class ──────────────────────────────────────

function rcgen_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-front-page';
	}
	if ( is_singular() ) {
		$classes[] = 'is-singular';
	}
	return $classes;
}
add_filter( 'body_class', 'rcgen_body_classes' );

// ─── Contact form AJAX handler ────────────────────────────────────────────────

function rcgen_handle_contact_form() {
	check_ajax_referer( 'rcgen-nonce', 'nonce' );

	$name    = sanitize_text_field( $_POST['name']    ?? '' );
	$email   = sanitize_email( $_POST['email']        ?? '' );
	$subject = sanitize_text_field( $_POST['subject'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );

	if ( ! $name || ! is_email( $email ) || ! $message ) {
		wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'rcgen-theme' ) ) );
	}

	$to      = get_option( 'admin_email' );
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'From: ' . $name . ' <' . $email . '>',
		'Reply-To: ' . $email,
	);

	$body  = "Name: $name\n";
	$body .= "Email: $email\n\n";
	$body .= "Message:\n$message\n";

	$sent = wp_mail( $to, '[RCGEN] ' . ( $subject ?: 'New Contact Form Message' ), $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => __( 'Thank you! Your message has been sent.', 'rcgen-theme' ) ) );
	} else {
		wp_send_json_error( array( 'message' => __( 'Sorry, there was an error sending your message.', 'rcgen-theme' ) ) );
	}
}
add_action( 'wp_ajax_rcgen_contact',        'rcgen_handle_contact_form' );
add_action( 'wp_ajax_nopriv_rcgen_contact', 'rcgen_handle_contact_form' );

// ─── Excerpt length ───────────────────────────────────────────────────────────

function rcgen_excerpt_length( $length ) {
	return is_admin() ? $length : 22;
}
add_filter( 'excerpt_length', 'rcgen_excerpt_length', 999 );

function rcgen_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'rcgen_excerpt_more' );

// ─── Theme Customizer ─────────────────────────────────────────────────────────

function rcgen_customizer( $wp_customize ) {
	// Section: RCGEN Options
	$wp_customize->add_section( 'rcgen_options', array(
		'title'    => __( 'RCGEN Theme Options', 'rcgen-theme' ),
		'priority' => 30,
	) );

	// Hero headline
	$wp_customize->add_setting( 'hero_headline', array(
		'default'           => 'Building Hope. Transforming Lives. Empowering Communities.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'hero_headline', array(
		'label'   => __( 'Hero Headline', 'rcgen-theme' ),
		'section' => 'rcgen_options',
		'type'    => 'text',
	) );

	// Hero subtext
	$wp_customize->add_setting( 'hero_subtext', array(
		'default'           => 'Serving the Vrygrond community through faith, education, and care.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'hero_subtext', array(
		'label'   => __( 'Hero Subtext', 'rcgen-theme' ),
		'section' => 'rcgen_options',
		'type'    => 'text',
	) );

	// Contact phone
	$wp_customize->add_setting( 'contact_phone', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'contact_phone', array(
		'label'   => __( 'Contact Phone', 'rcgen-theme' ),
		'section' => 'rcgen_options',
		'type'    => 'text',
	) );

	// Contact email
	$wp_customize->add_setting( 'contact_email', array(
		'default'           => 'info@rcgen.org.za',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'contact_email', array(
		'label'   => __( 'Contact Email', 'rcgen-theme' ),
		'section' => 'rcgen_options',
		'type'    => 'email',
	) );
}
add_action( 'customize_register', 'rcgen_customizer' );

// ─── Prevent Bizberg theme sidebar on front page ──────────────────────────────
// Some Bizberg theme hooks that push a sidebar into the footer area are filtered here.

function rcgen_disable_bizberg_sidebar_on_front() {
	if ( is_front_page() || is_home() ) {
		remove_action( 'bizberg_after_footer', 'bizberg_footer_sidebar', 10 );
		remove_action( 'bizberg_footer',       'bizberg_footer_sidebar', 10 );
	}
}
add_action( 'template_redirect', 'rcgen_disable_bizberg_sidebar_on_front' );

// ─── Custom walker for nav menu (supports dropdowns) ─────────────────────────

class RCGEN_Nav_Walker extends Walker_Nav_Menu {

	/** Open <li> */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n{$indent}<ul class=\"sub-menu\" aria-hidden=\"true\">\n";
	}

	/** Close </li> */
	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "{$indent}</ul>\n";
	}

	/** Output each <li><a> */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[]    = 'menu-item-' . $item->ID;
		$has_children = in_array( 'menu-item-has-children', $classes );

		$li_classes = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$output    .= '<li class="' . esc_attr( $li_classes ) . '">';

		// Link attributes
		$atts = array(
			'href'  => $item->url,
			'class' => '',
		);
		if ( $item->attr_title ) {
			$atts['title'] = $item->attr_title;
		}
		if ( $item->target ) {
			$atts['target'] = $item->target;
			if ( '_blank' === $item->target ) {
				$atts['rel'] = 'noopener noreferrer';
			}
		}

		// Special link classes
		$title_lower = strtolower( $item->title );
		if ( strpos( $title_lower, 'donate' ) !== false ) {
			$atts['class'] = 'nav-donate';
		}
		if ( in_array( 'current-menu-item', $classes ) || in_array( 'current_page_item', $classes ) ) {
			$atts['class'] .= ' current';
		}
		if ( $has_children && $depth === 0 ) {
			$atts['aria-haspopup'] = 'true';
			$atts['aria-expanded'] = 'false';
			$atts['class']        .= ' has-dropdown';
		}

		$atts     = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
		$attr_str = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) || $value === '' ) {
				$attr_str .= ' ' . $attr . '="' . esc_attr( trim( $value ) ) . '"';
			}
		}

		$title   = apply_filters( 'the_title', $item->title, $item->ID );
		$output .= '<a' . $attr_str . '>' . $title;
		if ( $has_children && $depth === 0 ) {
			$output .= ' <span class="dropdown-arrow" aria-hidden="true">&#x25BE;</span>';
		}
		$output .= '</a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= "</li>\n";
	}
}

// ─── Fallback nav (shown when no WP menu is assigned) ─────────────────────────

function rcgen_fallback_nav() {
	$current = trailingslashit( home_url( parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH ) ) );
	$home    = trailingslashit( home_url( '/' ) );

	$top_links = array(
		'/'            => __( 'Home',    'rcgen-theme' ),
		'/about'       => __( 'About',   'rcgen-theme' ),
		'/gallery'     => __( 'Gallery', 'rcgen-theme' ),
		'/blog'        => __( 'Blog',    'rcgen-theme' ),
		'/survey'      => __( 'Survey',  'rcgen-theme' ),
		'/contact'     => __( 'Contact', 'rcgen-theme' ),
		'/donate'      => __( 'Donate',  'rcgen-theme' ),
	);

	$org_links = array(
		'/rcgen'             => __( 'RCGEN (Church)',     'rcgen-theme' ),
		'/rcgen-educare'     => __( 'RCGEN Educare',      'rcgen-theme' ),
		'/rcgen-foundation'  => __( 'RCGEN Foundation',   'rcgen-theme' ),
		'/rcgen-group'       => __( 'RCGEN Group',        'rcgen-theme' ),
	);

	echo '<ul class="nav-menu">';

	foreach ( $top_links as $slug => $label ) {
		$url        = home_url( $slug );
		$is_current = ( trailingslashit( $url ) === $current );
		$class      = '';

		if ( strpos( $label, 'Donate' ) !== false ) {
			$class = 'nav-donate';
		}
		if ( $is_current ) {
			$class = trim( $class . ' current' );
		}

		// Insert the "Our 4 Organisations" dropdown before Gallery
		if ( '/gallery' === $slug ) {
			echo '<li class="menu-item menu-item-has-children">';
			echo '<a href="' . esc_url( home_url( '/organisations' ) ) . '" class="has-dropdown" aria-haspopup="true" aria-expanded="false">';
			echo esc_html__( 'Our Organisations', 'rcgen-theme' );
			echo ' <span class="dropdown-arrow" aria-hidden="true">&#x25BE;</span></a>';
			echo '<ul class="sub-menu" aria-hidden="true">';
			foreach ( $org_links as $os => $ol ) {
				$ourl  = home_url( $os );
				$ocur  = ( trailingslashit( $ourl ) === $current ) ? ' current' : '';
				echo '<li class="menu-item"><a href="' . esc_url( $ourl ) . '" class="' . esc_attr( trim( $ocur ) ) . '">' . esc_html( $ol ) . '</a></li>';
			}
			echo '</ul></li>';
		}

		$attr = $class ? ' class="' . esc_attr( $class ) . '"' : '';
		echo '<li class="menu-item"><a href="' . esc_url( $url ) . '"' . $attr . '>' . esc_html( $label ) . '</a></li>';
	}

	echo '</ul>';
}

// ─── Survey form AJAX handler ─────────────────────────────────────────────────

function rcgen_handle_survey() {
	check_ajax_referer( 'rcgen-nonce', 'nonce' );

	$name         = sanitize_text_field( $_POST['survey_name']      ?? '' );
	$area         = sanitize_text_field( $_POST['survey_area']      ?? '' );
	$service      = sanitize_text_field( $_POST['survey_service']   ?? '' );
	$heard        = sanitize_text_field( $_POST['survey_heard']     ?? '' );
	$feedback     = sanitize_textarea_field( $_POST['survey_feedback'] ?? '' );
	$volunteer    = sanitize_text_field( $_POST['survey_volunteer'] ?? '' );
	$email        = sanitize_email( $_POST['survey_email']          ?? '' );

	if ( ! $name || ! $area ) {
		wp_send_json_error( array( 'message' => __( 'Please fill in your name and area.', 'rcgen-theme' ) ) );
	}

	$to      = get_option( 'admin_email' );
	$subject = '[RCGEN Survey] New Community Survey Response';
	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( $email ) {
		$headers[] = 'Reply-To: ' . $email;
	}

	$body  = "RCGEN Community Survey Response\n";
	$body .= str_repeat( '─', 40 ) . "\n\n";
	$body .= "Full Name:          $name\n";
	$body .= "Area/Neighbourhood: $area\n";
	$body .= "Service used:       $service\n";
	$body .= "Heard about us via: $heard\n";
	$body .= "Willing to volunteer: $volunteer\n";
	$body .= "Email: " . ( $email ?: '(not provided)' ) . "\n\n";
	$body .= "How can we serve better:\n$feedback\n";

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => __( 'Thank you for your response! We value your feedback.', 'rcgen-theme' ) ) );
	} else {
		wp_send_json_error( array( 'message' => __( 'Sorry, we could not record your survey. Please try again.', 'rcgen-theme' ) ) );
	}
}
add_action( 'wp_ajax_rcgen_survey',        'rcgen_handle_survey' );
add_action( 'wp_ajax_nopriv_rcgen_survey', 'rcgen_handle_survey' );
