<?php
/**
 * Welcome Screen Class
 */
class advance_Welcome {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {

		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'advance_welcome_register_menu' ) );

		

		
		
		/* load welcome screen */
		add_action( 'advance_welcome', array( $this, 'advance_welcome_getting_started' ),10 );
	
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 */
	public function advance_welcome_register_menu() {
		$advance_theme = wp_get_theme();
		$page_menu_title = esc_html__('About', 'advance').' '.$advance_theme->get( 'Name' );
		add_theme_page( $page_menu_title, $page_menu_title, 'edit_theme_options', 'advance-welcome', array( $this, 'advance_welcome_screen' ) );
	}

	/**
	 * Adds an admin notice upon successful activation.
	 */
	public function advance_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'advance_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 */
	public function advance_welcome_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( 'Welcome! Thank you for choosing Advance ! To fully take advantage of the best our theme can offer please make sure you visit our %swelcome page%s.', 'advance' ), '<a href="' . esc_url( admin_url( 'themes.php?page=advance-welcome' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=advance-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with advance ', 'advance' ); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Welcome screen content
	 */
	public function advance_welcome_screen() {
	
		?>

		
			<?php
			do_action( 'advance_welcome' ); ?>

		</div>
		<?php
	}
/**
	 * Getting started
	 */
	public function advance_welcome_getting_started() {
		require_once( get_template_directory() . '/inc/admin/welcome-screen/sections/getting-started.php' );
	}

	
}

$GLOBALS['advance_Welcome'] = new advance_Welcome();