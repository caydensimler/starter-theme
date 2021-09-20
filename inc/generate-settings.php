<?php
function generateSettings($settings) {
	// Generate classes, styles, and data attributes for the content and its wrapper.
	$settingsArray = [];
	$contentClasses = 'class="'; $contentStyles = 'style="';
	$wrapperClasses = 'class="'; $wrapperStyles = 'style="';
	$dataAttributes = '';

	// Text Color
	if (get_sub_field('text_color') && get_sub_field('text_color') !== 'unset') {
		$colorSwatch = strip_tags(get_sub_field('text_color'));
		$textColor = get_string_between($colorSwatch, '[', ']');

		$contentClasses .= $textColor . ' ';
	}

	// Background Colors
	if (get_sub_field('background_color') && get_sub_field('background') !== 'unset') {
		$colorSwatch = strip_tags(get_sub_field('background_color'));
		$backgroundColor = get_string_between($colorSwatch, '[', ']');

		$contentClasses .= $backgroundColor . ' ';
	}

	// Border Colors
	if (get_sub_field('border_color') && get_sub_field('border_color') !== 'unset') {
		$colorSwatch = strip_tags(get_sub_field('border_color'));
		$borderColor = get_string_between($colorSwatch, '[', ']');

		$contentClasses .= $borderColor . ' ';
	}

	// Font Weight
	if (get_sub_field('font_weight') && get_sub_field('font_weight') !== 'unset') { $contentClasses .= get_sub_field('font_weight') . ' '; }

	// Font Family
	if (get_sub_field('family') && get_sub_field('family') !== 'unset') { $contentClasses .= get_sub_field('family') . ' '; }

	// Font Styles
	if (get_sub_field('font_styles')) {
		$fontStyleArray = ''; $fontStyles = '';
		$fontStyleArray = get_sub_field('font_styles');

		if ($fontStyleArray) { foreach ($fontStyleArray as $fontStyleValue) {
			$contentClasses .= $fontStyleValue . ' ';
		}}
	}

	// Background Options
	if (get_sub_field('background_type')) {
		$backgroundType = get_sub_field( 'background_type' );

		// Background Type: Color
		if ($backgroundType == 'color') {
			$backgroundColorSwatch = strip_tags(get_sub_field('background_color'));
			$backgroundColor = get_string_between($backgroundColorSwatch, '[', ']');
			$wrapperClasses .=  $backgroundColor . ' ';

		// Background Type: Image
		} elseif ($backgroundType == 'image') {
			$backgroundImage = get_sub_field( 'background_image' );

			$overlay = get_sub_field('overlay');
			if ($overlay) {
				$overlayStyle = 'background: linear-gradient(' . $overlay  . ', ' . $overlay . '), url(' . $backgroundImage . ');';
				$wrapperStyles .= $overlayStyle . ' ';
			} else {
				$backgroundImage = 'background-image: url(' . $backgroundImage . ');';
				$wrapperStyles .= $backgroundImage . ' ';
			} // Close overlay check

			$backgroundSize = '';
			$backgroundPosition = '';
			$backgroundRepeat = '';

			if ( have_rows( 'image_settings' ) ) { while ( have_rows( 'image_settings' ) ) { the_row();
					$backgroundSize = get_sub_field( 'background_size' );
					if ($backgroundSize) { $wrapperClasses .= ' ' . $backgroundSize . ' '; }

					$backgroundPosition = get_sub_field( 'background_position' );
					if ($backgroundPosition) { $wrapperClasses .= $backgroundPosition . ' '; }

					$backgroundRepeat = get_sub_field( 'background_repeat' );
					if ($backgroundRepeat) { $wrapperClasses .= $backgroundRepeat . ' '; }
			}} // Close image settings
		} // Close color vs. image check
	} // Close background_type check

	$contentWidth = '';
	if (get_sub_field('content_width')) {
		$contentWidth = get_sub_field('content_width');

		if ($contentWidth !== 'contained' && $contentWidth !== 'full-width') {
			$contentStyles .= 'max-width: ' . $contentWidth . 'px; ';
		} elseif ($contentWidth == 'full-width') {
			$contentClasses .= 'max-width-none ';
		}
	}

	// Custom Classes
	if (get_sub_field('container_classes')) {
		$wrapperClasses .= get_sub_field('container_classes') . ' ';
	}

	if (get_sub_field('content_wrapper_classes')) {
		if (get_sub_field('content_wrapper_classes')['content_class']) {
			$contentClasses .= get_sub_field('content_wrapper_classes')['content_class'] . ' ';
		}

		if (get_sub_field('content_wrapper_classes')['content_wrapper_class']) {
			$wrapperClasses .= get_sub_field('content_wrapper_classes')['content_wrapper_class'] . ' ';
		}
	}

	// Horizontal Alignment
	if (get_sub_field('alignment')) { $wrapperClasses .= horizontalAlignment(get_sub_field('alignment')) . ' '; }

	// Sizing
	$sizing = '';
	if (get_sub_field('sizing')) {
		$sizing = generateSize(get_sub_field('sizing'));
		$contentStyles .= $sizing;
	}

	// Responsive Display
	if (get_sub_field('responsive_display')) { $wrapperClasses .= generateResponsiveDisplay(get_sub_field('responsive_display')) . ' '; }

	// Section Target
	if (get_sub_field( 'section_target' )) { $dataAttributes .= 'id="' . get_sub_field( 'section_target' ) . '" '; }

	// Height Equalizer
	if (get_sub_field('equal_height')) { $dataAttributes .= 'data-mh="' . get_sub_field('equal_height') . '" '; }

	// Animations
	if (get_sub_field('animation') && get_sub_field('animation') !== 'none') {
		$animation = get_sub_field('animation'); $animationSpeed = get_sub_field('animation_speed'); $animationDelay = get_sub_field('animation_delay');

		$aos = generateAnimation($animation, $animationSpeed, $animationDelay);
		$dataAttributes .= $aos . ' ';
	}


	// Generate content and content wrapper settings
	$settingsArray['content-classes'] = rtrim($contentClasses) . '"';
	if (strlen($settingsArray['content-classes']) <= 8 ) { $settingsArray['content-classes'] = '';}

	$settingsArray['content-styles'] = rtrim($contentStyles) . '"';
	if (strlen($settingsArray['content-styles']) <= 8 ) { $settingsArray['content-styles'] = ''; }

	$settingsArray['wrapper-classes'] = rtrim($wrapperClasses) . '"';
	if (strlen($settingsArray['wrapper-classes']) <= 8 ) { $settingsArray['wrapper-classes'] = ''; }

	$settingsArray['wrapper-styles'] = rtrim($wrapperStyles) . '"';
	if (strlen($settingsArray['wrapper-styles']) <= 8 ) { $settingsArray['wrapper-styles'] = ''; }

	$settingsArray['data-attributes'] = rtrim($dataAttributes);


	return $settingsArray;
} // CLOSE function generateSettings($settings)


