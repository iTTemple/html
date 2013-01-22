<h2><?php print $node->title; ?></h2>
<h3><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h3>
<?php print $node->content['body']['#value']; ?>

<div class="project-highlighted-top">
	<? print views_embed_view('projects', 'block_1'); ?>
</div>

<div class="project-highlighted-second">
	<? print views_embed_view('projects', 'block_2'); ?>
</div>

<div class="project-highlighted-third">
	<? print views_embed_view('projects', 'block_3'); ?>
</div>

<div id="project-carousel">
	<? print views_embed_view('projects', 'block_4'); ?>
</div>