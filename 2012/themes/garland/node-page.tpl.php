<h2><?php print $node->title; ?></h2>
<h3><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h3>

<?php print $node->content['body']['#value']; ?>

<? if (!empty($field_page_image[0])) print content_format('field_page_image', $field_page_image[0], 'image_plain'); ?>
