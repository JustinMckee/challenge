<?php

/**
 * Plugin Name: JSL Gutenberg Blocks
 * Description: Showcase your skills and experience with web development
 * Version: 1.0
 * Author: Justin McKee <thisisjustinmckee@gmail.com>
 * Author URI: https://www.linkedin.com/in/justin-mckee/
 *


 /**
 *
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
 define( 'JSL_GUTENBERG_VER', '1.0.0' );

 /**
 * The core plugin class that is used to define
 * admin-specific hooks, and public-facing site hooks.
 */
 require plugin_dir_path( __FILE__ ) . 'inc/class-plugin.php';

 /**
 * Begins execution of the plugin.
 *
 */
 function run_jsl_gutenberg_plugin() {

 $plugin = new \jsl\gutenberg\Plugin();

 }
 run_jsl_gutenberg_plugin();
