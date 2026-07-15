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
$wp_customize -> add_control(
'vtheme_phone',array(
    'label' => 'Phone Number',
    'section' => 'vtheme_contact_section',
    'type' => 'text',
)

);
$wp_customize -> add_setting(
    'vtheme_email',array(
        'default' => 'vtheme20@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    )
);
$wp_customize -> add_control(
'vtheme_email',array(
    'label' => 'Email Address',
    'section' => 'vtheme_contact_section',
    'type' => 'email',
)

);
$wp_customize -> add_setting(
    'vtheme_facebook',array(
        'default' => '',
         'sanitize_callback' => 'esc_url_raw',
    )
);

}

add_action( 'customize_register', 'vtheme_customize_register' );

?>