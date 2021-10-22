<?php 

$format = get_sub_field('format'); 
$prefix = get_sub_field('prefix');
$suffix = get_sub_field('suffix');

?>

<div>
	<p><span class="date-prefix"><?= $prefix; ?></span> <span class="date"><?= get_the_date($format); ?></span> <span class="date-suffix"><?= $suffix; ?></span></p>
</div>