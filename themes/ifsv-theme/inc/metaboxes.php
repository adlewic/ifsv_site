<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'telefono', 'Información de contacto', 'name_meta_callback', 'page', 'side', 'high' );

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

		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta');
		}*/

	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
