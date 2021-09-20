<?php

// get_template_part('clones/slider') brings in this clone as a data attribute in the top level of the slider.


if (get_sub_field('adaptive_height'))  { $adaptiveHeight = 'true'; }  else { $adaptiveHeight = 'false'; }
if (get_sub_field('autoplay')) 		   { $autoplay = 'true'; } 		  else { $autoplay = 'false'; }
if (get_sub_field('arrows')) 		   { $arrows = 'true'; } 		  else { $arrows = 'false'; }
if (get_sub_field('center_mode')) 	   { $centerMode = 'true'; } 	  else { $centerMode = 'false'; }
if (get_sub_field('dots'))             { $dots = 'true'; } 			  else { $dots = 'false'; }
if (get_sub_field('draggable'))		   { $draggable = 'true'; } 	  else { $draggable = 'false'; }
if (get_sub_field('fade')) 			   { $fade = 'true'; } 			  else { $fade = 'false'; }
if (get_sub_field('infinite')) 		   { $infinite = 'true'; } 		  else { $infinite = 'false'; }
if (get_sub_field('pause_on_focus'))   { $pauseOnFocus = 'true'; }	  else { $pauseOnFocus = 'false'; }
if (get_sub_field('pause_on_hover'))   { $pauseOnHover = 'true'; }	  else { $pauseOnHover = 'false'; }
if (get_sub_field('swipe'))  		   { $swipe = 'true'; }			  else { $swipe = 'false'; }
if (get_sub_field('variable_width'))   { $variableWidth = 'true'; }	  else { $variableWidth = 'false'; }
if (get_sub_field('vertical'))  	   { $vertical = 'true'; }		  else { $vertical = 'false'; }
if (get_sub_field('vertical_swiping')) { $verticalSwiping = 'true'; } else { $verticalSwiping = 'false'; }

if (get_sub_field('as_nav_for')) 	   { $asNavFor 		 = get_sub_field( 'as_nav_for' ); }
if (get_sub_field('autoplay_speed'))   { $autoplaySpeed  = get_sub_field('autoplay_speed'); }
if (get_sub_field('center_padding'))   { $centerPadding  = get_sub_field('center_padding') . 'px'; }
if (get_sub_field('slides_to_show'))   { $slidesToShow 	 = get_sub_field('slides_to_show'); }
if (get_sub_field('slides_to_scroll')) { $slidesToScroll = get_sub_field('slides_to_scroll'); }
if (get_sub_field('speed')) 		   { $speed 		 = get_sub_field('speed'); }


// Tablet Responsiveness
if (have_rows('group-responsiveness_tablet')) {
	while (have_rows('group-responsiveness_tablet')) { the_row();
		if (get_sub_field('tablet-adaptive_height')) { $tabletAdaptiveHeight = 'true'; } else { $tabletAdaptiveHeight = 'false'; }
		if (get_sub_field('tablet-autoplay')) { $tabletAutoplay = 'true'; } else { $tabletAutoplay = 'false'; }
		if (get_sub_field('tablet-autoplay_speed')) { $tabletAutoplaySpeed = get_sub_field('tablet-autoplay_speed'); }
		if (get_sub_field('tablet-arrows')) { $tabletArrows = 'true'; } else { $tabletArrows = 'false'; }
		if (get_sub_field('tablet-center_mode')) { $tabletCenterMode = 'true'; } else { $tabletCenterMode = 'false'; }
		if (get_sub_field('tablet-center_padding')) { $tabletCenterPadding = get_sub_field('tablet-center_padding') . 'px'; }
		if (get_sub_field('tablet-dots')) { $tabletDots = 'true'; } else { $tabletDots = 'false'; }
		if (get_sub_field('tablet-draggable')) { $tabletDraggable = 'true'; } else { $tabletDraggable = 'false'; }
		if (get_sub_field('tablet-fade')) { $tabletFade = 'true'; } else { $tabletFade = 'false'; }
		if (get_sub_field('tablet-slides_to_show')) { $tabletSlidesToShow = get_sub_field('tablet-slides_to_show'); }
		if (get_sub_field('tablet-slides_to_scroll')) { $tabletSlidesToScroll = get_sub_field('tablet-slides_to_scroll'); }
		if (get_sub_field('tablet-speed')) { $tabletSpeed = get_sub_field('tablet-speed'); }
	}
}

if (have_rows('group-responsiveness_mobile')) {
	while (have_rows('group-responsiveness_mobile')) { the_row();
		if (get_sub_field('mobile-adaptive_height')) { $mobileAdaptiveHeight = 'true'; } else { $mobileAdaptiveHeight = 'false'; }
		if (get_sub_field('mobile-autoplay')) { $mobileAutoplay = 'true'; } else { $mobileAutoplay = 'false'; }
		if (get_sub_field('mobile-autoplay_speed')) { $mobileAutoplaySpeed = get_sub_field('mobile-autoplay_speed'); }
		if (get_sub_field('mobile-arrows')) { $mobileArrows = 'true'; } else { $mobileArrows = 'false'; }
		if (get_sub_field('mobile-center_mode')) { $mobileCenterMode = 'true'; } else { $mobileCenterMode = 'false'; }
		if (get_sub_field('mobile-center_padding')) { $mobileCenterPadding = get_sub_field('mobile-center_padding') . 'px'; }
		if (get_sub_field('mobile-dots')) { $mobileDots = 'true'; } else { $mobileDots = 'false'; }
		if (get_sub_field('mobile-draggable')) { $mobileDraggable = 'true'; } else { $mobileDraggable = 'false'; }
		if (get_sub_field('mobile-fade')) { $mobileFade = 'true'; } else { $mobileFade = 'false'; }
		if (get_sub_field('mobile-slides_to_show')) { $mobileSlidesToShow = get_sub_field('mobile-slides_to_show'); }
		if (get_sub_field('mobile-slides_to_scroll')) { $mobileSlidesToScroll = get_sub_field('mobile-slides_to_scroll'); }
		if (get_sub_field('mobile-speed')) { $mobileSpeed = get_sub_field('mobile-speed'); }
	}
}


