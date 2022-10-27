<?php


//image => [url]
//title
//description
//twitter

function socialcard($arr) {
	foreach ($arr as $key => $value) {
		$markup .= PHP_EOL;

		//	Some values appear in both Facebook and Twitter tags
		//	Let's deal with those first
		if (strpos($key, 'image') !== false) {
			/* "The provided 'og:image' properties are not yet available because new images are processed asynchronously. To ensure shares of new URLs include an image, specify the dimensions using 'og:image:width' and 'og:image:height' tags." */

			$local_image_url = wp_make_link_relative($value);
			$local_image_url = $_SERVER['DOCUMENT_ROOT'].$local_image_url;
			if(file_exists($local_image_url))

				list($image_width, $image_height, $image_type, $image_attr) = getimagesize($local_image_url);
			$markup .= '<meta name="og:image:width" content="'.$image_width.'">';
			$markup .= '<meta name="og:image:height" content="'.$image_height.'">';


			$markup .= '<meta name="twitter:card" content="summary_large_image">';
			$markup .= '<meta name="twitter:image" content="'.$value.'">'.PHP_EOL.'<meta property="og:image" content="'.$value.'">';
		}
		if (strpos($key, 'title') !== false) {
			$value = strip_tags($value);
			$markup .= '<meta name="twitter:title" content="'.$value.'">'.PHP_EOL.'<meta property="og:title" content="'.$value.'">';
		}
		if (strpos($key, 'description') !== false)
			$markup .= '<meta name="twitter:description" content="'.$value.'">'.PHP_EOL.'<meta property="og:description" content="'.$value.'">';


		//	Network-specific stuff here
		if (strpos($key, 'twitter') !== false)
			$markup .= '<meta name="'.$key.'" content="@'.$value.'">';
		else if (strpos($key, 'og:') !== false)
			$markup .= '<meta property="'.$key.'" content="'.$value.'">';
	}
    return $markup;
}
