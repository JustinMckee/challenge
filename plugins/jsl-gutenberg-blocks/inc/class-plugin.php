<?php
namespace jsl\gutenberg;

class Plugin {

  public function __construct() {
    $this->load_dependencies();
		$this->define_admin_hooks();
  }

  public function load_dependencies() {

    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'inc/class-blocks.php';

  }

  public function define_admin_hooks() {

    $blocks = new Blocks();

    add_action('init', array($blocks, 'register_blocks'));

    add_action('init', array($blocks, 'theme_support'));

    add_filter('block_categories_all', array($blocks, 'register_block_categories'));

  }

}
