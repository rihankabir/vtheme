<?php 

function vtheme_customize_register( $wp_customize ) {

$wp_customize -> add_section(
    'vtheme_contact_section',array(
        'title' => 'Contact_Information',
        'priority' => 30,
    )
);
$wp_customize -> add_setting(
    'vtheme_phone',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

}

add_action( 'customize_register', 'vtheme_customize_register' );

?>