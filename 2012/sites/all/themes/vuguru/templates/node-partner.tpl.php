<div class="breadcrumb-wrapper clearfix">
	<? print $breadcrumb; ?>
	<h1 class="with-breadcrumb"><? print $node->title; ?></h1>
</div>

<div id="secondary-menu">
	<? print $secondary_links; ?>
</div>

<? print $secondary_links_javascript; ?>

<div id="inner" class="clearfix">
	<div class="image">
		<? print content_format('field_partner_image', $field_partner_image[0], 'image_plain'); ?>
	</div>
	
	<div class="body">
		<h2><? print content_format('field_subtitle', $field_subtitle[0]); ?></h2>
		
		<? print content_format('field_partner_link', $field_partner_link[0]); ?>
				
		<?php print $node->content['body']['#value']; ?>
	</div>
	
	<!-- 
	<div class="right-column">
		<? echo l('Case Study', 'node/'.$field_partner_casestudy[0]['nid'], array('html'=>TRUE, 'attributes'=>array('class'=>'casestudy-link'))); ?>
	</div>
	 -->
</div>