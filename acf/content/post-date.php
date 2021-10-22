<?php 

$format = get_sub_field('format'); 
$prefix = get_sub_field('prefix');
$suffix = get_sub_field('suffix');

?>

<div>
	<p><span class="date-prefix"><?= $prefix; ?></span> <?= get_the_date($format); ?> <span class="date-suffix"><?= $suffix; ?></span></p>
</div>