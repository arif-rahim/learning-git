<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';


function get_all_user()
	{
$args = array(
      'orderby' => 'ID',
      'order'   => 'ASC'
  );
  $users = get_users($args  );
  $i=0;//var_dump($users);
  foreach ( $users as $user )
  {
echo $user->user_email . ' : ' . $user->first_name . '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit
</button><br />';
    /*$DBRecord[$i]['role']           = "Subscriber";
    $DBRecord[$i]['WPId']           = $user->ID;
    $DBRecord[$i]['FirstName']      = $user->first_name;
    $DBRecord[$i]['LastName']       = $user->last_name;
    $DBRecord[$i]['RegisteredDate'] = $user->user_registered;
    $DBRecord[$i]['Email']          = $user->user_email;

    $UserData                       = get_user_meta( $user->ID );
    $DBRecord[$i]['Company']        = $UserData['billing_company'][0];
    $DBRecord[$i]['Address']        = $UserData['billing_address_1'][0];
    $DBRecord[$i]['City']           = $UserData['billing_city'][0];
    $DBRecord[$i]['State']          = $UserData['billing_state'][0];
    $DBRecord[$i]['PostCode']       = $UserData['billing_postcode'][0];
    $DBRecord[$i]['Country']        = $UserData['billing_country'][0];
    $DBRecord[$i]['Phone']          = $UserData['billing_phone'][0];*/
    $i++;
  }
  	}
  
 
 add_shortcode('get_mall_user', 'get_all_user');
	