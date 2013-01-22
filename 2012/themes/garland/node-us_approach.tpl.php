<h2><?php print $node->title; ?></h2>
<h3><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h3>

<?php print $node->content['body']['#value']; ?>

<?
for($i=0; $i<=3; $i++):  
if (!empty($field_us_approach_titles[$i])): 
?>
	<h3><? print content_format('field_us_approach_titles', $field_us_approach_titles[$i]); ?></h3>
	<? print content_format('field_us_approach_images', $field_us_approach_images[$i], 'image_plain'); ?>
	<? print content_format('field_us_approach_descriptions', $field_us_approach_descriptions[$i]); ?>
<? 
endif;
endfor;
?>
