<div class="breadcrumb-wrapper clearfix">
	<? print $breadcrumb; ?>
	<h1 class="with-breadcrumb"><? print $node->title; ?></h1>
</div>

<div id="secondary-menu">
	<? print $secondary_links; ?>
</div>

<? print $secondary_links_javascript; ?>

<div id="inner">
	<div class="left-column">
		<h2><? print content_format('field_subtitle', $field_subtitle[0]); ?></h2>
		<?php print $node->content['body']['#value']; ?>
	</div>
	
	<div class="right-column">
		<? if (!empty($field_page_image[0])) print content_format('field_page_image', $field_page_image[0], 'image_plain'); ?>
	</div>
</div>


