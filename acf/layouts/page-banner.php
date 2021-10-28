<?php if ( have_rows( 'page-banner_group' ) ) : ?>
	<?php while ( have_rows( 'page-banner_group' ) ) : the_row(); ?>
		<?php $bannerType = get_sub_field('page-banner_banner-type'); ?>

		<?php if ($bannerType == 'image'): ?>
			<?php
				$bannerImage       = get_sub_field('page-banner_image');
				$bannerImageMobile = get_sub_field('page-banner_image-mobile');

				$bannerLinkStatus  = get_sub_field('page-banner_banner-link');
				$bannerLink        = get_sub_field('page-banner_link');
			?>

			<div class="page-banner image-banner">
				<?php if ($bannerLink && $bannerLinkStatus): ?>
					<a href="<?php echo $bannerLink; ?>">
				<?php endif; ?>
					<?php if ($bannerImage): ?>
						<?php if ($bannerImageMobile): ?>
							<div class="mobile-display-none">
						<?php endif; ?>
								<img src="<?php echo $bannerImage['url']; ?>" alt="<?php echo $bannerImage['alt']; ?>">
						<?php if ($bannerImageMobile): ?>
							</div>
						<?php endif; ?>
					<?php endif; ?>

					<?php if ($bannerImageMobile): ?>
						<div class="tablet-display-none desktop-display-none">
							<img src="<?php echo $bannerImageMobile['url']; ?>" alt="<?php echo $bannerImageMobile['alt']; ?>">
						</div>
					<?php endif; ?>
				<?php if ($bannerLink && $bannerLinkStatus): ?>
					</a>
				<?php endif; ?>
			</div>


		<?php elseif ($bannerType == 'image-text'): ?>
			<?php
				$bannerImage         = get_sub_field('page-banner_image');
				$bannerImageMobile   = get_sub_field('page-banner_image-mobile');
				$bannerImagePosition = get_sub_field('page-banner_image-position');
				$bannerImagePadding  = get_sub_field('page-banner_top-bottom-padding');

				$bannerText = get_sub_field('page-banner_banner-text');
			?>

			<style type="text/css">
				.page-banner.text-banner {
					background-image: url(<?php echo $bannerImage['url']; ?>);
					background-position: <?php echo $bannerImagePosition; ?>;
					padding: clamp(50px, 9vw, <?php echo $bannerImagePadding; ?>px) 0px;
				}

				<?php if ($bannerImageMobile): ?>
					@media screen and (max-width: 768px) {
						.page-banner.text-banner {
							background-image: url(<?php echo $bannerImageMobile['url']; ?>);
						}
					}
				<?php endif; ?>
			</style>

			<div class="page-banner text-banner">
				<div class="grid-container">
					<h1><?php echo $bannerText; ?></h1>
				</div>
			</div>

		<?php elseif ($bannerType == 'text'): ?>
			<?php
				$bannerText        = get_sub_field('page-banner_banner-text');

				$bannerImagePadding    = get_sub_field('page-banner_top-bottom-padding');
				$bannerTextColor 	   = get_sub_field('page-banner_text-color');
				$bannerBackgroundColor = get_sub_field('page-banner_background-color');
			?>

			<style>
				.page-banner .text-banner {
					background-color: <?php echo $bannerBackgroundColor; ?>;
					padding: clamp(50px, 9vw, <?php echo $bannerImagePadding; ?>px) 0px;
				}

				.page-banner .text-banner h1 {
					color: <?php echo $bannerTextColor; ?>;
				}
			</style>


			<div class="page-banner">
				<div class="text-banner">
					<div class="grid-container">
						<h1><?php echo $bannerText; ?></h1>
					</div>
				</div>
			</div>


		<?php elseif ($bannerType == 'video'): ?>
			<?php
				$bannerPoster = get_sub_field('page-banner_poster');
				$bannerVideo = get_sub_field('page-banner_video');

				$bannerText = get_sub_field('page-banner_banner-text');
			?>
			<div class="page-banner video-banner">
				<video loop muted autoplay playsinline poster="<?php echo $bannerPoster['url']; ?>" class="background-video">
				    <source src="<?php echo $bannerVideo; ?>" type="video/mp4">
				</video>

				<div class="grid-container">
				    <h1><?php echo $bannerText; ?></h1>
				</div>
			</div>


		<?php elseif ($bannerType == 'shortcode'): ?>
			<?php $shortcode = get_sub_field('page-banner_shortcode'); ?>
			<?php echo do_shortcode($shortcode); ?>


		<?php elseif ($bannerType == 'content-block'): ?>
			<?php get_template_part('acf/layouts/content-block'); ?>


		<?php endif; ?>
	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>
<?php endif; ?>