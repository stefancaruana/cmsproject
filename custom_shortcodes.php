<?php

//Add year to copyright tag
function year_shortcode(){
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');

//Add Instagram button to homepage
function button_shortcode1(){
  return '<a href="https://www.instagram.com/allmyfriendsarejpegs/" class="insta-button">
  Follow us on Instagram!
  </a>';
}
add_shortcode('instabutton', 'button_shortcode1');

//Shows user avatar in Account page
function shortcode_user_avatar($atts, $content = null) {
   extract( shortcode_atts( 
           array('id' => '0',), $atts 
                          ) 
           );

   return get_avatar( $user_id, 96 ); 
}
add_shortcode('avatar','shortcode_user_avatar');

//Outputs username of currently logged in user in Releases page
function show_loggedin_function( $atts ) {
	global $current_user, $user_login;
      	get_currentuserinfo();
	add_filter('widget_text', 'do_shortcode');
	return 'Welcome ' . $current_user->display_name . '!';
}
add_shortcode('show_loggedin_as', 'show_loggedin_function');

//Add link to Releases page to redirect to Specs page
function refReleases(){
  return '<a href="https://sc-smartphones3-85bd77.ingress-earth.easywp.com/json-test/">
  All announced devices will be added to the Specifications page. See now!
  </a>';
}
add_shortcode('releasesbutton', 'refReleases');

//Add "Back to top button" in Specs page
function salcodes_cta( $atts ) {
 $a = shortcode_atts( array(
 'link' => 'https://sc-smartphones3-85bd77.ingress-earth.easywp.com/json-test/',
 'id' => 'salcodes',
 'color' => 'Orange',
 'size' => '',
 'label' => 'SCROLL TO TOP',
 'target' => '_self'
 ), $atts );
 $output = '<p><a href="' . esc_url( $a['link'] ) . '" id="' . esc_attr( $a['id'] ) . '" class="button ' . esc_attr( $a['color'] ) . ' ' . esc_attr( $a['size'] ) . '" target="' . esc_attr($a['target']) . '">' . esc_attr( $a['label'] ) . '</a></p>';
 return $output;
}
add_shortcode( 'cta_button', 'salcodes_cta' );

//Direct users to specific category in About page
function appleredirect(){
  $apple = '<a href="https://sc-smartphones3-85bd77.ingress-earth.easywp.com/product-category/apple/">
  Browse Apple
  </a>';
	return $apple;
}
function oneplusredirect(){
  $oneplus = '<a href="https://sc-smartphones3-85bd77.ingress-earth.easywp.com/product-category/oneplus/">
  Browse OnePlus
  </a>';
	return $oneplus;
}
function samsungredirect(){
  $samsung = '<a href="https://sc-smartphones3-85bd77.ingress-earth.easywp.com/product-category/samsung/">
  Browse Samsung
  </a>';
	return $samsung;
}
add_shortcode('apple-button', 'appleredirect');
add_shortcode('oneplus-button', 'oneplusredirect');
add_shortcode('samsung-button', 'samsungredirect');

?>
