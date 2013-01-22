<h1><?php print $node->title; ?></h1>

<div id="secondary-menu">
	<? print $secondary_links; ?>
</div>

<? print $secondary_links_javascript; ?>

<div id="inner">
	<h2><? print content_format('field_subtitle', $field_subtitle[0]); ?></h2>
	<div class="us-motto clearfix">
		<?php print $node->content['body']['#value']; ?>
	</div>
	<div class="us-main-blocks clearfix">
		<div class="column">
			<? echo l(content_format('field_us_images', $field_us_images[0], 'image_plain'), 'node/5', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
			<? echo l(content_format('field_us_titles', $field_us_titles[0]), 'node/5', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
			<p class="us-desc"><? echo content_format('field_us_descriptions', $field_us_descriptions[0]); ?></p>   		
			<? echo l('&gt;', 'node/5', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
		</div>
		<div class="column">
			<? echo l(content_format('field_us_images', $field_us_images[1], 'image_plain'), 'node/6', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
			<? echo l(content_format('field_us_titles', $field_us_titles[1]), 'node/6', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
			<p class="us-desc"><? echo content_format('field_us_descriptions', $field_us_descriptions[1]); ?></p>
			<? echo l('&gt;', 'node/6', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
		</div>
		<div class="column">
			<? echo l(content_format('field_us_images', $field_us_images[2], 'image_plain'), 'node/7', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
			<? echo l(content_format('field_us_titles', $field_us_titles[2]), 'node/7', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
			<p class="us-desc"><? echo content_format('field_us_descriptions', $field_us_descriptions[2]); ?></p>
			<? echo l('&gt;', 'node/7', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
		</div>
		<div class="column last">
			<? echo l(content_format('field_us_images', $field_us_images[3], 'image_plain'), 'node/8', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
			<? echo l(content_format('field_us_titles', $field_us_titles[3]), 'node/8', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
			<p class="us-desc"><? echo content_format('field_us_descriptions', $field_us_descriptions[3]); ?></p>
			<? echo l('&gt;', 'node/8', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
		</div>
	</div>
</div>