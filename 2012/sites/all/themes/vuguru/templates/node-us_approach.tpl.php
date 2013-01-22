<div class="breadcrumb-wrapper clearfix">
	<? print $breadcrumb; ?>
	<h1 class="with-breadcrumb"><? print $node->title; ?></h1>
</div>

<div id="secondary-menu">
	<? print $secondary_links; ?>
</div>

<? print $secondary_links_javascript; ?>

<div id="inner">
	<h2><? print content_format('field_subtitle', $field_subtitle[0]); ?></h2>

	<?php print $node->content['body']['#value']; ?>
	
	<div class="us-approach-wrapper">
	<?
	for($i=0; $i<=3; $i++):  
	if (!empty($field_us_approach_titles[$i])): 
	?>
		<div class="us-approach clearfix">
				<? print content_format('field_us_approach_images', $field_us_approach_images[$i], 'image_plain'); ?>
				<div class="right-column">
	      	<h3><? print content_format('field_us_approach_titles', $field_us_approach_titles[$i]); ?></h3>
				  <? print content_format('field_us_approach_descriptions', $field_us_approach_descriptions[$i]); ?>
    		</div>
		</div>
	<? 
	endif;
	endfor;
	?>
	</div>	
</div>



