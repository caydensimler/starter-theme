<?php

if (have_rows('layout_sub-menu')) {
	while (have_rows('layout_sub-menu')) { the_row();
		$menuObject = get_sub_field('menu_selection');
		$menuID     = $menuObject->term_id;
		$menuName   = $menuObject->name . 'Menu';
		$menuSlug   = $menuObject->slug;

		$menuClasses = 'clearfix';

		$customMenu     = get_sub_field('customize_menu');
		$menuStyle      = get_sub_field('menu_styles');
		$menuMaxWidth   = get_sub_field('menu_max_width');
		$menuBreakpoint = get_sub_field('menu_breakpoint');
		$customColors   = get_sub_field('custom_colors');

		$menuTextColor       = get_sub_field('text_color');
		$menuBackgroundColor = get_sub_field('background_color');
		$menuTextHover       = get_sub_field('text_color_hover');
		$menuBackgroundHover = get_sub_field('background_color_hover');
		$menuBorderColor     = get_sub_field('bottom_border_color');

		if ($customMenu) {
			$menuClasses .= ' ' . $menuStyle;

			if ($menuBreakpoint != 768 || $customColors || $menuMaxWidth != 1201): ?>
				<style>
					<?php if ($menuMaxWidth != 1201): ?>
						#content div.sub-menu .menu-container#<?= $menuSlug; ?> > ul {
							max-width: <?= $menuMaxWidth; ?>px;
							margin-left: auto; margin-right: auto;
						}
					<?php endif; ?>

					<?php if ($menuBreakpoint != 768): ?>
						@media screen and (max-width: <?= $menuBreakpoint; ?>px) {
							#content div.sub-menu .menu-container { display: none; }
							#content .sub-menu .dropdown-container { display: block; }
						}

						@media screen and (min-width: <?= $menuBreakpoint + 1; ?>px) {
							#content .sub-menu .menu-container.mobile-menu {
								display: none !important;
							}
						}
					<?php endif; ?>

					<?php if ($customColors): ?>
						#content div.sub-menu #<?= $menuSlug; ?>,
						#content div.sub-menu #<?= $menuSlug; ?> ul ul.sub-menu,
						#content div.sub-menu .dropdown-container#<?= $menuSlug; ?> {
							background-color: <?= $menuBackgroundColor; ?>
						}

						#content div.sub-menu #<?= $menuSlug; ?> > ul > li,
						#content div.sub-menu #<?= $menuSlug; ?> ul ul.sub-menu > li,
						#content div.sub-menu .dropdown-container#<?= $menuSlug; ?> {
							color: <?= $menuTextColor; ?>;
						}

						<?php if ($menuStyle == 'style-background'): ?>
							#content div.sub-menu #<?= $menuSlug; ?> > ul > li:not(.menu-item-has-children, .clear-hover):hover,
							#content div.sub-menu #<?= $menuSlug; ?> ul ul.sub-menu > li:hover,
							#content .sub-menu #<?= $menuSlug; ?>.menu-container.mobile-menu ul > li:hover,
							#content div.sub-menu #<?= $menuSlug; ?> > ul > li:not(.menu-item-has-children, .clear-hover).current-menu-item {
								background-color: <?= $menuBackgroundHover; ?>;
								color: <?= $menuTextHover; ?>;
							}
						<?php else: ?>
							#content div.sub-menu #<?= $menuSlug; ?>.menu-container > ul.style-border > li:not(.menu-item-has-children, .clear-hover):hover:after,
							#content div.sub-menu #<?= $menuSlug; ?>.menu-container > ul.style-border > li:not(.menu-item-has-children, .clear-hover).current-menu-item:after {
								background-color: <?= $menuBorderColor; ?>;
							}

							#content div.sub-menu #<?= $menuSlug; ?> ul ul.sub-menu > li:hover,
							#content .sub-menu #<?= $menuSlug; ?>.menu-container.mobile-menu ul > li:hover,
							#content .sub-menu #<?= $menuSlug; ?>.menu-container.mobile-menu ul > li.current-menu-item {
								background-color: <?= $menuTextColor; ?>;
								color: <?= $menuBackgroundColor; ?>;
							}
						<?php endif; ?>
					<?php endif; ?>
				</style>
			<?php endif; ?>
		<?php } else {
			$menuClasses .= ' style-background';
		}

		$additionalMenuClasses = get_sub_field('additional_menu_classes');
		if ($additionalMenuClasses) { $menuClasses .= ' ' . $additionalMenuClasses; } ?>

		<div class="dropdown-container" id="<?= $menuSlug; ?>">
			<i class="fas fa-bars" data-id="<?= $menuSlug; ?>"></i>
		</div>

		<?php $menu = array(
		    'menu' => $menuID,
			'container_id' => $menuSlug,
			'container_class' => 'menu-container',
		    'menu_class'     => $menuClasses,
		    'container_aria_label' => $menuName
		); wp_nav_menu($menu); ?>

		<div id="<?= $menuSlug; ?>-mobile">
			<?php $menu = array(
			    'menu' => $menuID,
				'container_id' => $menuSlug,
				'container_class' => 'menu-container mobile-menu',
			    'menu_class'     => $menuClasses,
			    'container_aria_label' => $menuName
			); wp_nav_menu($menu); ?>
		</div><?php
	}
}