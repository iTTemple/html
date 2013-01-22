<div class="ProjectMain Library">
     <h1>Library Projects</h1>
     <h2 style="display:none;"><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h2>
     
     <div class="left-sidebar ProjectMainMenu">
          <div class="FirstItem"><div class="Inner"></div><div class="Unpack"></div></div>
     		<? print $secondary_links; ?>
     </div>
     
     <div class="ProjectMainInner">
     
     <? print $secondary_links_javascript; ?>
     
     <div class="projects-content">
               <div class="Left">
                    <div class="Intro">
                         <?php print $node->content['body']['#value']; ?>
                    </div>
     		   
          		<div class="project-highlighted-top">
          			<? print views_embed_view('project', 'block_1', $field_project_highlighted_top[0]['nid']); ?>
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
          			            <? print views_embed_view('project', 'block_3', 7); ?>
          			     </div>
                         </div>            		
                         <a class="arrow left"></a>
                         <a class="arrow right"></a>
          		</div>
          	   </div>
     
               </div>
               <div class="Right">
                    <div class="Link">
                         <a href="/projects">Current Projects</a>
                    </div>

          		<div class="project-highlighted-second">
          			<? print views_embed_view('project', 'block_2', $field_project_highlighted_second[0]['nid']); ?>
          		</div>
          		
          		<div class="project-highlighted-third">
          			<? print views_embed_view('project', 'block_2',$field_project_highlighted_third[0]['nid']); ?>
          		</div>
               
               </div>
	         <div class="clr"></div>

     		

     </div>
     </div>
</div>
