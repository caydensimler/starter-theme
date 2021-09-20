<?php if (have_rows('accordion')): ?>
	<?php while(have_rows('accordion')): the_row(); ?>
		<div class="accordion">
			<div class="grid-container">
				<?php if (get_sub_field('heading')): ?>
					<h2><?php the_sub_field( 'heading' ); ?></h2>
				<?php endif; ?>

				<?php if (get_sub_field('sub-heading')): ?>
					<p><?php the_sub_field( 'sub-heading' ); ?></p>
				<?php endif; ?>

				<?php if ( have_rows( 'accordions' ) ) : ?>
					<div class="accordion-wrapper">
						<?php while ( have_rows( 'accordions' ) ) : the_row(); ?>
							<div class="accordion-container">
								<div class="heading-wrapper">
									<div class="grid-60 tablet-grid-70 mobile-grid-100">
										<h3><?php the_sub_field( 'heading' ); ?></h3>
									</div>
									<div class="grid-40 tablet-grid-30 mobile-grid-100 grid-parent">
										<button>
											<span>
												<i>+</i>
											</span>
										</button>
									</div>
								</div>

								<div class="grid-100 text-wrapper">
									<?php the_sub_field( 'text' ); ?>
								</div>

							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>