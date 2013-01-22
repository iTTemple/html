<?php

$password =  content_format('field_share_text1', $field_share_password[0]);

$passwordForm = true;
$passwordError = '';

// form sent
if (isset($_POST['password'])) {
	// check password
	if ($_POST['password']==$password)
		$passwordForm = false;
	else
		$passwordError = '<p style="color: #f00;">Wrong access code.</p>';
}
?>


<?php if ($passwordForm): ?>

<div class="Sharepoint">
<h1><?php print $node->title; ?></h1>
<?php print $passwordError ?>
<form action="" method="post">
	<p>Enter access code: 
	<input type="password" name="password" value="" />
	<input type="submit" name="" value="Enter" />
	</p>
</form>
</div>

<?php else: ?>

<div class="Sharepoint">
<h1><?php print $node->title; ?></h1>

<? if($node->share_type == 'folder'): ?>

		<?php print $node->content['body']['#value']; ?>

		<?php print $node->ftp_browser; ?>
		
		<?php print $links; ?>


<? else: ?>

		<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
		  <?php print $user_picture; ?>
		
		  <?php if (!$page): ?>
		    <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
		  <?php endif; ?>
		
		  <?php if ($unpublished): ?>
		    <div class="unpublished"><?php print t('Unpublished'); ?></div>
		  <?php endif; ?>
		
		  <?php if ($display_submitted || $terms): ?>
		    <div class="meta" style="display:none;">
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
		  <div class="text">
		        <?php print $node->content['body']['#value']; ?>
		  </div>
		  
		<div class="VideoWrapperTop"> 
               <div class="ipadOptim"></div>
               
               <? $playerKey = 'AQ~~,AAAAnrfspOE~,oi7tkKtPiVL69FsJrZuKCRX448om1Pex'; ?>
               <script>
               	playerId = "<? echo variable_get('brightcove_player', '') ?>";
               	playerKey = "<? echo $playerKey; ?>";
               </script>
               <div id="video-player-wrapper">
                   <object id="bc-player" class="BrightcoveExperience">
               	  <param name="bgcolor" value="#FFFFFF" />
               	  <param name="width" value="560" />
               	  <param name="height" value="375" />
               	  <param name="playerID" value="<? echo variable_get('brightcove_player', '') ?>" />
               	  <param name="@videoPlayer" value="<? echo $node->field_share_video[0]['video_id']; ?>" />
               	  <param name="playerKey" value="<? echo $playerKey; ?>" />
               	  <param name="isVid" value="true" />
               	  <param name="isUI" value="true" />
               	  <param name="wmode" value="transparent" />
               	  <param name="dynamicStreaming" value="true" />
               	</object>
               	<script type="text/javascript">brightcove.createExperiences();</script>
               </div>
               </div>
               
<div class="CarouselsBox">
     <div class="Carousels">		  
          <div class="InfiniteCarousel">
               <div class="Wrapper" id="project-carousel">  
                    <div id="trailer-carousel" class="list video-thumb-carousel">
                         <? foreach($node->field_share_video as $video): ?>
                              <div class="views-row">
                                   <a href="#<? echo $video['video_id']; ?>" class="video-thumb">
                                   <img src="<? echo $video['video_thumbnail']; ?>" width="90" />
                                   </a>	
               		           <p><? echo $video['video_description']; ?></p>		
                              </div>
                         <? endforeach; ?>
                    </div>
               </div>
               <a class="arrow left"></a>
               <a class="arrow right"></a>
          </div>
     </div>
</div>		    
<div class="ImagesBox">		    
		    
<? echo content_format('field_share_image1', $field_share_image1[0], 'image_plain'); ?>
<? echo content_format('field_share_text1', $field_share_text1[0]); ?>

<? echo content_format('field_share_image2', $field_share_image2[0], 'image_plain'); ?>
<? echo content_format('field_share_text2', $field_share_text2[0]); ?>

<? echo content_format('field_share_image3', $field_share_image3[0], 'image_plain'); ?>
<? echo content_format('field_share_text3', $field_share_text3[0]); ?>

<? echo content_format('field_share_image4', $field_share_image4[0], 'image_plain'); ?>
<? echo content_format('field_share_text4', $field_share_text4[0]); ?>

<? echo content_format('field_share_image5', $field_share_image5[0], 'image_plain'); ?>
<? echo content_format('field_share_text5', $field_share_text5[0]); ?>

<? echo content_format('field_share_image6', $field_share_image6[0], 'image_plain'); ?>
<? echo content_format('field_share_text6', $field_share_text6[0]); ?>

<? echo content_format('field_share_image7', $field_share_image7[0], 'image_plain'); ?>
<? echo content_format('field_share_text7', $field_share_text7[0]); ?>

<? echo content_format('field_share_image8', $field_share_image8[0], 'image_plain'); ?>
<? echo content_format('field_share_text8', $field_share_text8[0]); ?>

<? echo content_format('field_share_image9', $field_share_image9[0], 'image_plain'); ?>
<? echo content_format('field_share_text9', $field_share_text9[0]); ?>

<? echo content_format('field_share_image10', $field_share_image10[0], 'image_plain'); ?>
<? echo content_format('field_share_text10', $field_share_text10[0]); ?>

<? echo content_format('field_share_image11', $field_share_image11[0], 'image_plain'); ?>
<? echo content_format('field_share_text11', $field_share_text11[0]); ?>

<? echo content_format('field_share_image12', $field_share_image12[0], 'image_plain'); ?>
<? echo content_format('field_share_text12', $field_share_text12[0]); ?>

<? echo content_format('field_share_image13', $field_share_image13[0], 'image_plain'); ?>
<? echo content_format('field_share_text13', $field_share_text13[0]); ?>

<? echo content_format('field_share_image14', $field_share_image14[0], 'image_plain'); ?>
<? echo content_format('field_share_text14', $field_share_text14[0]); ?>

<? echo content_format('field_share_image15', $field_share_image15[0], 'image_plain'); ?>
<? echo content_format('field_share_text15', $field_share_text15[0]); ?>

<? echo content_format('field_share_image16', $field_share_image16[0], 'image_plain'); ?>
<? echo content_format('field_share_text16', $field_share_text16[0]); ?>

<? echo content_format('field_share_image17', $field_share_image17[0], 'image_plain'); ?>
<? echo content_format('field_share_text17', $field_share_text17[0]); ?>

<? echo content_format('field_share_image18', $field_share_image18[0], 'image_plain'); ?>
<? echo content_format('field_share_text18', $field_share_text18[0]); ?>

<? echo content_format('field_share_image19', $field_share_image19[0], 'image_plain'); ?>
<? echo content_format('field_share_text19', $field_share_text19[0]); ?>

<? echo content_format('field_share_image20', $field_share_image20[0], 'image_plain'); ?>
<? echo content_format('field_share_text20', $field_share_text20[0]); ?>

</div>
		    

		
		  <?php print $links; ?>
		</div> <!-- /.node -->

<? endif; ?>
</div>
</div>

<?php endif; ?>