function generateSize($sizing) {
	$styles = '';

	$width = $sizing['width'];
	$height = $sizing['height'];

	if ($width) { $styles .= 'width: ' . $width . '; '; }
	if ($height) { $styles .= 'height: ' . $height . '; '; }

	return $styles;
} // CLOSE function generateSize($sizing)


function generateResponsiveDisplay($display) {
	$responsiveDisplay = '';
	foreach ($display as $displayClass) {
		if ($displayClass == 'display-none') {
			$responsiveDisplay .= $displayClass . ' ';
			break;
		} else {
			$responsiveDisplay .= $displayClass . ' ';
		}
	}

	return $responsiveDisplay;
} // CLOSE generateResponsiveDisplay($display)


function horizontalAlignment($alignment) {
	$horizontalAlignment = '';
	$desktopAlignment = $alignment['desktop'];
	if ($desktopAlignment != 'unset') {
		$horizontalAlignment .= $desktopAlignment . ' ';
	}

	$tabletAlignment = $alignment['tablet'];
	if ($tabletAlignment != 'unset') {
		$horizontalAlignment .= $tabletAlignment . ' ';
	}

	$mobileAlignment = $alignment['mobile'];
	if ($mobileAlignment != 'unset') {
		$horizontalAlignment .= $mobileAlignment . ' ';
	}

	return $horizontalAlignment;
} // CLOSE horizontalAlignment($alignment)


function generateAnimation($animation, $speed, $delay) {
  $aos = 'data-aos="' . $animation . '" ';

  if ($speed != 1000) {
    $aosDuration = 'data-aos-duration="' . $speed . '" ';
    $aos .= $aosDuration;
  }

  if ($delay > 0) {
    $aosDelay = 'data-aos-delay="' . $delay . '" ';
    $aos .= $aosDelay;
  }

  return $aos;
} // CLOSE function generateAnimation($animation, $speed, $delay)