<div class="breadcrumb-wrapper clearfix">
	<? print $breadcrumb; ?>
	<h1 class="with-breadcrumb"><? print $node->title; ?></h1>
</div>

<div id="secondary-menu">
	<? print $secondary_links; ?>
</div>

<? print $secondary_links_javascript; ?>

<div id="inner" class="team">

     <div class="kontrola" style="color:white;"></div>
     
     
	<h2><? print content_format('field_subtitle', $field_subtitle[0]); ?></h2>
	
	<?php print $node->content['body']['#value']; ?>
	
	<div class="team-member-container">
     	<div class="team-member-Column team-members-Left"></div>
     	<div class="team-member-Column team-members-Right"></div>
	</div>
	
	<div class="team-members" id="team-members-list">
	  <? print views_embed_view('us', 'block_1'); ?>
	</div>
	
	<div id="team-members-list-defaultimage">
	<? print content_format('field_teammain_image1', $field_teammain_image1[0], 'image_plain'); ?>
	<? print content_format('field_teammain_image2', $field_teammain_image2[0], 'image_plain'); ?>
	<? print content_format('field_teammain_image3', $field_teammain_image3[0], 'image_plain'); ?>
	<? print content_format('field_teammain_image4', $field_teammain_image4[0], 'image_plain'); ?>
	<? print content_format('field_teammain_image5', $field_teammain_image5[0], 'image_plain'); ?>
	<? print content_format('field_teammain_image6', $field_teammain_image6[0], 'image_plain'); ?>
	</div>
	
	<div class="team-members" id="team-members-list-detail">
	  <? print views_embed_view('us', 'block_3'); ?>
	</div>
	
	<div class="storage"></div>
	
</div>