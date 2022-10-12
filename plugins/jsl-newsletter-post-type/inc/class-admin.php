<?php
namespace jsl\newsletter;

class Admin {

  public function add_options_page() {
    add_submenu_page(
        'edit.php?post_type=new-letters',
        __( 'Options' ),
        __( 'Options' ),
        'manage_options',
        'books-shortcode-ref',
        array($this, 'edit')
    );
    //add_options_page('JSL Options', 'Options', 'manage_options', 'options', array($this, 'edit'));
  }

  public function add_settings() {
    register_setting( 'the_fine_print',
    'the_fine_print',
    array(
      'type'      => 'string',
      'default'   => 'All Rights Reserved &copy; 2021. Website designed JSL Marketing & Web Design.',
    ));
  }

  public function edit() {
    if ( !current_user_can( 'manage_options' ) )  {
  		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  	}
    // @TODO create a template file and include it rather than the messy HEREDOC
    echo <<<EOF
    <div class="wrap">
    <h1>Options</h1>
    <form method="post" action="options.php">
    EOF;
    settings_fields( 'the_fine_print' );
    do_settings_sections( 'the_fine_print' );
    echo <<<EOF
    <tr valign="top">
    <th scope="row">The fine print</th>
    <td><input type="text" name="the_fine_print" value="
    EOF;
    echo esc_attr( get_option('the_fine_print') );
    echo <<<EOF
    " /></td>
    </tr>
    EOF;
    submit_button();
    echo <<<EOF
    </form>
    </div>
    EOF;

  }


}
?>
