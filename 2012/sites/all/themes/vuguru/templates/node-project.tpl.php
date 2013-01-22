<div class="ProjectItem">
     <div class="ProjScrollTo"></div>
     <div class="breadcrumb-wrapper clearfix">
     <div class="breadcrumb">
     <a title="Projects" href="/projects">Projects</a>:  
     </div>
     <h2><? print $node->title; ?></h2>
     </div>


<h3 style="display:none;"><? print content_format('field_tagline', $field_tagline[0]); ?></h3>

     <div class="left-sidebar ProjectMainMenu">
          <div class="FirstItem"><div class="Inner"></div><div class="Unpack"></div></div>
     		<? print $secondary_links; ?>
     </div>
     
     <div class="projects-content">
          <div class="Left">
               
              <div class="VideoWrapperTop"> 
               <div class="ipadOptim"></div>
               
               <?
               if ($node->field_project_trailer[0]['video_id']!=''):
               ?>
               
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
               	  <param name="@videoPlayer" value="<? echo $node->field_project_trailer[0]['video_id']; ?>" />
               	  <param name="playerKey" value="<? echo $playerKey; ?>" />
               	  <param name="isVid" value="true" />
               	  <param name="isUI" value="true" />
               	  <param name="wmode" value="transparent" />
               	  <param name="dynamicStreaming" value="true" />
               	</object>
               	<script type="text/javascript">brightcove.createExperiences();</script>
               </div>
               
               <?
               	else:
                	echo content_format('field_project_image_default', $field_project_image_default[0], 'image_plain');
				endif;
               ?>
               </div>
               
               <div class="CarouselsBox">
                    <div class="Tabs">
                         <div class="Tab" id="Trailers"><span>Trailers</span></div>
                         <div class="Tab" id="Clips"><span>Chapters</span></div>
                         <div class="Tab" id="Extras"><span>Extras</span></div>
                         <div class="clr"></div>
                    </div>
                    <div class="Carousels">
                    <!-- carousels begin -->
               
<h3 style="display:none;">Trailers</h3>

<div class="InfiniteCarousel Trailers">
     <div class="Wrapper" id="project-carousel">  

          <div id="trailer-carousel" class="list video-thumb-carousel">
          	<?
          	foreach($node->field_project_trailer as $video):
          	if ($video['video_id']=='') {
          		continue;
          	}
          	?>
          		<div class="views-row">
          			<a href="#<? echo $video['video_id']; ?>" class="video-thumb">
          				<img src="<? echo $video['video_thumbnail']; ?>" />
          			</a>	
               		<p><? echo $video['video_description']; ?></p>	
          		</div>
          	<?
          	endforeach;
          	?>
          </div>

     </div>            		
     <a class="arrow left"></a>
     <a class="arrow right"></a>
</div>


<?
for ($i=1; $i<=5; $i++):
if ($node->{'field_project_clips'.$i}[0]['video_id'] != null):
?>

<h3 class="Clips" style="display:none;"><? echo $node->{'field_project_clips'.$i.'_title'}[0]['view'] ?></h3>
<div class="InfiniteCarousel Clips">
               
     <div class="Wrapper" id="project-carousel">    
               <div id="clips<? echo $i; ?>-carousel" class="list video-thumb-carousel">
               	<? foreach($node->{'field_project_clips'.$i} as $video):?>
               		<div class="views-row"><div class="views-field-field-project-image-fid">
               			<a href="#<? echo $video['video_id']; ?>" class="video-thumb">
               				<img src="<? echo $video['video_thumbnail']; ?>" />
               			</a>
               			<p><? echo $video['video_description']; ?></p>
               		</div></div>
               	<? endforeach; ?>
               </div>

     </div>            		
     <a class="arrow left"></a>
     <a class="arrow right"></a>
</div>
<?
endif;
endfor;
?>




<?
for ($i=1; $i<=3; $i++):
if ($node->{'field_project_extras'.$i}[0]['video_id'] != null):
?>
<h3 style="display:none;"><? echo $node->{'field_project_extras'.$i.'_title'}[0]['view'] ?></h3>

<div class="InfiniteCarousel Extras">
     <div class="Wrapper" id="project-carousel">  

          <div id="extras<? echo $i; ?>-carousel" class="list video-thumb-carousel">
          	<? foreach($node->{'field_project_extras'.$i} as $video): ?>
          		<div class="views-row">
          			<a href="#<? echo $video['video_id']; ?>" class="video-thumb">
          				<img src="<? echo $video['video_thumbnail']; ?>" />
          			</a>
               		<p><? echo $video['video_description']; ?></p>
          		</div>
          	<? endforeach; ?>
          </div>

     </div>            		
     <a class="arrow left"></a>
     <a class="arrow right"></a>
