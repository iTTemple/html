<h2><?php print $node->title; ?></h2>
<h3><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h3>

<?php print $node->content['body']['#value']; ?>

<? print views_embed_view('us', 'block_1', 5); ?>