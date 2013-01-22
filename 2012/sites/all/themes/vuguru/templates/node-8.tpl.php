<div class="breadcrumb-wrapper clearfix">
	<? print $breadcrumb; ?>
	<h1 class="with-breadcrumb"><? print $node->title; ?></h1>
</div>

<div id="secondary-menu">
	<? print $secondary_links; ?>
</div>

<? print $secondary_links_javascript; ?>

<div id="inner" class="partners">

	<h2>Domestic Distributors.</h2>
		<p>Wide reach through multi-platform video.</p>
	<div class="partners-grid">
	  <? print views_embed_view('us', 'block_2',4); ?>
	</div>
	
	<div class="clr"></div>
	
	<h2>International Distributors.</h2>
		<p>Multi-platform around the world.</p>
	<div class="partners-grid">
	  <? print views_embed_view('us', 'block_2',8); ?>
	</div>
	
	<div class="clr"></div>
	
	<h2>Sponsors.</h2>
		<p>Reaching engaged target audiences.</p>
	<div class="partners-grid">
	  <? print views_embed_view('us', 'block_2',5); ?>
	</div>
	
</div>