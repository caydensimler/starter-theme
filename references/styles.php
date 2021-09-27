<?php $responsive_display_array = get_sub_field( 'responsive_display' );
if ( $responsive_display_array ):
	$display;
	foreach ( $responsive_display_array as $responsive_display_item ):
	 	$display .= ' ' . $responsive_display_item;
	endforeach;
endif; ?>

<?php if (!get_sub_field( 'background_type' )) : ?>
	<div class="full-container clearfix <?php echo $display; ?>" style="background-color: <?php the_sub_field( 'background_color' ); ?>;">
<?php else : ?>
	<div class="full-container clearfix <?php echo $display; ?>
	 <?php the_sub_field( 'background_size' ); ?>
	 <?php the_sub_field( 'background_position' ); ?>
	 <?php the_sub_field( 'background_repeat' ); ?>
	 <?php the_sub_field( 'background_attachment' ); ?>
	 <?php the_sub_field( 'background_clip' ); ?>
	 <?php the_sub_field( 'background_origin' ); ?>"
	style="background: linear-gradient(<?php the_sub_field( 'overlay' ); ?>, <?php the_sub_field( 'overlay' ); ?>), url('<?php the_sub_field( 'background_image' ); ?>');
	">
<?php endif; ?>