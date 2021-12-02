<?php
/**
 * Theme initial setup
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

if ( ! class_exists( 'Theme_Setup' ) ) :
	class Theme_Setup {
		/**
		 * Class instance.
		 *
		 * To hold an instance of the class
		 *
		 * @access private
		 * @var $instance Class instance.
		 */
		private static $instance;

		/**
		 * Initiator
		 *
		 * The singleton method
		 */
		public static function get_instance() {

			/**
			 * If an instance of a class is not set/created,
			 * create an instance of a class( instantiate is ) and
			 * store that class in $instance.
			 */
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
			add_action( 'after_setup_theme', array( $this, 'setup_content_width' ), 0 );
			add_action( 'init', array( $this, 'register_menu_locations' ) );
			// add_action( 'widgets_init', array( $this, 'register_widgets_init' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		}

		// Setup theme
		public function setup_theme() {
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'customize-selective-refresh-widgets' );
			add_theme_support( 'wp-block-styles' );
			add_theme_support( 'align-wide' );
			add_theme_support( 'custom-logo', array(
				'width'       => 250,
				'height'      => 250,
				'flex-width'  => true,
				'flex-height' => true,
			) );
		}

		// Set the $content_width global variable used by WordPress to set image dimennsions.
		public function setup_content_width() {
			global $content_width;

			if ( ! isset( $content_width ) ) {
				$content_width = apply_filters( 'content_width', 1200 );
			}
		}

		// Enqueue scripts and styles
		public function enqueue_scripts() {
			wp_enqueue_style( 'autoheaven-style', get_stylesheet_uri(), array(), THEME_VERSION );
			wp_enqueue_script( 'autoheaven-alpine', get_template_directory_uri() . '/js/alpine.js', array(), '3.3.2', true );

			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}

		// Register menus
		public function register_menu_locations() {
			register_nav_menus(
				array(
					'primary'			=> esc_html__( 'Primary Menu', 'autoheaven' ),
					'secondary'		=> esc_html__( 'Secondary Menu', 'autoheaven' ),
					// 'mobile_menu' => esc_html__( 'Off-Canvas Menu', 'autoheaven' ),
					// 'footer_menu' => esc_html__( 'Footer Menu', 'autoheaven' ),
				)
			);
		}

		// Register widget area
		// public function register_widgets_init() {}
	}
endif;

// Initialize class object with 'get_instance()' method
Theme_Setup::get_instance();
