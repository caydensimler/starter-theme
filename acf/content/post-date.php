<?php 

$format = get_sub_field('format'); 
$prefix = get_sub_field('prefix');
$suffix = get_sub_field('suffix');

?>

<div>
	<p><?= $prefix; ?> <?= get_the_date($format); ?> <?= $suffix; ?></p>
</div>