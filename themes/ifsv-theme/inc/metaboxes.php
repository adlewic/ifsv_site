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
		$_spec1_arr_meta  = get_post_meta($post->ID, '_spec1_arr_meta', true);

		$count = 0;
		foreach ($_spec1_arr_meta as $key => $value) {
			switch ($count) {
			    case 0:
			        $title_meta_1 = $key;
			        $desc_meta_1 = $value;
			        break;
			    case 1:
			        $title_meta_2 = $key;
			        $desc_meta_2 = $value;
			        break;
			    case 2:
			        $title_meta_3 = $key;
			        $desc_meta_3 = $value;
			        break;
			    case 3:
			        $title_meta_4 = $key;
			        $desc_meta_4 = $value;
			        break;
			    case 4:
			        $title_meta_5 = $key;
			        $desc_meta_5 = $value;
			        break;
			    default:
			    $title_meta_1 = ''; $desc_meta_1 = '';
			    $title_meta_2 = ''; $desc_meta_2 = '';
			    $title_meta_3 = ''; $desc_meta_3 = '';
			    $title_meta_4 = ''; $desc_meta_4 = '';
			    $title_meta_5 = ''; $desc_meta_5 = '';

			}
			$count ++;
		}

		echo "<label for='spec1_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec1_t' name='_spec1_title' value='$title_meta_1' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec1_d' name='_spec1_desc' placeholder='Descripción'>$desc_meta_1</textarea></br>";

		echo "<label for='spec2_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec2_t' name='_spec2_title' value='$title_meta_2' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec2_d' name='_spec2_desc' placeholder='Descripción'>$desc_meta_2</textarea></br>";

		echo "<label for='spec3_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec3_t' name='_spec3_title' value='$title_meta_3' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec3_d' name='_spec3_desc' placeholder='Descripción'>$desc_meta_3</textarea></br>";

		echo "<label for='spec4_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec4_t' name='_spec4_title' value='$title_meta_4' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec4_d' name='_spec4_desc' placeholder='Descripción'>$desc_meta_4</textarea></br>";

		echo "<label for='spec5_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec5_t' name='_spec5_title' value='$title_meta_5' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec5_d' name='_spec5_desc' placeholder='Descripción'>$desc_meta_5</textarea></br>";



		wp_nonce_field(__FILE__, '_spec1_arr_meta_nonce');
		
	}



	function ifs_get_info_solutions($post){
		$_spec1_arr_meta  = get_post_meta($post->ID, '_spec1_arr_meta_s', true);
		$_spec2_arr_meta  = get_post_meta($post->ID, '_spec2_arr_meta_s', true);
		$_spec3_arr_meta  = get_post_meta($post->ID, '_spec3_arr_meta_s', true);
		$_spec4_arr_meta  = get_post_meta($post->ID, '_spec4_arr_meta_s', true);
		$_spec5_arr_meta  = get_post_meta($post->ID, '_spec5_arr_meta_s', true);


		$title_meta1 = ''; $desc_meta1 = '';
		if($_spec1_arr_meta){
			foreach ($_spec1_arr_meta as $key1 => $value1) {$title_meta1 = $key1;$desc_meta1 = $value1;}
		}
		echo "<label for='spec1_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec1_t' name='_spec1_title_s' value='$title_meta1' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec1_d' name='_spec1_desc_s' placeholder='Descripción'>$desc_meta1</textarea></br>";

		$title_meta2 = ''; $desc_meta2 = '';
		if($_spec2_arr_meta){
			foreach ($_spec2_arr_meta as $key2 => $value2) {$title_meta2 = $key2;$desc_meta2 = $value2;}
		}
		echo "<label for='spec2_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec2_t' name='_spec2_title_s' value='$title_meta2' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec2_d' name='_spec2_desc_s' placeholder='Descripción'>$desc_meta2</textarea></br>";

		$title_meta3 = ''; $desc_meta3 = '';
		if($_spec3_arr_meta){
			foreach ($_spec3_arr_meta as $key3 => $value3) {$title_meta3 = $key3;$desc_meta3 = $value3;}
		}
		echo "<label for='spec3_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec3_t' name='_spec3_title_s' value='$title_meta3' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec3_d' name='_spec3_desc_s' placeholder='Descripción'>$desc_meta3</textarea></br>";

		$title_meta4 = ''; $desc_meta4 = '';
		if($_spec4_arr_meta){
			foreach ($_spec4_arr_meta as $key4 => $value4) {$title_meta4 = $key4;$desc_meta4 = $value4;}
		}
		echo "<label for='spec4_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec4_t' name='_spec4_title_s' value='$title_meta4' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec4_d' name='_spec4_desc_s' placeholder='Descripción'>$desc_meta4</textarea></br>";

		$title_meta5 = ''; $desc_meta5 = '';
		if($_spec5_arr_meta){
			foreach ($_spec5_arr_meta as $key5 => $value5) {$title_meta5 = $key5;$desc_meta5 = $value5;}
		}
		echo "<label for='spec5_t'><strong>Especificación</strong></label><br>";
		echo "<input type='text' class='widefat' id='spec5_t' name='_spec5_title_s' value='$title_meta5' placeholder='Nombre' /></br>";
		echo "<textarea type='text' class='widefat' id='spec5_d' name='_spec5_desc_s' placeholder='Descripción'>$desc_meta5</textarea></br>";



		wp_nonce_field(__FILE__, '_spec1_arr_meta_nonce');
		wp_nonce_field(__FILE__, '_spec2_arr_meta_nonce');
		wp_nonce_field(__FILE__, '_spec3_arr_meta_nonce');
		wp_nonce_field(__FILE__, '_spec4_arr_meta_nonce');
		wp_nonce_field(__FILE__, '_spec5_arr_meta_nonce');

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

		if ( isset($_POST['_spec1_title']) && isset($_POST['_spec1_desc']) && isset($_POST['_spec2_title']) && isset($_POST['_spec2_desc']) && isset($_POST['_spec3_title']) && isset($_POST['_spec3_desc']) && isset($_POST['_spec4_title']) && isset($_POST['_spec4_desc']) && isset($_POST['_spec5_title']) && isset($_POST['_spec5_desc']) ){
			$arr_meta1 = array(
				$_POST['_spec1_title']=>$_POST['_spec1_desc'],
				$_POST['_spec2_title']=>$_POST['_spec2_desc'],
				$_POST['_spec3_title']=>$_POST['_spec3_desc'],
				$_POST['_spec4_title']=>$_POST['_spec4_desc'],
				$_POST['_spec5_title']=>$_POST['_spec5_desc'],
				);
			update_post_meta($post_id, '_spec1_arr_meta', $arr_meta1);
		}

		// if ( isset($_POST['_spec2_title']) && isset($_POST['_spec2_desc']) ){
		// 	$arr_meta2 = array($_POST['_spec2_title']=>$_POST['_spec2_desc']);
		// 	update_post_meta($post_id, '_spec2_arr_meta', $arr_meta2);
		// }

		// if ( isset($_POST['_spec3_title']) && isset($_POST['_spec3_desc']) ){
		// 	$arr_meta3 = array($_POST['_spec3_title']=>$_POST['_spec3_desc']);
		// 	update_post_meta($post_id, '_spec3_arr_meta', $arr_meta3);
		// }

		// if ( isset($_POST['_spec4_title']) && isset($_POST['_spec4_desc']) ){
		// 	$arr_meta4 = array($_POST['_spec4_title']=>$_POST['_spec4_desc']);
		// 	update_post_meta($post_id, '_spec4_arr_meta', $arr_meta4);
		// }

		// if ( isset($_POST['_spec5_title']) && isset($_POST['_spec5_desc']) ){
		// 	$arr_meta5 = array($_POST['_spec5_title']=>$_POST['_spec5_desc']);
		// 	update_post_meta($post_id, '_spec5_arr_meta', $arr_meta5);
		// }





		/*
		 * SOLUCIONES
		*/

		if ( isset($_POST['_spec1_title_s']) && isset($_POST['_spec1_desc_s']) ){
			$arr_meta1 = array($_POST['_spec1_title_s']=>$_POST['_spec1_desc_s']);
			update_post_meta($post_id, '_spec1_arr_meta_s', $arr_meta1);
		}

		if ( isset($_POST['_spec2_title_s']) && isset($_POST['_spec2_desc_s']) ){
			$arr_meta2 = array($_POST['_spec2_title_s']=>$_POST['_spec2_desc_s']);
			update_post_meta($post_id, '_spec2_arr_meta_s', $arr_meta2);
		}

		if ( isset($_POST['_spec3_title_s']) && isset($_POST['_spec3_desc_s']) ){
			$arr_meta3 = array($_POST['_spec3_title_s']=>$_POST['_spec3_desc_s']);
			update_post_meta($post_id, '_spec3_arr_meta_s', $arr_meta3);
		}

		if ( isset($_POST['_spec4_title_s']) && isset($_POST['_spec4_desc_s']) ){
			$arr_meta4 = array($_POST['_spec4_title_s']=>$_POST['_spec4_desc_s']);
			update_post_meta($post_id, '_spec4_arr_meta_s', $arr_meta4);
		}

		if ( isset($_POST['_spec5_title_s']) && isset($_POST['_spec5_desc_s']) ){
			$arr_meta5 = array($_POST['_spec5_title_s']=>$_POST['_spec5_desc_s']);
			update_post_meta($post_id, '_spec5_arr_meta_s', $arr_meta5);
		}



		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta');
		}*/

	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
