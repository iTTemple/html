<?php

/*-----------------------------------------------------------------------------------*/
/* = Function to get attachment id
/*-----------------------------------------------------------------------------------*/
// Helper function for vt_resize().

function max_get_attachment_id_from_src($img_src){	

	global $wpdb;
	
	$image_src = esc_url($img_src);
	
	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
	
	$img_id = $wpdb->get_var($query);
	
	return $img_id;
} 

/*
 * Resize images dynamically using wp built in functions
 * Victor Teixeira
 * Rewritten and adjusted from Dennis "doitmax" Osterkamp
 *
 * Requires php 5.2+
 *
 * Example usage:
 * 
 * <?php 
 * $thumb = get_post_thumbnail_id(); 
 * $image = vt_resize( $thumb, '', 140, 110, true );
 * ?>
 * <img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" />
 *
 * @param int $attach_id
 * @param string $img_url
 * @param int $width
 * @param int $height
 * @param bool $crop
 * @return array
 */
 function vt_resize( $attach_id = null, $img_url = null, $width, $height, $crop = false ) {
	
	//initialise variable to prevent wp_debug mode error.
	$file_path = '';
	$image_src[0] = '';
	$image_src[1] = '';
	$image_src[2] = '';
		
	// we use the attachment id if it is given.
	if ( $attach_id ) {
	
		$image_src = wp_get_attachment_image_src( $attach_id, 'full' );
		
		//file path will return abnormally if given attachment id is wrong.
		$file_path = get_attached_file( $attach_id );
				
	// if not use the image url to find the attachment ID!
	} else if ( $img_url ) {
		
		
		$attachment_id = max_get_attachment_id_from_src($img_url);
		$image_src_ed = wp_get_attachment_image_src( $attachment_id, 'full' );
		$get_file_path = get_attached_file( $attachment_id );
		
		//file path will return abnormally if given image url is wrong. 
		$file_path = $get_file_path;
		
		//echo "This is from image src ".$file_path."<br/>";
		
	    $orig_size = $image_src_ed;
		
		$image_src[0] = $orig_size[0];
		$image_src[1] = $orig_size[1];
		$image_src[2] = $orig_size[2];
									
	}
	
	// calculate proportional height	
	if(!$height || $height =="" || $height == 0){		
		$_w_perc = $width * 100 / $image_src[1];		
		$height = $image_src[2] * $_w_perc / 100;		
	}
	
	$file_info = pathinfo( $file_path );
	
	$extension = '.'. $file_info['extension'];

	// the image path without the extension
	$no_ext_path = $file_info['dirname'].'/'.$file_info['filename'];
	
	$cropped_img_path = $no_ext_path.'-'.$width.'x'.$height.$extension;

	// checking if the file size is larger than the target size
	// if it is smaller or the same size, stop right here and return
	if ( $image_src[1] > $width || $image_src[2] > $height ) {

		// the file is larger, check if the resized version already exists (for $crop = true but will also work for $crop = false if the sizes match)
		if ( file_exists( $cropped_img_path ) ) {
					
			$cropped_img_url = str_replace( basename( $image_src[0] ), basename( $cropped_img_path ), $image_src[0] );
			
			$vt_image = array (
				'url' => $cropped_img_url,
				'width' => $width,
				'height' => $height
			);
			
			return $vt_image;
		}

		// $crop = false
		if ( $crop == false ) {
		
			// calculate the size proportionaly
			$proportional_size = wp_constrain_dimensions( $image_src[1], $image_src[2], $width, $height );
			$resized_img_path = $no_ext_path.'-'.$proportional_size[0].'x'.$proportional_size[1].$extension;			

			// checking if the file already exists
			if ( file_exists( $resized_img_path ) ) {
			
				$resized_img_url = str_replace( basename( $image_src[0] ), basename( $resized_img_path ), $image_src[0] );

				$vt_image = array (
					'url' => $resized_img_url,
					'width' => $proportional_size[0],
					'height' => $proportional_size[1]
				);
				
				return $vt_image;
			}
		}
		
		// no cache files - let's finally resize it
		$new_img_path = image_resize( $file_path, $width, $height, $crop );
		$new_img_size = getimagesize( $new_img_path );
		$new_img = str_replace( basename( $image_src[0] ), basename( $new_img_path ), $image_src[0] );

		// resized output
		$vt_image = array (
			'url' => $new_img,
			'width' => $new_img_size[0],
			'height' => $new_img_size[1]
		);
		
		return $vt_image;
	}

	// default output - without resizing
	$vt_image = array (
		'url' => $image_src[0],
		'width' => $image_src[1],
		'height' => $image_src[2]
	);

	return $vt_image;
}
?>