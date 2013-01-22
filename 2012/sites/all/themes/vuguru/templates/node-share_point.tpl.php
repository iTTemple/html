<h1><?php print $node->title; ?></h1>

<? if($node->share_type == 'folder'): ?>

		<?php print $node->content['body']['#value']; ?>

		<?php print $node->ftp_browser; ?>
		



<? else: ?>

		<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
		
		  <?php if ($display_submitted || $terms): ?>
		    <div class="meta">
		      <?php if ($display_submitted): ?>
		        <span class="submitted">
		          <?php
		            print t('Submitted by !username on !datetime',
		              array('!username' => $name, '!datetime' => $date));
		          ?>
		        </span>
		      <?php endif; ?>
		
		      <?php if ($terms): ?>
		        <div class="terms terms-inline"><?php print $terms; ?></div>
		      <?php endif; ?>
		    </div>
		  <?php endif; ?>
		
		  <div class="content">
		    <?php print $content; ?>
		  </div>
		
		  <?php print $links; ?>
		</div> <!-- /.node -->

<? endif; ?>