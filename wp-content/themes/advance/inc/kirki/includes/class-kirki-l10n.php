<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'kirki';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'advance' ),
				'background-image'      => esc_attr__( 'Background Image', 'advance' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'advance' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'advance' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'advance' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'advance' ),
				'inherit'               => esc_attr__( 'Inherit', 'advance' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'advance' ),
				'cover'                 => esc_attr__( 'Cover', 'advance' ),
				'contain'               => esc_attr__( 'Contain', 'advance' ),
				'background-size'       => esc_attr__( 'Background Size', 'advance' ),
				'fixed'                 => esc_attr__( 'Fixed', 'advance' ),
				'scroll'                => esc_attr__( 'Scroll', 'advance' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'advance' ),
				'left-top'              => esc_attr__( 'Left Top', 'advance' ),
				'left-center'           => esc_attr__( 'Left Center', 'advance' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'advance' ),
				'right-top'             => esc_attr__( 'Right Top', 'advance' ),
				'right-center'          => esc_attr__( 'Right Center', 'advance' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'advance' ),
				'center-top'            => esc_attr__( 'Center Top', 'advance' ),
				'center-center'         => esc_attr__( 'Center Center', 'advance' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'advance' ),
				'background-position'   => esc_attr__( 'Background Position', 'advance' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'advance' ),
				'on'                    => esc_attr__( 'ON', 'advance' ),
				'off'                   => esc_attr__( 'OFF', 'advance' ),
				'all'                   => esc_attr__( 'All', 'advance' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'advance' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'advance' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'advance' ),
				'greek'                 => esc_attr__( 'Greek', 'advance' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'advance' ),
				'khmer'                 => esc_attr__( 'Khmer', 'advance' ),
				'latin'                 => esc_attr__( 'Latin', 'advance' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'advance' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'advance' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'advance' ),
				'arabic'                => esc_attr__( 'Arabic', 'advance' ),
				'bengali'               => esc_attr__( 'Bengali', 'advance' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'advance' ),
				'tamil'                 => esc_attr__( 'Tamil', 'advance' ),
				'telugu'                => esc_attr__( 'Telugu', 'advance' ),
				'thai'                  => esc_attr__( 'Thai', 'advance' ),
				'serif'                 => _x( 'Serif', 'font style', 'advance' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'advance' ),
				'monospace'             => _x( 'Monospace', 'font style', 'advance' ),
				'font-family'           => esc_attr__( 'Font Family', 'advance' ),
				'font-size'             => esc_attr__( 'Font Size', 'advance' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'advance' ),
				'line-height'           => esc_attr__( 'Line Height', 'advance' ),
				'font-style'            => esc_attr__( 'Font Style', 'advance' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'advance' ),
				'top'                   => esc_attr__( 'Top', 'advance' ),
				'bottom'                => esc_attr__( 'Bottom', 'advance' ),
				'left'                  => esc_attr__( 'Left', 'advance' ),
				'right'                 => esc_attr__( 'Right', 'advance' ),
				'center'                => esc_attr__( 'Center', 'advance' ),
				'justify'               => esc_attr__( 'Justify', 'advance' ),
				'color'                 => esc_attr__( 'Color', 'advance' ),
				'add-image'             => esc_attr__( 'Add Image', 'advance' ),
				'change-image'          => esc_attr__( 'Change Image', 'advance' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'advance' ),
				'add-file'              => esc_attr__( 'Add File', 'advance' ),
				'change-file'           => esc_attr__( 'Change File', 'advance' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'advance' ),
				'remove'                => esc_attr__( 'Remove', 'advance' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'advance' ),
				'variant'               => esc_attr__( 'Variant', 'advance' ),
				'subsets'               => esc_attr__( 'Subset', 'advance' ),
				'size'                  => esc_attr__( 'Size', 'advance' ),
				'height'                => esc_attr__( 'Height', 'advance' ),
				'spacing'               => esc_attr__( 'Spacing', 'advance' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'advance' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'advance' ),
				'light'                 => esc_attr__( 'Light 200', 'advance' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'advance' ),
				'book'                  => esc_attr__( 'Book 300', 'advance' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'advance' ),
				'regular'               => esc_attr__( 'Normal 400', 'advance' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'advance' ),
				'medium'                => esc_attr__( 'Medium 500', 'advance' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'advance' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'advance' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'advance' ),
				'bold'                  => esc_attr__( 'Bold 700', 'advance' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'advance' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'advance' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'advance' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'advance' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'advance' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'advance' ),
				'add-new'           	=> esc_attr__( 'Add new', 'advance' ),
				'row'           		=> esc_attr__( 'row', 'advance' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'advance' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'advance' ),
				'back'                  => esc_attr__( 'Back', 'advance' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'advance' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'advance' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'advance' ),
				'none'                  => esc_attr__( 'None', 'advance' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'advance' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'advance' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'advance' ),
				'initial'               => esc_attr__( 'Initial', 'advance' ),
				'select-page'           => esc_attr__( 'Select a Page', 'advance' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'advance' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'advance' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'advance' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'advance' ),
			);

			// Apply global changes from the kirki/config filter.
			// This is generally to be avoided.
			// It is ONLY provided here for backwards-compatibility reasons.
			// Please use the kirki/{$config_id}/l10n filter instead.
			$config = apply_filters( 'kirki/config', array() );
			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			// Apply l10n changes using the kirki/{$config_id}/l10n filter.
			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
