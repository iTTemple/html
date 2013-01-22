<h2><?php print $node->title; ?></h2>
<h3><?php print content_format('field_tagline', $field_tagline[0]); ?></h3>
<?php print $node->content['body']['#value']; ?>


<div id="video-player-wrapper">
    <object id="bc-player" class="BrightcoveExperience">
	  <param name="bgcolor" value="#FFFFFF" />
	  <param name="width" value="480" />
	  <param name="height" value="270" />
	  <param name="playerID" value="97611362001" />
	  <param name="@videoPlayer" value="<? echo $node->field_project_trailer[0]['video_id']; ?>" />
	  <param name="playerKey" value="AQ%2E%2E,AAAAFTE7e1k%2E,4VZUSNuug3vIIhUML3D7YsD_OsnBfRgX" />
	  <param name="isVid" value="true" />
	  <param name="isUI" value="true" />
	  <param name="dynamicStreaming" value="true" />
	</object>
	<script type="text/javascript">brightcove.createExperiences();</script>
</div>



<h3>Trailers</h3>
<ul id="trailer-carousel" class="video-thumb-carousel">
	<? foreach($node->field_project_trailer as $video): ?>
		<li>
			<a href="#<? echo $video['video_id']; ?>" class="video-thumb">
				<img src="<? echo $video['video_thumbnail']; ?>" />
			</a>		
		</li>
	<? endforeach; ?>
</ul>




<?
for ($i=1; $i<=5; $i++):
if ($node->{'field_project_clips'.$i}[0]['video_id'] != null):
?>
<h3><? echo $node->{'field_project_clips'.$i.'_title'}[0]['view'] ?></h3>
<ul id="clips<? echo $i; ?>-carousel" class="video-thumb-carousel">
	<? foreach($node->{'field_project_clips'.$i} as $video): ?>
		<li>
			<a href="#<? echo $video['video_id']; ?>" class="video-thumb">
				<img src="<? echo $video['video_thumbnail']; ?>" />
			</a>
		</li>
	<? endforeach; ?>
</ul>
<?
endif;
endfor;
?>




<?
for ($i=1; $i<=3; $i++):
if ($node->{'field_project_extras'.$i}[0]['video_id'] != null):
?>
<h3><? echo $node->{'field_project_extras'.$i.'_title'}[0]['view'] ?></h3>
<ul id="extras<? echo $i; ?>-carousel" class="video-thumb-carousel">
	<? foreach($node->{'field_project_extras'.$i} as $video): ?>
		<li>
			<a href="#<? echo $video['video_id']; ?>" class="video-thumb">
				<img src="<? echo $video['video_thumbnail']; ?>" />
			</a>
		</li>
	<? endforeach; ?>
</ul>
<?
endif;
endfor;
?>




<? if (!empty($field_project_links[0])): ?>
<h3>Links</h3>
<ul>
<? for ($i=0; $i<sizeof($field_project_links); $i++): ?>
	<li><?php print content_format('field_project_links', $field_project_links[$i]); ?> </li>
<? endfor; ?>
</ul>
<? endif; ?>


<? if (!empty($field_project_sponsors[0])): ?>
<h3>Sponsors</h3>
<ul>
<? for ($i=0; $i<sizeof($field_project_sponsors); $i++): ?>
	<li><?php print content_format('field_project_sponsors', $field_project_sponsors[$i], 'image_plain'); ?> </li>
<? endfor; ?>
</ul>
<? endif; ?>


<?
	if (!empty($node->case_study_path)) echo l('Case Study', $node->case_study_path, array('html'=>TRUE, 'attributes'=>array('class'=>'case-study-link')));
?>


<?
	if (!empty($node->credits_path)) echo l('Credits', $node->case_study_path, array('html'=>TRUE, 'attributes'=>array('class'=>'case-study-link')));
?>



<?php print $service_links_rendered; ?> 


