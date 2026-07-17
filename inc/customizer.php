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
$wp_customize -> add_control(
    'vtheme_facebook',array(
        'label' => 'Facebook URL',
        'section' => 'vtheme_contact_section',
        'type' => 'url',
    )
);
$wp_customize -> add_setting(
    'vtheme_twitter',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize -> add_control(
    'vtheme_twitter',array(
        'label' => 'Twitter URL',
        'section' => 'vtheme_contact_section',
        'type' => 'url',
    )
);
$wp_customize -> add_setting(
    'vtheme_instagram',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize -> add_control(
    'vtheme_instagram',array(
        'label' => 'Instagram URL',
        'section' => 'vtheme_contact_section',
        'type' => 'url',
    )
);
$wp_customize -> add_setting(
    'vtheme_linkedin',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize -> add_control(
    'vtheme_linkedin',array(
        'label' => 'Linkedin URL',
        'section' => 'vtheme_contact_section',
        'type' => 'url',
    )
);
$wp_customize -> add_setting(
    'vtheme_location',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize -> add_control(
    'vtheme_location',array(
        'label' => 'Location Address',
        'section' => 'vtheme_contact_section',
        'type' => 'text',
    )
);
$wp_customize -> add_setting(
    'footer_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize -> add_control(
    'footer_text',array(
        'label' => 'Footer Text',
        'section' => 'vtheme_contact_section',
        'type' => 'text',
    )
);
$wp_customize->add_section(
    'vtheme_hero_section',
    array(
        'title'    => 'Hero Section',
        'priority' => 20,
    )
);
$wp_customize->add_setting(
    'hero_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'hero_title',
    array(
        'label'   => 'Hero Title',
        'section' => 'vtheme_hero_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'hero_subtitle',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);

$wp_customize->add_control(
    'hero_subtitle',
    array(
        'label'   => 'Hero Subtitle',
        'section' => 'vtheme_hero_section',
        'type'    => 'textarea',
    )
);
$wp_customize->add_setting(
    'hero_button_text',
    array(
        'default' => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'hero_button_text',
    array(
        'label'   => 'Button Text',
        'section' => 'vtheme_hero_section',
        'type'    => 'text',
    )
);

}

add_action( 'customize_register', 'vtheme_customize_register' );

?>