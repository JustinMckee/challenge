<?php
namespace jsl\newsletter;

class Newsletters {

  public function create_custom_post_type() {
    $args = array(
      'label'         => 'New Letters',
      'public'        => true,
      'heirarchical'  => false,
      'show_in_rest'  => true,
      'menu_position' => 20,
      'menu_icon'     => 'dashicons-media-text',
      'supports'      => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
    );
    $register = register_post_type( 'new-letters', $args);
    flush_rewrite_rules();


      if(is_wp_error($register)) {
        $error_string = $result->get_error_message();
        error_log($error_string);
      }

  }

}
