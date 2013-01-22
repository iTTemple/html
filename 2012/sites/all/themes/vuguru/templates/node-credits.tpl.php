<h1><?php print $node->title; ?></h1>
<h2><? print content_format('field_subtitle', $field_subtitle[0]); ?></h2>

<?php print $node->content['body']['#value']; ?>

<? print l('Back', 'node/'.$node->field_case_project[0]['nid'], array('html'=>TRUE, 'attributes'=>array('class'=>'back-link'))); ?>

<div class="sponsor-logos">
	<? print views_embed_view('sponsor_logos', 'block_1', $field_case_project[0]['nid']); ?>
</div>