<div class="homepageWrapper">
     <h1><?php print $node->title; ?></h1>
     
     <div class="home-panel">
     	<div class="landing-img">
     		<? //print content_format('field_home_landing_img', $field_home_landing_img[0], 'image_plain'); ?>
     	</div>
     	
     	<div class="switchable-img">
     		<? print content_format('field_home_hoverable1_img', $field_home_hoverable1_img[0], 'image_plain'); ?>
     		<? print content_format('field_home_hoverable2_img', $field_home_hoverable2_img[0], 'image_plain'); ?>
     		<? print content_format('field_home_hoverable3_img', $field_home_hoverable3_img[0], 'image_plain'); ?>
     		<? print content_format('field_home_hoverable4_img', $field_home_hoverable4_img[0], 'image_plain'); ?>
     		<? print content_format('field_home_hoverable5_img', $field_home_hoverable5_img[0], 'image_plain'); ?>
     		<? print content_format('field_home_hoverable6_img', $field_home_hoverable6_img[0], 'image_plain'); ?>
     	</div>
     	
     	<a href="#" rel="1" class="gbutton title-1"><? print content_format('field_home_hoverable1_title', $field_home_hoverable1_title[0]); ?></a>
     	<a href="#" rel="2" class="gbutton title-2"><? print content_format('field_home_hoverable2_title', $field_home_hoverable2_title[0]); ?></a>
     	<a href="#" rel="3" class="gbutton title-3"><? print content_format('field_home_hoverable3_title', $field_home_hoverable3_title[0]); ?></a>
     	
     	<div class="banner banner-left banner-1">
     		<h4><? print content_format('field_home_hoverable1_title', $field_home_hoverable1_title[0]); ?> </h4>
     		<p>
     	    <? print content_format('field_home_hoverable1_desc', $field_home_hoverable1_desc[0]); ?>
     	  </p>
     	</div><div class="banner banner-right banner-1"></div>
     	<div class="banner banner-left banner-2">
     		<h4><? print content_format('field_home_hoverable2_title', $field_home_hoverable2_title[0]); ?></h4>
     		<p>
     	    <? print content_format('field_home_hoverable2_desc', $field_home_hoverable2_desc[0]); ?>
     	  </p>
     	</div><div class="banner banner-right banner-2"></div>
     	<div class="banner banner-left banner-3">
     		<h4><? print content_format('field_home_hoverable3_title', $field_home_hoverable3_title[0]); ?></h4>
     		<p>
     	    <? print content_format('field_home_hoverable3_desc', $field_home_hoverable3_desc[0]); ?>
     	  </p>
     	</div><div class="banner banner-right banner-3"></div>
     	
     </div>
     
     <div class="home-bottom">
     	<div class="column column-1">
     		<h2 style="cursor:pointer;"><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h2>
     		<?php print $node->content['body']['#value']; ?>
     	</div>	
		<?php
			$link1 = substr($field_home_latest[0]['view'], strpos($field_home_latest[0]['view'], '"')+1);
			$link1 = substr($link1, 0, strpos($link1, '"'));
			$link2 = substr($field_home_how_we_work[0]['view'], strpos($field_home_how_we_work[0]['view'], '"')+1);
			$link2 = substr($link2, 0, strpos($link2, '"'));
		?>
     	<div class="column column-2">		
     		<div class="column-header"><?php print content_format('field_home_box1_header', $field_home_box1_header[0]); ?>
     		</div>		           
     		<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">         
     			<div class="views-field-title" style="top:40px;">                
     				<span class="field-content">
     					<a href="<?php echo $link1; ?>"><?php print content_format('field_home_box1_title', $field_home_box1_title[0]); ?></a>
     				</span>  
     			</div>     
     			<div class="views-field-field-project-image-fid">                
     				<span class="field-content">
     					<a href="<?php echo $link1; ?>" class="imagecache imagecache-project-portrait-thumb imagecache-linked imagecache-project-portrait-thumb_linked">
     						<? print content_format('field_home_box1_image', $field_home_box1_image[0], 'image_plain'); ?></a>
     				</span>  
     			</div>     
     			<div class="views-field-field-tagline-value" style="top:70px;">                
     				<span class="field-content"><?php print content_format('field_home_box1_subtitle', $field_home_box1_subtitle[0]); ?>
     				</span>  
     			</div>     
     			<div class="views-field-nid">                
     				<span class="field-content">
     					<a href="<?php echo $link1; ?>">&gt;</a>
     				</span>  
     			</div>  
     		</div>    
     		 	
     	</div>			
     	<div class="column column-3">		
     		<div class="column-header"><?php print content_format('field_home_box2_header', $field_home_box2_header[0]); ?>
     		</div>		           
     		<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">         
     			<div class="views-field-title" style="top:40px;">                
     				<span class="field-content">
     					<a href="<?php echo $link2; ?>"><?php print content_format('field_home_box2_title', $field_home_box2_title[0]); ?></a>
     				</span>  
     			</div>     
     			<div class="views-field-field-project-image-fid">                
     				<span class="field-content">
     					<a href="<?php echo $link2; ?>" class="imagecache imagecache-project-portrait-thumb imagecache-linked imagecache-project-portrait-thumb_linked">
     						<? print content_format('field_home_box2_image', $field_home_box2_image[0], 'image_plain'); ?></a></a>
     				</span>  
     			</div>     
     			<div class="views-field-field-tagline-value" style="top:70px;">                
     				<span class="field-content"><?php print content_format('field_home_box2_subtitle', $field_home_box2_subtitle[0]); ?>
     				</span>  
     			</div>     
     			<div class="views-field-nid">                
     				<span class="field-content">
     					<a href="<?php echo $link2; ?>">&gt;</a>
     				</span>  
     			</div>  
     		</div>    
     		 	
     	</div>	
     </div>
     
     <div class="clr"></div>     
     <span class="HOMEPAGE-scrollTo"></span>
