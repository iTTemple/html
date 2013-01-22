<h1><?php print $node->title; ?></h1>
<h2 class="subtitle"><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h2>

<div class="contact-content clearfix">
	<div class="contact-body">
		<?php print $node->content['body']['#value']; ?>
	</div>
	<div class="contact-image">
		<? echo content_format('field_page_image', $field_page_image[0], 'image_plain'); ?>
	</div>
</div>