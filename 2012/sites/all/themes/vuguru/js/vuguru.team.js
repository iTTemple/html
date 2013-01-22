$(document).ready(function() { 

     if (isiPad==1){ 
          scrollSpeed=0;    
          $("div.ProjectItem .VideoWrapperTop div.ipadOptim").each(function(){
               $(this).show();
          });    
     }else{ 
          scrollSpeed=1000; 
     } /* rozlišujeme pro ipad a ostatni */  
     
     /* PROJECTS */
     /* top menu */
     var FirstItem = $("div.ProjectMainMenu ul.menu li.first").html();
     $("div.ProjectMainMenu ul.menu li.first").remove();
     $("div.ProjectMainMenu div.FirstItem div.Inner").html(FirstItem);
     /* */
     $(".ProjectMainMenu ul").append("<li class='lib'><a href='/projects/library'>Library</a></li>");
     $(".ProjectMainMenu .FirstItem .Inner a").removeAttr("href");
     if (isiPad==0){
          $("div.ProjectMainMenu div.FirstItem").mouseenter(function(){
               $("div.ProjectMainMenu ul").show();
               $("div.ProjectMainMenu div.FirstItem div.Unpack").css({ "width":"155px" });
               $("div.ProjectMainMenu").css({ "height":"55px" })
          });
          /* */
          $("div.ProjectMainMenu").mouseleave(function(){
               $("div.ProjectMainMenu ul").hide();
               $("div.ProjectMainMenu div.FirstItem div.Unpack").css({ "width":"33px" });
          });
     }
     if (isiPad==1){
          $("div.ProjectMainMenu div.FirstItem").click(function(){
               $("div#video-player-wrapper").toggle();
               $("div.ProjectMainMenu ul").toggle();
               $("div.ProjectMainMenu div.FirstItem div.Unpack").css({ "width":"155px" });
               $("div.ProjectMainMenu").css({ "height":"55px" })
          });
          /* 
          $("div.ProjectMainMenu").mouseleave(function(){
               $("div.ProjectMainMenu ul").hide();
               $("div.ProjectMainMenu div.FirstItem div.Unpack").css({ "width":"33px" });
          });
          */
     }
     
     $("div.ProjectMain div.Left div.project-highlighted-top .views-field-nid a, div.ProjectMain div.Right div.views-row .views-field-nid a").html(''); //odstranění šipky
     
     $("div.Link a.cr").click(function(){
          $("div#project_credits").toggle();
     });
     $("div#project_credits div.cross").click(function(){
          $("div#project_credits").hide();
     })   
     $("div.CStudyItem a.VideoLink").click(function(){
          $(".CSItem").hide();
          $(".CSVideo").show();
     });  
     $("div.CStudyItem div.Link00").click(function(){
          $(".CSItem").hide();
          $(".CSIntro").show();
     });  
     $("div.CStudyItem div.Link01").click(function(){
          $(".CSItem").hide();
          $(".CSDist").show();
     });  
     $("div.CStudyItem div.Link02").click(function(){
          $(".CSItem").hide();
          $(".CSFin").show();
     });  
     $("div.CStudyItem div.Link03").click(function(){
          $(".CSItem").hide();
          $(".CSMulti").show();
     });  
     $("div.CStudyItem div.Link04").click(function(){
          $(".CSItem").hide();
          $(".CSAdv").show();
     });  
     $("div.CStudyItem div.Link05").click(function(){
          $(".CSItem").hide();
          $(".CSInternational").show();
     });  
     $("div.CStudyItem div.Link06").click(function(){
          $(".CSItem").hide();
          $(".CSForma").show();
     });  
     $("div.CStudyItem div.Cross").click(function(){
          $("div.CStudyItem").hide();
          $("div.ProjectMainMenu").show();   
          $("div#video-player-wrapper").show();       
     });
     $("div.Whitepaper a").html("Whitepaper");
     $("div.Links div.CStudy").click(function(){
          $("div.CStudyItem").show();
          $("div.ProjectMainMenu").hide();
          $("div#video-player-wrapper").hide();
     });

     $("a.video-thumb").click(function(){
          //
          $("body").scrollTo( $(".ProjScrollTo"), scrollSpeed );
     });
     
     
     /* end projects */


     //alert('LZ Carousel v1');
     $("div.InfiniteCarousel").each(function(){
          Width = 95;
          Push = Width*2;
          Visible = 5;
          
          var CountItems = $(this).children("div.Wrapper").children("div.list").children("div.views-row").size(); 
          //alert(CountItems);
          if (CountItems <= '5') {
               $(this).children("div.InfiniteCarousel a.arrow").hide();
          }else{
               $(this).children("div.Wrapper div.list").css("position","absolute");
               $(this).children("div.Wrapper div.list").css("left","-"+Width+"px");
               $(this).children("div.InfiniteCarousel a.arrow").show();
          }
     }); 
     $("div.InfiniteCarousel a.left").hide();

     $("a.left").click(function(){  
          //alert('left');  
          $(this).parent("div.InfiniteCarousel").children("a.right").show();       
          var listPosition = $(this).parent("div.InfiniteCarousel").children("div.Wrapper").children("div.list").position();
          if ( listPosition.left!=0 ){
               $(this).parent("div.InfiniteCarousel").children("div.Wrapper").children("div.list").animate({'left': "+=100px"}, 250, function(){
                    if (listPosition.left==-100){ $(this).parent("div.Wrapper").parent("div.InfiniteCarousel").children("a.left").hide(); }
               }); 
          }
          /**/
     });
     $("a.right").click(function(){  
          //alert('right'); 
          $(this).parent("div.InfiniteCarousel").children("a.left").show();   
          var CountItems = $(this).parent("div.InfiniteCarousel").children("div.Wrapper").children("div.list").children("div.views-row").size(); 
          var PushMe = (5-CountItems)*100;
          var listPosition = $(this).parent("div.InfiniteCarousel").children("div.Wrapper").children("div.list").position();
          if ( listPosition.left!=PushMe ){
               $(this).parent("div.InfiniteCarousel").children("div.Wrapper").children("div.list").animate({'left': "-=100px"}, 'fast', function(){
                    if (listPosition.left==(PushMe+100)){ $(this).parent("div.Wrapper").parent("div.InfiniteCarousel").children("a.right").hide(); }
               });
          }

     });   
     

     /* end carousel */

     /* CAROUSEL FILTER */  
      
     $("div.ProjectItem div.InfiniteCarousel.Trailers").show();
     $("div.ProjectItem div.Tabs div.Tab#Trailers").addClass("Active");
     $("div.ProjectItem div.Tabs div.Tab").click(function(){
          $("div.InfiniteCarousel").hide();
          $("div.comingSoon").hide();
          if ( $(this).attr("id")=="Trailers" ){
               $("div.InfiniteCarousel.Trailers").show();
               $("h3.Clips").hide(); 
               var howmany = $(".Carousels .Trailers").length;
               if (howmany==0){
                    $("div.Carousels").append('<div class="comingSoon" style="background-color:#1B1716; height:93px; margin-bottom:15px; position:relative; width:561px;"><p style="padding:15px; margin:0px; color:white; font-size:14px;">Coming soon!</p></div>');
               }
          }
          if ( $(this).attr("id")=="Clips" ){
               $("h3.Clips").show();
               $("div.InfiniteCarousel.Clips").show();
               var howmany = $(".Carousels .Clips").length;
               if (howmany==0){
                    $("div.Carousels").append('<div class="comingSoon" style="background-color:#1B1716; height:93px; margin-bottom:15px; position:relative; width:561px;"><p style="padding:15px; margin:0px; color:white; font-size:14px;">Coming soon!</p></div>');
               }
          }
          if ( $(this).attr("id")=="Extras" ){
               $("div.InfiniteCarousel.Extras").show();
               $("h3.Clips").hide(); 
               var howmany = $(".Carousels .Extras").length;
               if (howmany==0){
                    $("div.Carousels").append('<div class="comingSoon" style="background-color:#1B1716; height:93px; margin-bottom:15px; position:relative; width:561px;"><p style="padding:15px; margin:0px; color:white; font-size:14px;">Coming soon!</p></div>');
               }
          }
          $("div.ProjectItem div.Tabs div.Tab").removeClass("Active");
          $(this).addClass("Active");
     });



     // TEAM SECTION


     $("div#team-members-list > div.views-row:even").each(function(){
          $(this).clone().appendTo("div.team-members-Left");
     });
     $("div#team-members-list > div.views-row:odd").each(function(){
          $(this).clone().appendTo("div.team-members-Right");
     });
     $("div.left > div.item").each(function(){ $(this).remove(); });
     
     lengthLeft = $("div.team-members-Left").height();
     lengthRight = $("div.team-members-Right").height();
     
     //$("div.kontrola").html(lengthLeft+" "+lengthRight);
     

     $("div.team-member-Column div.views-field-field-member-thumbnail-fid span.field-content a").live("click", function(){
          return false;
     });
     /*
     $("div.team-member-Column div.views-field-field-member-thumbnail-fid span.field-content a").live("mouseover", function(){
          $("div.team-member-Column div.views-field-field-member-thumbnail-fid").each(function(){
               $(this).hide();
          });
          $(this).parent("span").parent("div.views-field-field-member-thumbnail-fid").show();
     });
     $("div.team-member-Column div.views-field-field-member-thumbnail-fid span.field-content a").live("mouseout", function(){
          $("div.team-member-Column div.views-field-field-member-thumbnail-fid").each(function(){
               $(this).show();
          });
     });
     */     
     
     imgs = $("div#team-members-list-defaultimage img").length;
     imgShow = Math.round(Math.random()*(imgs-1));
     //alert(imgShow);
     $("div#team-members-list-defaultimage img").hide();
     $("div#team-members-list-defaultimage img:eq("+imgShow+")").show();
     
     
     /* */
     if (isiPad==0){
          $("div.team-member-Column div.views-field-field-member-thumbnail-fid span.field-content a").live("mouseover", function(){
               $(this).append('<span class="ImgBorderLeft"></span><span class="ImgBorderTop"></span><span class="ImgBorderRight"></span><span class="ImgBorderBottom"></span>');
               $(this).children("img").hide();
               //$(this).children("img").css("visibility","hidden");
          });
          $("div.team-member-Column div.views-field-field-member-thumbnail-fid span.field-content a").live("mouseleave", function(){
               $(this).children("span").remove();
               $(this).children("img").show();
          });
     }

     
     //alert('LZ Flying v1') .left .item
     $("div.team-member-Column div.views-field-field-member-thumbnail-fid span.field-content a").live('click', function(){
          //alert('sdf');
          $("div.team-member-Column div.views-row").fadeIn(1000);
          $("#team-members-list-defaultimage").fadeOut(500);
          
          
          x = Math.round(Math.random()*2);
          if (lengthLeft>lengthRight){
               var where = "team-members-Right";
               //alert(where);
          }else if (lengthLeft<lengthRight){
               var where = "team-members-Left";
               //alert(where);
          }else if (lengthLeft==lengthRight){
               if ( $(this).parent("span").parent("div").parent("div").parent("div").hasClass("team-members-Right") ){
                    var where = "team-members-Right";
                    //alert(where);
               }
               if ( $(this).parent("span").parent("div").parent("div").parent("div").hasClass("team-members-Left") ){
                    var where = "team-members-Left";
                    //alert(where);
               }     
          }
          $(this).children("span").remove();
          $(this).children("img").show();
          
          $("div.storage div.views-row").clone().appendTo("div."+where).fadeIn(500);
          $("div.storage").html("");

          $(this).parent("span").parent("div").parent("div").clone().appendTo(".storage").hide();
          var c = $(this).parent("span").parent("div").parent("div").attr("class"); 
          var cl = c.split(' '); /* pole, abych se dostal ke classe */
          
          $("#team-members-list-detail").children("div").fadeOut(500); 
          $("#team-members-list-detail").children("."+cl[1]).fadeIn(500); 
     
          $(this).parent("span").parent("div").parent("div").html("").css({ "background-color":"transparent" }).animate({
               height: '1px',
               margin: '0px'
          }, function(){ 
                    $(this).remove();                   
                    lengthLeft = $("div.team-members-Left").height();
                    lengthRight = $("div.team-members-Right").height();
                    what = $(this).attr("class");
                    what = what.substr(5);
                    $("div.right div.inner."+what).fadeIn(500);                    
                    //$("div.kontrola").html(lengthLeft+" "+lengthRight);   

               }
          );

          /*   
          
          x = Math.round(Math.random()*2);
          if (lengthLeft>lengthRight){
               var where = "colRight";
          }else if (lengthLeft<lengthRight){
               var where = "colLeft";
          }else if (lengthLeft==lengthRight){
               if ( $(this).parent("div").hasClass("colRight") ){
                    var where = "colRight";
               }
               if ( $(this).parent("div").hasClass("colLeft") ){
                    var where = "colLeft";
               }     
          }
          $("div.storage div.item").clone().appendTo("div."+where).fadeIn(2000);
          $("div.storage").html("");
          
          $(this).clone().appendTo(".storage").hide();
          var c = $(this).attr("class");
          
          $(this).html("").css({ "background-color":"transparent" }).animate({
               height: '-=24px',
               margin: '0px'
          }, function(){ 
                    $(this).remove();
                    lengthLeft = $("div.colLeft").height();
                    lengthRight = $("div.colRight").height();
                    what = $(this).attr("class");
                    what = what.substr(5);
                    $("div.right div.inner."+what).fadeIn(500);                    
                    $("div.kontrola").html(lengthLeft+" "+lengthRight);   
               }
          );
          */
          
     }); 
     
     


});