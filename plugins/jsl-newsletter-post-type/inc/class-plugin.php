<?php
namespace jsl\newsletter;

class Plugin {


  public function __construct() {
    $this->load_dependencies();
		$this->define_admin_hooks();
  }

  public function load_dependencies() {

    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'inc/class-newsletters.php';
    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'inc/class-admin.php';
    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'inc/class-customizer.php';

  }

  public function define_admin_hooks() {

    $newsletters = new \jsl\newsletter\Newsletters();
    add_action('init', array($newsletters, 'create_custom_post_type'));

    $admin = new \jsl\newsletter\Admin();
    add_action( 'admin_init', array($admin, 'add_settings'));
    add_action( 'admin_menu', array($admin, 'add_options_page'));

    $customizer = new \jsl\newsletter\Customizer();
    add_action('customize_register', array($customizer, 'footer'));
    add_action('customize_register', array($customizer, 'header'));

  }

}
