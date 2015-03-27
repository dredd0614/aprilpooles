<?php

vc_map( array(
        'name' =>'Webnus ContactForm',
        'base' => 'contactform',
        "icon" => "webnus_contactform",
		"description" => "Contact form",
        'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        'params' => array(

						array(
							'type' => 'textfield',
							'heading' => __( 'Email Address', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'email',
							'value' => 'example@domain.com',
							'description' => __( 'Contact form receiver', 'WEBNUS_TEXT_DOMAIN')
						),

/*
						array(
							'type' => 'textfield',
							'heading' => __( 'Extra Field 1', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'field1',
							'value' => 'Field 1',
							'description' => __( 'Contact form Extra Field 1 title', 'WEBNUS_TEXT_DOMAIN')
						),
						array(
							'type' => 'textfield',
							'heading' => __( 'Extra Field 2', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'field2',
							'value' => 'Field 2',
							'description' => __( 'Contact form Extra Field 2 title', 'WEBNUS_TEXT_DOMAIN')
						),
 * 
 */
						array(
							'type' => 'dropdown',
							'heading' => __( 'Form type', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'type',
							'value' => array('Vertical'=>'1','Horizontal'=>'2'),
							'description' => __( 'Contact form type', 'WEBNUS_TEXT_DOMAIN')
						),
        ),
		
        
    ) );


?>