</div>
<?
endif;
endfor;
?>

                    <!-- carousels end -->
                    </div>

               
               </div>
 
          
          </div>

<?php $caseStudy = vuguru_casestudy($field_project_casestudy[0]['nid']); ?>
          
          <div class="Right">
               <div class="Sponsors">
                    <? if (!empty($field_project_sponsors[0]['view'])): ?>
                    <h3 style="display:none;">Sponsors</h3>
                    <ul>
                    <? for ($i=0; $i<sizeof($field_project_sponsors); $i++): ?>
                    	<li><? if (!empty($field_project_sponsors[$i]['view'])) print content_format('field_project_sponsors', $field_project_sponsors[$i], 'image_plain'); ?> </li>
                    <? endfor; ?>
                    </ul>
                    <? endif; ?>
               </div>
          
               <div class="Link">
                    <a style="cursor:pointer;" class="cr">Credits</a>
                    
                    <div id="project_credits"><div class="cross"></div><div class="Inner">
                    	<? print content_format('field_project_credits', $field_project_credits[0]); ?>
                    </div></div>
                    
                    
                    <div class="social">
                         <? print $service_links_rendered; ?>
                    </div> 
               </div>
          
               <? print $node->content['body']['#value']; ?>
                         
               <div class="Links">
                    <? if (!empty($field_project_links[0]['view'])): ?>
                    <div class="h">Links</div>
                    <? endif; ?>
                    <div class="LLeft">
                         <? if (!empty($field_project_links[0]['view'])): ?>
                         <h3 style="display:none;">Links</h3>
                         <ul>
                         <? for ($i=0; $i<sizeof($field_project_links); $i++): ?>
                         	<li><? if (!empty($field_project_links[$i]['view'])) print content_format('field_project_links', $field_project_links[$i]); ?> </li>
                         <? endfor; ?>
                         </ul>
                         <? endif; ?>
                    </div>
                    <?php if ($field_project_casestudy[0]['nid']): ?>
                    <div class="CStudy">
                         <div class="h">Case Study</div>
                         <p>Find out about this project and how we achieved results.</p>
                         <a class="link"></a>
                    </div>
                    <?php endif; ?>               
               </div>
          
          </div>
          <div class="clr"></div>

<div class="CStudyItem">
<div class="Cross"></div>
<div class="Top">
     <a class="VideoLink">Video</a>
</div>
<div class="Left">
<?php
$distribution_body = strip_tags($caseStudy->field_case_distribution_body[0]['value']);
$finance_body = strip_tags($caseStudy->field_case_finance_body[0]['value']);
$ad_body = strip_tags($caseStudy->field_case_ad_body[0]['value']);
$multiplatform_body = strip_tags($caseStudy->field_case_multiplatform_body[0]['value']);
$international_body = strip_tags($caseStudy->field_case_international_body[0]['value']);
$format_body = strip_tags($caseStudy->field_case_format_body[0]['value']);
?>

<div class="Link Link00"><span>Main</span></div>

<?php if (!empty($distribution_body)): ?>
     <div class="Link Link01"><span>Distribution</span></div>
<?php endif;?>
     
<?php if (!empty($finance_body)): ?>
     <div class="Link Link02"><span>Finance</span></div>
<?php endif;?>
     
<?php if (!empty($multiplatform_body)): ?>
     <div class="Link Link03"><span>Multiplatform</span></div>
<?php endif;?>
     
<?php if (!empty($$ad_body)): ?>
     <div class="Link Link04" style="background-position: 153px 19px;"><span>Advertising &amp; Sponsorship</span></div>
<?php endif;?>
     
<?php if (!empty($international_body)): ?>
     <div class="Link Link05"><span>International</span></div>
<?php endif;?>
     
<?php if (!empty($format_body)): ?>
     <div class="Link Link06"><span>Format</span></div>
<?php endif;?>
     



</div>
<div class="Right">

<!-- case study start -->
<?php if (isset($field_project_casestudy[0]['nid']) and ($field_project_casestudy[0]['nid']>0)) : ?>



<div id="project_casestudy">

     <!-- whitepapre -->
     <div class="Whitepaper"><? print content_format('field_case_whitepaper', $caseStudy->field_case_whitepaper[0]); ?></div>
     
