<?php
namespace jsl\gutenberg;

class Blocks {

  private $blocks = array(
    'feed',
    'media-bundle',
    'simple-text',
  );

  private $block_categories = array(
    array(
      'slug' => 'jsl',
      'title' => 'JSL',
    ),
  );

  public function register_blocks() {


    foreach ($this->blocks as $block) {

      register_block_type_from_metadata( plugin_dir_path(__DIR__) . "build/${block}");

    }

  }

  public function register_block_categories($categories) {

    foreach($this->block_categories as $cat) {
      array_unshift($categories, $cat);
    }

    return $categories;

  }

  public function theme_support() {
    add_theme_support( 'align-wide' );
  }

}
