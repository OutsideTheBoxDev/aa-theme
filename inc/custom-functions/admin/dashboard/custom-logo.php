<?php 
// Adding custom logo uploader function
function footer_logo($wp_customize) {
	// add a setting 
	$wp_customize->add_setting('footer_logo');
	// Add a control to upload the hover logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize, 'footerlogo', array(
					'label' => 'Footer Logo',
					'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
					'settings' => 'footer_logo',
					'priority' => 8 // show it just below the custom-logo
				)
			)
		);
        		
	}
add_action('customize_register', 'footer_logo');
?>