<h1><?php print $caseStudy->title; ?></h1>
<div class="CSItem CSIntro" style="display:block;">
     <div class="img"><!-- tady bude image --></div>
     <div class="txt">
     <!-- intro -->
     <h2><? print content_format('field_subtitle', $caseStudy->field_subtitle[0]); ?></h2>
     
     <? print content_format('field_case_intro_title', $caseStudy->field_case_intro_title[0]); ?>
     <? print content_format('field_case_intro_body', $caseStudy->field_case_intro_body[0]); ?>
     </div>
     <div class="clr"></div>
</div>




<div class="CSItem CSDist">
<!-- dist -->
<? if (!empty($caseStudy->field_case_distribution_image[0]['filename'])) print content_format('field_case_distribution_image', $caseStudy->field_case_distribution_image[0], 'image_plain'); ?>
<?

if (!empty($distribution_body)) 
	print content_format('field_case_distribution_body', $caseStudy->field_case_distribution_body[0]);
?>

</div>

<div class="CSItem CSFin">
<!-- fin -->
<? if (!empty($caseStudy->field_case_finance_image[0]['filename'])) print content_format('field_case_finance_image', $caseStudy->field_case_finance_image[0], 'image_plain'); ?>
<?
if (!empty($finance_body)) 
	print content_format('field_case_finance_body', $caseStudy->field_case_finance_body[0]);
?>

</div>

<div class="CSItem CSMulti">
<!-- mltplatfrm -->
<? if (!empty($caseStudy->field_case_multiplatform_image[0]['filename'])) print content_format('field_case_multiplatform_image', $caseStudy->field_case_multiplatform_image[0], 'image_plain'); ?>
<?
if (!empty($multiplatform_body)) 
	print content_format('field_case_multiplatform_body', $caseStudy->field_case_multiplatform_body[0]);
?>
</div>

<div class="CSItem CSAdv">
<!-- adv -->
<? if (!empty($caseStudy->field_case_ad_image[0]['filename'])) print content_format('field_case_ad_image', $caseStudy->field_case_ad_image[0], 'image_plain'); ?>
<?
if (!empty($ad_body)) 
	print content_format('field_case_ad_body', $caseStudy->field_case_ad_body[0]);
?>
</div>


<div class="CSItem CSInternational">
<!-- intrntnl -->
<? if (!empty($caseStudy->field_case_international_image[0]['filename'])) print content_format('field_case_international_image', $caseStudy->field_case_international_image[0], 'image_plain'); ?>
<?
if (!empty($international_body)) 
	print content_format('field_case_international_body', $caseStudy->field_case_international_body[0]);
?>
</div>


<div class="CSItem CSForma">
<!-- format -->
<? if (!empty($caseStudy->field_case_format_image[0]['filename'])) print content_format('field_case_format_image', $caseStudy->field_case_format_image[0], 'image_plain'); ?>
<?
if (!empty($format_body)) 
	print content_format('field_case_format_body', $caseStudy->field_case_format_body[0]);
?>
</div>

<div class="CSItem CSVideo">
<!-- video -->


               <? $playerKey = 'AQ~~,AAAAnrfspOE~,oi7tkKtPiVIqXi5A6GmpCLQsBRISWaKU'; ?>
               <script>
               	playerId = "<? echo variable_get('brightcove_player', '') ?>";
               	playerKey = "<? echo $playerKey; ?>";
               </script>
               <div id="video-player-wrapper2">
                   <object id="bc-player2" class="BrightcoveExperience">
               	  <param name="bgcolor" value="#FFFFFF" />
               	  <param name="width" value="560" />
               	  <param name="height" value="375" />
               	  <param name="playerID" value="<? echo variable_get('brightcove_player', '') ?>" />
               	  <param name="@videoPlayer" value="<? echo $node->field_project_trailer[0]['video_id']; ?>" />
               	  <param name="playerKey" value="<? echo $playerKey; ?>" />
               	  <param name="isVid" value="true" />
               	  <param name="isUI" value="true" />
               	  <param name="wmode" value="transparent" />
               	  <param name="dynamicStreaming" value="true" />
               	</object>
               	<script type="text/javascript">brightcove.createExperiences();</script>
               </div>


</div>



</div>
<!-- case study finish -->
<?php endif; ?>

</div>




<div class="clr"></div>
</div>







<?
	//if (!empty($node->case_study_path)) echo l('Case Study', $node->case_study_path, array('html'=>TRUE, 'attributes'=>array('class'=>'case-study-link')));
?>



<?
	//if (!empty($node->credits_path)) echo l('Credits', $node->case_study_path, array('html'=>TRUE, 'attributes'=>array('class'=>'case-study-link')));
?>





     </div>

</div>
