<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif; 

$formID = get_sub_field('form_id');
$formShortcode = '[gravityform id="' . $formID . '"';

if (get_sub_field('title')) { $formShortcode .= ' title="true"'; } else { $formShortcode .= ' title="false"'; }
if (get_sub_field('description')) { $formShortcode .= ' description="true"'; } else { $formShortcode .= ' description="false"'; }
if (get_sub_field('ajax')) { $formShortcode .= ' ajax="true"'; } else { $formShortcode .= ' ajax="false"'; }

$tabIndex = get_sub_field('tab_index');
if ($tabIndex) {
	$formShortcode .= ' tabindex="' . $tabIndex . '"';
}

$formShortcode .= ']'; ?>

<?php if ($formID): ?>
	<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<div <?php echo $settingsArray['content-classes']; ?>>
			<?php echo do_shortcode($formShortcode); ?>
		</div>
	</div>
<?php endif; ?>