<h2><?php print $node->title; ?></h2>
<h3><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h3>

<?php print $node->content['body']['#value']; ?>

<? echo l(content_format('field_us_images', $field_us_images[0], 'image_plain'), 'node/5', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>

<? echo l(content_format('field_us_images', $field_us_images[1], 'image_plain'), 'node/6', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>

<? echo l(content_format('field_us_images', $field_us_images[2], 'image_plain'), 'node/7', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>

<? echo l(content_format('field_us_images', $field_us_images[3], 'image_plain'), 'node/8', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
	