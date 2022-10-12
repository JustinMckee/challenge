<?php
namespace jsl\newsletter;

class Customizer {

  public function footer($wp_customize) {

    $wp_customize->add_section('the_fine_print', array(
      'title'     => __('Footer'),
      'priority'  => 100,
      ));

    $wp_customize->add_setting('fine_print', array(
      'default'   => 'All Rights Reserved &copy; 2021. Website designed JSL Marketing & Web Design.',
    ));

    $wp_customize->add_control('fine_print', array(
      'type'    => 'text',
      'label'   => __('Fine print'),
      'section' => 'the_fine_print',
    ));

  }

  public function header($wp_customize) {

    $wp_customize->add_setting('jsl_text');

    $wp_customize->add_control('jsl_text', array(
      'type'    => 'text',
      'label'   => __('Text'),
      'section' => 'title_tagline',
      'priority' => 99,
    ));

    $wp_customize->add_setting('jsl_url');

    $wp_customize->add_control('jsl_url', array(
      'type'    => 'url',
      'label'   => __('Link'),
      'section' => 'title_tagline',
      'priority' => 100,
    ));

    $wp_customize->add_setting('jsl_text');

    $wp_customize->add_control('jsl_text', array(
      'type'    => 'text',
      'label'   => __('Text'),
      'section' => 'title_tagline',
      'priority' => 99,
    ));

  }

}