</div>

<!-- -->
<div class="HOMEPAGE-content">

<div class="usWrapper">
<? $us = vuguru_homepage_us(); ?>
     <div class="usScrollTo"></div>
     <div class="usWrapperHead">
          <div class="Inner">
               <span class="arrowTop">Home</span>
               <h1><?php print $us->title; ?></h1>
          </div>
     </div>
     <div class="usWrapperBody">
          <div id="inner">
          	<h2><? print content_format('field_subtitle', $us->field_subtitle[0]); ?></h2>
          	<div class="us-motto clearfix">
          		<?php print $us->content['body']['#value']; ?>
          	</div>
          	<div class="us-main-blocks clearfix">
				<div class="column">
					<? echo l(content_format('field_us_images', $us->field_us_images[0], 'image_plain'), 'node/5', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
					<? echo l(content_format('field_us_titles', $us->field_us_titles[0]), 'node/5', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
					<p class="us-desc"><? echo content_format('field_us_descriptions', $us->field_us_descriptions[0]); ?></p>   		
					<? echo l('&gt;', 'node/5', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
				</div>
				<div class="column">
					<? echo l(content_format('field_us_images', $us->field_us_images[1], 'image_plain'), 'node/6', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
					<? echo l(content_format('field_us_titles', $us->field_us_titles[1]), 'node/6', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
					<p class="us-desc"><? echo content_format('field_us_descriptions', $us->field_us_descriptions[1]); ?></p>
					<? echo l('&gt;', 'node/6', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
				</div>
				<div class="column">
					<? echo l(content_format('field_us_images', $us->field_us_images[2], 'image_plain'), 'node/7', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
					<? echo l(content_format('field_us_titles', $us->field_us_titles[2]), 'node/7', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
					<p class="us-desc"><? echo content_format('field_us_descriptions', $us->field_us_descriptions[2]); ?></p>
					<? echo l('&gt;', 'node/7', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
				</div>
				<div class="column last">
					<? echo l(content_format('field_us_images', $us->field_us_images[3], 'image_plain'), 'node/8', array('html'=>TRUE, 'attributes'=>array('class'=>'us-image'))); ?>
					<? echo l(content_format('field_us_titles', $us->field_us_titles[3]), 'node/8', array('html'=>TRUE, 'attributes'=>array('class'=>'us-title'))); ?>
					<p class="us-desc"><? echo content_format('field_us_descriptions', $us->field_us_descriptions[3]); ?></p>
					<? echo l('&gt;', 'node/8', array('html'=>TRUE, 'attributes'=>array('class'=>'us-arrow'))); ?>
				</div>
          	</div>
          </div>
     </div>
     <div class="clr"></div>
</div>

<div class="newsWrapper">
<? $news = vuguru_homepage_news(); ?>
     <div class="newsScrollTo"></div>
     <div class="newsWrapperInner">
     
          <ul class="news-years-list" style="display:none;">
			<?
			$years = vuguru_news_years();
			$lastYear = current($years);
			if (is_array($years)) foreach ($years as $_year): ?>
			<li class=""><a href="/news/archive/<? echo $_year['year'] ?>" class="year_link year-<? echo $_year['year'] ?>"><? echo $_year['year'] ?></a></li>
			<? break; endforeach; ?>
			</ul>
     
     <ul id="newsArchiveUl" class="news-years-list" style="left:auto; right:0px;">
     <li class=""><a href="/news/archive/<? echo $lastYear['year'] ?>" class="year_link year-<? echo $lastYear['year'] ?>">Archive</a></li>
     </ul>
     
          <span class="arrowTop">Home</span>
          <h1><?php print $news->title; ?></h1>
          
          <h2 class="subtitle"><?php print content_format('field_subtitle', $news->field_subtitle[0]); ?></h2>
          
          <div class="news-content clearfix">
          	
          	<div class="left-column">
          		<div class="news-highlighted-top" style="position:relative;"><div class="MainNewScrollHere" style="top:115px; position:absolute;"></div>
          		<? print views_embed_view('news', 'block_1', $news->field_news_highlighted_top[0]['nid']); ?>
          		</div>
          	</div>
          	
          	<div class="right-column">
          		<div class="news-highlighted-secondary">
          		<? print views_embed_view('news', 'block_2', $news->field_news_highlighted_second[0]['nid']); ?>
          		</div>
          		<div class="news-highlighted-secondary">
          		<? print views_embed_view('news', 'block_2', $news->field_news_highlighted_third[0]['nid']); ?>
          		</div>
          		<div class="news-highlighted-secondary">
          		<? print views_embed_view('news', 'block_2', $news->field_news_highlighted_fourth[0]['nid']); ?>
          		</div>
          	</div>
          </div>

     </div>
</div>

<!--  projects wrapper start -->
<div class="projectsWrapper">
	<div class="projectsScrollTo"></div>
    <div class="projectsWrapperInner">
     
               <span class="arrowTop">Home</span>
<? $projects = vuguru_homepage_projects(); ?>

<? $projectsMenu = vuguru_homepage_projects_menu(); ?>
     
<div class="ProjectMain">
     <h1><?php print $projects->title; ?></h1>
     <h2 style="display:none;"><?php print content_format('field_subtitle', $projects->field_subtitle[0]); ?></h2>
     
     <div class="left-sidebar ProjectMainMenu ProjectMainPageMenu">
          <div class="FirstItem"><div class="Inner"></div><div class="Unpack"></div></div>
          
     		<ul class="menu">
     		<?php echo $projectsMenu; ?>
			</ul>     
     </div>
     
     <div class="ProjectMainInner">
     
     <? print $secondary_links_javascript; ?>
     
     <div class="projects-content">
               <div class="Left">
                    <div class="Intro">
                         <?php print $projects->content['body']['#value']; ?>
                    </div>
     		   
          		<div class="project-highlighted-top">
          			<? print views_embed_view('project', 'block_1', $projects->field_project_highlighted_top[0]['nid']); ?>
          		</div>
          		<div class="clr"></div>
                    
                    
                 <div class="CarouselsBox">   
                    <div class="Tabs">
                         <div class="Tab Active"><span>Vuguru Projects</span></div>
                         <div class="clr"></div>
                    </div>
                    <div class="InfiniteCarousel">
                         <div class="Wrapper" id="project-carousel">     
                              <div class="list">                         
          			            <? print views_embed_view('project', 'block_3', 6); ?>
          			     </div>
                         </div>            		
                         <a class="arrow left"></a>
                         <a class="arrow right"></a>
          		</div>
          	   </div>
     
               </div>
               <div class="Right">
                    <div class="Link">&nbsp;
                    </div>

          		<div class="project-highlighted-second">
          			<? print views_embed_view('project', 'block_2', $projects->field_project_highlighted_second[0]['nid']); ?>
          		</div>
          		
          		<div class="project-highlighted-third">
          			<? print views_embed_view('project', 'block_2', $projects->field_project_highlighted_third[0]['nid']); ?>
          		</div>
               
               </div>
	         <div class="clr"></div>

     		

     </div>
     </div>
</div>
     
     
     
    </div>
</div>
<!-- projects wrapper end -->



<div class="termsWrapper">
<div id="footer-page-terms" class="termsWrapperInner">

               <span class="arrowTop">Home</span>
		  <? $contact = vuguru_homepage_terms(); ?>
          <h1><?php print $contact->title; ?></h1>
          <h2 style="margin-top:10px; padding-bottom:10px;" class="subtitle"><?php print content_format('field_subtitle', $contact->field_subtitle[0]); ?></h2>
          <div class="contact-content clearfix">
          	<div class="termspolicy-body">
          		<?php print $contact->content['body']['#value']; ?>
               </div>
          	<div class="termspolicy-image">
          		<? echo content_format('field_page_image', $contact->field_page_image[0], 'image_plain'); ?>
            </div>		        
          </div>
</div> <!-- footer-page-terms -->
</div>

<div class="privacyWrapper">
<div id="footer-page-policy" class="privacyWrapperInner">

               <span class="arrowTop">Home</span>
		  <? $contact = vuguru_homepage_policy(); ?>
          <h1><?php print $contact->title; ?></h1>
          <h2 style="margin-top:10px; padding-bottom:10px;" class="subtitle"><?php print content_format('field_subtitle', $contact->field_subtitle[0]); ?></h2>
          <div class="termspolicy-content clearfix">
          	<div class="termspolicy-body">
          		<?php print $contact->content['body']['#value']; ?>
               </div>
          	<div class="termspolicy-imagee">
          		<? echo content_format('field_page_image', $contact->field_page_image[0], 'image_plain'); ?>
            </div>		        
          </div>
</div> <!-- footer-page-policy -->
</div>

<div class="contactWrapper">
<div id="footer-page-contact" class="contactWrapperInner">

               <span class="arrowTop">Home</span>
		  <? $contact = vuguru_homepage_contact(); ?>
          <h1><?php print $contact->title; ?></h1>
          <h2 class="subtitle"><?php print content_format('field_subtitle', $contact->field_subtitle[0]); ?></h2>
          <div class="contact-content clearfix">
          	<div class="contact-body">
          		<?php print $contact->content['body']['#value']; ?>
               </div>
          	<div class="contact-image">
          		<? echo content_format('field_page_image', $contact->field_page_image[0], 'image_plain'); ?>
            </div>		        
          </div>
</div> <!-- footer-page-contact -->
</div>

<script>
$(document).ready(function(){
 
	var morebody = $(".news-highlighted-top .views-field-body p").not(":first-child");
	morebody.hide();
	
	var expandLink = $('<a class="expand" style="cursor:pointer;"></a>'); 
	$(".news-highlighted-top .views-field-body .field-content").append(expandLink);
	var collapseLink = $('<a class="collapse" style="cursor:pointer;">close article</a>');
	$(".news-highlighted-top .views-field-body .field-content").append(collapseLink);
	collapseLink.hide();
	
	$(expandLink).click(function() {
		morebody.slideDown();
		expandLink.hide();
		collapseLink.show();
		event.stopPropagation();
		return false;
	});
	
	$(collapseLink).click(function() {
		morebody.slideUp();
		expandLink.show();
		collapseLink.hide();
		event.stopPropagation();
		return false;
	});
	
});

</script>



</div>
<!--  -->
   