<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'telefono', 'Información de contacto', 'name_meta_callback', 'page', 'side', 'high' );
		add_meta_box( 'specs', 'Información de la industria', 'ifs_get_info_industry', 'industrias', 'side', 'high' );
		add_meta_box( 'specs', 'Información de soluciones', 'ifs_get_info_industry', 'soluciones', 'side', 'high' );

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function name_meta_callback($post){
		$phone = get_post_meta($post->ID, '_phone_meta', true);
		$email = get_post_meta($post->ID, '_email_meta', true);
		$social1 = get_post_meta($post->ID, '_linkedin_meta', true);
		$social2 = get_post_meta($post->ID, '_twitter_meta', true);
		echo "<label for='phone'><strong>Teléfono</strong></label><br>";
		echo "<input type='text' class='widefat' id='phone' name='_phone_meta' value='$phone'/></br>";
		echo "<em>Ingresa el número con lada</em><br><br>";

		echo "<label for='email'><strong>Email</strong></label><br>";
		echo "<input type='text' class='widefat' id='email' name='_email_meta' value='$email'/></br>";
		echo "<em>Ingresa un email de conatcto</em><br><br>";

		echo "<label for='social_1'><strong>LinkedIn</strong></label><br>";
		echo "<input type='text' class='widefat' id='social_1' name='_linkedin_meta' value='$social1'/></br>";
		echo "<em>Ingresa la dirección completa de la cuenta</em><br><br>";

		echo "<label for='social_2'><strong>Twitter</strong></label><br>";
		echo "<input type='text' class='widefat' id='social_2' name='_twitter_meta' value='$social2'/></br>";
		echo "<em>Ingresa la dirección completa de la cuenta</em><br><br>";
		
		wp_nonce_field(__FILE__, '_phone_meta_nonce');
		wp_nonce_field(__FILE__, '_email_meta_nonce');
		wp_nonce_field(__FILE__, '_linkedin_meta_nonce');
		wp_nonce_field(__FILE__, '_twitter_meta_nonce');
	}



	function ifs_get_info_industry($post){
		$spec1  = get_post_meta($post->ID, '_spec1_meta', true);
		$spec2  = get_post_meta($post->ID, '_spec2_meta', true);
		$spec3  = get_post_meta($post->ID, '_spec3_meta', true);
		$spec4  = get_post_meta($post->ID, '_spec4_meta', true);
		$spec5  = get_post_meta($post->ID, '_spec5_meta', true);
		$spec6  = get_post_meta($post->ID, '_spec6_meta', true);
		$spec7  = get_post_meta($post->ID, '_spec7_meta', true);
		$spec8  = get_post_meta($post->ID, '_spec8_meta', true);
		$spec9  = get_post_meta($post->ID, '_spec9_meta', true);
		$spec10 = get_post_meta($post->ID, '_spec10_meta', true);


		echo "<label for='spec1'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec1' name='_spec1_meta' value='$spec1'/></br>";

		echo "<label for='spec2'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec2' name='_spec2_meta' value='$spec2'/></br>";

		echo "<label for='spec3'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec3' name='_spec3_meta' value='$spec3'/></br>";

		echo "<label for='spec4'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec4' name='_spec4_meta' value='$spec4'/></br>";

		echo "<label for='spec5'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec5' name='_spec5_meta' value='$spec5'/></br>";

		echo "<label for='spec6'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec6' name='_spec6_meta' value='$spec6'/></br>";

		echo "<label for='spec7'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec7' name='_spec7_meta' value='$spec7'/></br>";

		echo "<label for='spec8'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec8' name='_spec8_meta' value='$spec8'/></br>";

		echo "<label for='spec9'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec9' name='_spec9_meta' value='$spec9'/></br>";

		echo "<label for='spec10'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec10' name='_spec10_meta' value='$spec10'/></br>";


		wp_nonce_field(__FILE__, '_spec1_meta_nonce');
		wp_nonce_field(__FILE__, '_spec2_meta_nonce');
		wp_nonce_field(__FILE__, '_spec3_meta_nonce');
		wp_nonce_field(__FILE__, '_spec4_meta_nonce');
		wp_nonce_field(__FILE__, '_spec5_meta_nonce');
		wp_nonce_field(__FILE__, '_spec6_meta_nonce');
		wp_nonce_field(__FILE__, '_spec7_meta_nonce');
		wp_nonce_field(__FILE__, '_spec8_meta_nonce');
		wp_nonce_field(__FILE__, '_spec9_meta_nonce');
		wp_nonce_field(__FILE__, '_spec10_meta_nonce');
	}



	function ifs_get_info_solutions($post){
		$spec1  = get_post_meta($post->ID, '_spec1_meta_s', true);
		$spec2  = get_post_meta($post->ID, '_spec2_meta_s', true);
		$spec3  = get_post_meta($post->ID, '_spec3_meta_s', true);
		$spec4  = get_post_meta($post->ID, '_spec4_meta_s', true);
		$spec5  = get_post_meta($post->ID, '_spec5_meta_s', true);
		$spec6  = get_post_meta($post->ID, '_spec6_meta_s', true);
		$spec7  = get_post_meta($post->ID, '_spec7_meta_s', true);
		$spec8  = get_post_meta($post->ID, '_spec8_meta_s', true);
		$spec9  = get_post_meta($post->ID, '_spec9_meta_s', true);
		$spec10 = get_post_meta($post->ID, '_spec10_meta_s', true);


		echo "<label for='spec1'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec1' name='_spec1_meta_s' value='$spec1'/></br>";

		echo "<label for='spec2'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec2' name='_spec2_meta_s' value='$spec2'/></br>";

		echo "<label for='spec3'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec3' name='_spec3_meta_s' value='$spec3'/></br>";

		echo "<label for='spec4'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec4' name='_spec4_meta_s' value='$spec4'/></br>";

		echo "<label for='spec5'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec5' name='_spec5_meta_s' value='$spec5'/></br>";

		echo "<label for='spec6'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec6' name='_spec6_meta_s' value='$spec6'/></br>";

		echo "<label for='spec7'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec7' name='_spec7_meta_s' value='$spec7'/></br>";

		echo "<label for='spec8'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec8' name='_spec8_meta_s' value='$spec8'/></br>";

		echo "<label for='spec9'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec9' name='_spec9_meta_s' value='$spec9'/></br>";

		echo "<label for='spec10'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec10' name='_spec10_meta_s' value='$spec10'/></br>";


		wp_nonce_field(__FILE__, '_spec1_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec2_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec3_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec4_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec5_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec6_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec7_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec8_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec9_meta_s_nonce');
		wp_nonce_field(__FILE__, '_spec10_meta_s_nonce');

	}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////

	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if ( isset($_POST['_phone_meta']) and check_admin_referer(__FILE__, '_phone_meta_nonce') ){
			update_post_meta($post_id, '_phone_meta', $_POST['_phone_meta']);
		}

		if ( isset($_POST['_email_meta']) and check_admin_referer(__FILE__, '_email_meta_nonce') ){
			update_post_meta($post_id, '_email_meta', $_POST['_email_meta']);
		}

		if ( isset($_POST['_linkedin_meta']) and check_admin_referer(__FILE__, '_linkedin_meta_nonce') ){
			update_post_meta($post_id, '_linkedin_meta', $_POST['_linkedin_meta']);
		}

		if ( isset($_POST['_twitter_meta']) and check_admin_referer(__FILE__, '_twitter_meta_nonce') ){
			update_post_meta($post_id, '_twitter_meta', $_POST['_twitter_meta']);
		}


		/*
		 * INDUSTRIAS
		*/

		if ( isset($_POST['_spec1_meta']) and check_admin_referer(__FILE__, '_spec1_meta_nonce') ){
			update_post_meta($post_id, '_spec1_meta', $_POST['_spec1_meta']);
		}

		if ( isset($_POST['_spec2_meta']) and check_admin_referer(__FILE__, '_spec2_meta_nonce') ){
			update_post_meta($post_id, '_spec2_meta', $_POST['_spec2_meta']);
		}

		if ( isset($_POST['_spec3_meta']) and check_admin_referer(__FILE__, '_spec3_meta_nonce') ){
			update_post_meta($post_id, '_spec3_meta', $_POST['_spec3_meta']);
		}

		if ( isset($_POST['_spec4_meta']) and check_admin_referer(__FILE__, '_spec4_meta_nonce') ){
			update_post_meta($post_id, '_spec4_meta', $_POST['_spec4_meta']);
		}

		if ( isset($_POST['_spec5_meta']) and check_admin_referer(__FILE__, '_spec5_meta_nonce') ){
			update_post_meta($post_id, '_spec5_meta', $_POST['_spec5_meta']);
		}

		if ( isset($_POST['_spec6_meta']) and check_admin_referer(__FILE__, '_spec6_meta_nonce') ){
			update_post_meta($post_id, '_spec6_meta', $_POST['_spec6_meta']);
		}

		if ( isset($_POST['_spec7_meta']) and check_admin_referer(__FILE__, '_spec7_meta_nonce') ){
			update_post_meta($post_id, '_spec7_meta', $_POST['_spec7_meta']);
		}

		if ( isset($_POST['_spec8_meta']) and check_admin_referer(__FILE__, '_spec8_meta_nonce') ){
			update_post_meta($post_id, '_spec8_meta', $_POST['_spec8_meta']);
		}

		if ( isset($_POST['_spec9_meta']) and check_admin_referer(__FILE__, '_spec9_meta_nonce') ){
			update_post_meta($post_id, '_spec9_meta', $_POST['_spec9_meta']);
		}

		if ( isset($_POST['_spec10_meta']) and check_admin_referer(__FILE__, '_spec10_meta_nonce') ){
			update_post_meta($post_id, '_spec10_meta', $_POST['_spec10_meta']);
		}




		/*
		 * SOLUCIONES
		*/
		if ( isset($_POST['_spec1_meta_s']) and check_admin_referer(__FILE__, '_spec1_meta_s_nonce') ){
			update_post_meta($post_id, '_spec1_meta_s', $_POST['_spec1_meta_s']);
		}

		if ( isset($_POST['_spec2_meta_s']) and check_admin_referer(__FILE__, '_spec2_meta_s_nonce') ){
			update_post_meta($post_id, '_spec2_meta_s', $_POST['_spec2_meta_s']);
		}

		if ( isset($_POST['_spec3_meta_s']) and check_admin_referer(__FILE__, '_spec3_meta_s_nonce') ){
			update_post_meta($post_id, '_spec3_meta_s', $_POST['_spec3_meta_s']);
		}

		if ( isset($_POST['_spec4_meta_s']) and check_admin_referer(__FILE__, '_spec4_meta_s_nonce') ){
			update_post_meta($post_id, '_spec4_meta_s', $_POST['_spec4_meta_s']);
		}

		if ( isset($_POST['_spec5_meta_s']) and check_admin_referer(__FILE__, '_spec5_meta_s_nonce') ){
			update_post_meta($post_id, '_spec5_meta_s', $_POST['_spec5_meta_s']);
		}

		if ( isset($_POST['_spec6_meta_s']) and check_admin_referer(__FILE__, '_spec6_meta_s_nonce') ){
			update_post_meta($post_id, '_spec6_meta_s', $_POST['_spec6_meta_s']);
		}

		if ( isset($_POST['_spec7_meta_s']) and check_admin_referer(__FILE__, '_spec7_meta_s_nonce') ){
			update_post_meta($post_id, '_spec7_meta_s', $_POST['_spec7_meta_s']);
		}

		if ( isset($_POST['_spec8_meta_s']) and check_admin_referer(__FILE__, '_spec8_meta_s_nonce') ){
			update_post_meta($post_id, '_spec8_meta_s', $_POST['_spec8_meta_s']);
		}

		if ( isset($_POST['_spec9_meta_s']) and check_admin_referer(__FILE__, '_spec9_meta_s_nonce') ){
			update_post_meta($post_id, '_spec9_meta_s', $_POST['_spec9_meta_s']);
		}

		if ( isset($_POST['_spec10_meta_s']) and check_admin_referer(__FILE__, '_spec10_meta_s_nonce') ){
			update_post_meta($post_id, '_spec10_meta_s', $_POST['_spec10_meta_s']);
		}



		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta');
		}*/

	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
