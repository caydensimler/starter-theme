<?php

function generateBasicContent() {
	// Generate classes, styles, and data attributes for the content and its container.
	$settingsArray = [];
	$contentClasses = 'class="'; $contentStyles = 'style="';
	$wrapperClasses = 'class="'; $wrapperStyles = 'style="';
	$dataAttributes = '';

	$wrapperClasses .= 'content-container';


	// Generate content container and content settings
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
}

function generateLayout($settings) {
	$layoutArray = [];
	$contentClasses = 'class="';
	$wrapperClasses = 'class="';
	$layoutID = '';

  // Grid Type
  $gridType = get_sub_field('layout_type');

  if ($gridType == 'standard') {
      if (have_rows('standard_columns')) { 
          while (have_rows('standard_columns')) { the_row();
              $layoutStructure = get_sub_field( 'desktop' ) . ' ' . get_sub_field('tablet') . ' ' . get_sub_field('mobile');
          }
      }

      $contentClasses .= 'layout-item ';
      if (get_sub_field('vertical-alignment') !== 'unset') {
          $contentClasses .= get_sub_field('vertical-alignment') . ' ';
      }

      $wrapperClasses .= 'layout grid-display ' . $layoutStructure . ' ';
  } elseif ($gridType == 'masonry') {
      if (have_rows('masonry_columns')) { 
          while (have_rows('masonry_columns')) { the_row();
              $desktopMasonry = get_sub_field( 'desktop' );
              $containerCount = $desktopMasonry['label'];
              $layoutStructure = $desktopMasonry['value'] . ' ' . get_sub_field('tablet') . ' ' . get_sub_field('mobile') . 'layout grid-display masonry-grid items-start ';
          }
      }

      $wrapperClasses .= 'masonry-layout ' . $layoutStructure;
      $contentClasses .= 'masonry-item ';
  }

  if (get_sub_field('layout_id')) { $layoutID = 'id="' . get_sub_field('layout_id') . '"'; } else {
      $layoutID = '';
  }
  if (get_sub_field('layout_classes')) { $wrapperClasses .= get_sub_field('layout_classes') . ' '; }
  if (get_sub_field('layout_item_classes')) { $contentClasses .= get_sub_field('layout_item_classes') . ' '; }

  // Generate layout and layout wrapper settings
	$layoutArray['content-classes'] = rtrim($contentClasses) . '"';
	if (strlen($layoutArray['content-classes']) <= 8 ) { $layoutArray['content-classes'] = '';}

	$layoutArray['wrapper-classes'] = rtrim($wrapperClasses) . '"';
	if (strlen($layoutArray['wrapper-classes']) <= 8 ) { $layoutArray['wrapper-classes'] = ''; }

	$layoutArray['wrapper-id'] = $layoutID;

	return $layoutArray;
}


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
	// if (get_sub_field('background_color') && get_sub_field('background') !== 'unset') {
	// 	$colorSwatch = strip_tags(get_sub_field('background_color'));
	// 	$backgroundColor = get_string_between($colorSwatch, '[', ']');

	// 	$contentClasses .= $backgroundColor . ' ';
	// }

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
	if (get_sub_field('background_type') !== 'unset') {
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
	if (get_sub_field('container_width')) {
		$contentWidth = get_sub_field('container_width');

		if ($contentWidth !== 'contained' && $contentWidth !== 'full-width') {
			$contentStyles .= 'max-width: ' . $contentWidth . 'px; ';
		} elseif ($contentWidth == 'full-width') {
			$contentClasses .= 'max-width-none ';
		}
	}


	// Layout Class(es)
	if (get_sub_field('container_id')) { $dataAttributes .= 'id="' . get_sub_field('container_id') . '" '; }

	if (get_sub_field('container_wrapper_classes')) { $wrapperClasses .= get_sub_field('container_wrapper_classes') . ' '; }
	if (get_sub_field('layout_container_classes')) { $contentClasses .= get_sub_field('layout_container_classes') . ' '; }

	// Content Class(es)
	if (get_sub_field('content_classes')) { $contentClasses .= get_sub_field('content_classes') . ' '; }
	if (get_sub_field('content_wrapper_classes')) { $wrapperClasses .= get_sub_field('content_wrapper_classes') . ' '; }


	// Horizontal Alignment
	if (get_sub_field('alignment')) { $wrapperClasses .= horizontalAlignment(get_sub_field('alignment')) . ' '; }

	// Sizing
	$sizing = '';
	if (get_sub_field('sizing')) {
		$sizing = generateSize(get_sub_field('sizing'));
		$contentStyles .= $sizing;
	}

	// List Style Type
	if (get_sub_field('list_style_type')) {
		$listStyle = get_sub_field('list_style_type');

		if ($listStyle !== 'unset' && $listStyle !== 'icon' && $listStyle !== 'custom') {
			$wrapperClasses .= 'list-' . $listStyle . ' ';
		} elseif ($listStyle == 'custom') {
			$wrapperStyles .= 'list-style-type: \'' . get_sub_field('custom_list_style') . '\'; ';
			$wrapperClasses .= 'list-custom ';
		} elseif ($listStyle == 'icon') {
			if (get_sub_field('list_icon')) {
				$contentStyles .= 'background-image: url(' . get_sub_field('list_icon') . '); ';
				$wrapperClasses .= 'list-style-none ';
				$contentClasses .= 'list-icon ';
			}
		}
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