?>

data-slick='{
	"adaptiveHeight": <?= $adaptiveHeight; ?>,
	"autoplay": <?= $autoplay; ?>,
	<?php if ($autoplaySpeed): ?>"autoplaySpeed": <?= $autoplaySpeed; ?>,<?php endif; ?>
	"arrows": <?= $arrows; ?>,
	<?php if ($asNavFor): ?>"asNavFor": "<?= $asNavFor; ?>",<?php endif; ?>
	"centerMode": <?= $centerMode; ?>,
	<?php if ($centerPadding): ?>"centerPadding": "<?= $centerPadding; ?>",<?php endif; ?>
	"dots": <?= $dots; ?>,
	"draggable": <?= $draggable; ?>,
	"fade": <?= $fade; ?>,
	"infinite": <?= $infinite; ?>,
	"pauseOnFocus": <?= $pauseOnFocus; ?>,
	"pauseOnHover": <?= $pauseOnHover; ?>,
	<?php if ($slidesToShow): ?>"slidesToShow": <?= $slidesToShow; ?>,<?php endif; ?>
	<?php if ($slidesToScroll): ?>"slidesToScroll": <?= $slidesToScroll; ?>,<?php endif; ?>
	<?php if ($speed): ?>"speed": <?= $speed; ?>,<?php endif; ?>
	"swipe": <?= $swipe; ?>,
	"variableWidth": <?= $variableWidth; ?>,
	"vertical": <?= $vertical; ?>,
	"verticalSwiping": <?= $verticalSwiping; ?>
	<?php if (get_sub_field('responsiveness_tablet') || get_sub_field('responsiveness_mobile')): ?>
		, "responsive": [
			<?php if (get_sub_field('responsiveness_tablet')): ?>
				{
					"breakpoint": 1024,
					"settings": {
						"adaptiveHeight": <?= $tabletAdaptiveHeight; ?>,
						<?php if ($tabletAutoplaySpeed): ?>"autoplaySpeed": <?= $tabletAutoplaySpeed; ?>,<?php endif; ?>
						"arrows": <?= $tabletArrows; ?>,
						"centerMode": <?= $tabletCenterMode; ?>,
						<?php if ($tabletCenterPadding): ?>"centerPadding": "<?= $tabletCenterPadding; ?>",<?php endif; ?>
						"dots": <?= $tabletDots; ?>,
						"draggable": <?= $tabletDraggable; ?>,
						"fade": <?= $tabletFade; ?>,
						<?php if ($tabletSlidesToShow): ?>"slidesToShow": <?= $tabletSlidesToShow; ?>,<?php endif; ?>
						<?php if ($tabletSlidesToScroll): ?>"slidesToScroll": <?= $tabletSlidesToScroll; ?>,<?php endif; ?>
						<?php if ($tabletSpeed): ?>"speed": <?= $tabletSpeed; ?>,<?php endif; ?>
						"autoplay": <?= $tabletAutoplay; ?>
					}
				}<?php if (get_sub_field('responsiveness_mobile')): ?>,<?php endif; ?>
			<?php endif; ?>
			<?php if (get_sub_field('responsiveness_mobile')): ?>
				{
					"breakpoint": 768,
					"settings": {
						"adaptiveHeight": <?= $mobileAdaptiveHeight; ?>,
						<?php if ($mobileAutoplaySpeed): ?>"autoplaySpeed": <?= $mobileAutoplaySpeed; ?>,<?php endif; ?>
						"arrows": <?= $mobileArrows; ?>,
						"centerMode": <?= $mobileCenterMode; ?>,
						<?php if ($mobileCenterPadding): ?>"centerPadding": "<?= $mobileCenterPadding; ?>",<?php endif; ?>
						"dots": <?= $mobileDots; ?>,
						"draggable": <?= $mobileDraggable; ?>,
						"fade": <?= $mobileFade; ?>,
						<?php if ($mobileSlidesToShow): ?>"slidesToShow": <?= $mobileSlidesToShow; ?>,<?php endif; ?>
						<?php if ($mobileSlidesToScroll): ?>"slidesToScroll": <?= $mobileSlidesToScroll; ?>,<?php endif; ?>
						<?php if ($mobileSpeed): ?>"speed": <?= $mobileSpeed; ?>,<?php endif; ?>
						"autoplay": <?= $mobileAutoplay; ?>
					}
				}
			<?php endif; ?>
		]
	<?php endif; ?>
}'