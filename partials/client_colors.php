<script>var colors =
	[<?php if (get_field('primary')): ?>"<?php the_field( 'primary' ); ?>", <?php endif; ?>
	<?php if (get_field('secondary')): ?>"<?php the_field( 'secondary' ); ?>", <?php endif; ?>
	<?php if (get_field('tertiary')): ?>"<?php the_field( 'tertiary' ); ?>", <?php endif; ?>
	<?php if (get_field('quaternary')): ?>"<?php the_field( 'quaternary' ); ?>", <?php endif; ?>
	<?php if (get_field('quinary')): ?>"<?php the_field( 'quinary' ); ?>", <?php endif; ?>
	<?php if (get_field('senary')): ?>"<?php the_field( 'senary' ); ?>", <?php endif; ?>
	"#FFFFFF", "#000000"];
</script>