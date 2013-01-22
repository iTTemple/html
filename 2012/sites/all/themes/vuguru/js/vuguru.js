var uAgent = navigator.userAgent.toLowerCase();
var isUAIphone = (uAgent.indexOf('iphone')!=-1);
var isUAIpad = (uAgent.indexOf('ipad')!=-1);
if (isUAIphone || isUAIpad) {
	isiPad = 1;
}else {
	isiPad = 0;
}

$(document).ready(function() { 



     $(".views-field-field-story-imagesmall-fid label").hide();
     $("ul.menu > li > ul.menu > li > a").css({ "color":"#999" });
     $("ul.menu > li > ul.menu > li > ul > li > a").css({ "color":"#fff" });
     $("ul.menu > li > ul.menu > li > ul > li > a").mouseover(function(){
          $(this).css({ "color":"#D90D3E" });
     });
     $("ul.menu > li > ul.menu > li > ul > li > a").mouseout(function(){
          $(this).css({ "color":"#fff" });
     });


     /* admin tweaks */
     $("body.logged-in").each(function(){
          $("#main").css("margin-top","35px");
     });
     $("body.section-user, body.section-users, body.section-admin, body.section-node-edit, body.section-node-add").each(function(){
          $("#main").css("margin-top","35px");
          //$("#main-wrapper").css("padding","5px");
          $("#page-wrapper").css({'background' : 'none', 'background-color' : 'white', 'color' : 'black'});
          $("#content .tabs").css({'top' : '-15px'});
     });
     /*
     $("body.node-type-page").each(function(){
          $("#page-wrapper").css({'background' : 'none', 'background-color' : '#181410', 'color' : 'white'});
          $("#content .tabs").css({'top' : '-15px'});
     });
       
     $("div.preview").css("background-color","black");
     $("div.preview div#inner").each(function(){
          $(this).css({ "float" : "none" , "padding" : "5px" });
     });
     */   
     
     /* end  */



     /* homepage */
     /* main imgs */
     //$("div.switchable-img img").hide();
     mImgs = $("div.switchable-img img").length;
     mImgShow = Math.round(Math.random()*(mImgs-1));
     //alert(mImgShow);
     $("div.switchable-img img:eq("+mImgShow+")").show();
     
     $("div.homepageWrapper").parent("#content-area").parent("#content").parent("#main").parent("#main-wrapper").parent("#page").addClass("homepage");
     $("div.homepageWrapper").parent("#content-area").parent("#content").parent("#main").parent("#main-wrapper").addClass("homepage");
     $("div.homepageWrapper").each(function(){
          $("div.real-menu").hide();
          $("div.realFooter").hide();
          $("div.real-menu").empty();
          $("div.fakeFooter").show();
          $("div.fake-menu").show();
          $("ul#newsArchiveUl li").css("background","none");
          $("#footer-wrapper").css("padding-bottom","50px");
     });

     $("a.usLink, a.newsLink, a.contactLink").click(function(){
          //   
     });     
     if (isiPad==1){ 
          scrollSpeed=0; 
          //$("div.usScrollTo, div.newsScrollTo, div.contactScrollTo").css({ "top":"140px", "color":"white" }).html('sdf');
          $("span.HOMEPAGE-scrollTo").css({ "top":"610px" });
          
     }else{ 
          scrollSpeed=1000; 
     } /* rozlišujeme pro ipad a ostatni */     
     $("a.usLink, div.home-bottom div.column-1 h2").click(function(){
          $("#footer-wrapper").css("padding-bottom","400px");
          $("div.usWrapper").show();
          $("div.us-motto").each(function(){
               $(this).columnize({columns:2, balanced:true});    
          });
          $("body").oneTime(100, function(){
               $("body").scrollTo( $(".homepageWrapper .HOMEPAGE-scrollTo"), scrollSpeed );
          });          
          $("div.HOMEPAGE-content > div[class!='usWrapper']").hide();
          $("#footer-wrapper").css("padding-bottom","150px");
     });
     $("a.newsLink").click(function(){
          $("#footer-wrapper").css("padding-bottom","400px");
          $("div.newsWrapper").show();
          $("body").oneTime(100, function(){
               $("body").scrollTo( $(".homepageWrapper .HOMEPAGE-scrollTo"), scrollSpeed );
          });
          $("div.HOMEPAGE-content > div[class!='newsWrapper']").hide();
          $("#footer-wrapper").css("padding-bottom","300px");
     });
     $("a.projectsLink").click(function(){
          $("#footer-wrapper").css("padding-bottom","400px");
          $("div.projectsWrapper").show();
          $("body").oneTime(100, function(){
               $("body").scrollTo( $(".homepageWrapper .HOMEPAGE-scrollTo"), scrollSpeed );
          });          
          $("div.HOMEPAGE-content > div[class!='projectsWrapper']").hide();
          $("#footer-wrapper").css("padding-bottom","300px");
     });
     $("a.contactLink").click(function(){
          $("#footer-wrapper").css("padding-bottom","400px");
          $("div.contactWrapper").show();
          $("body").oneTime(100, function(){
               $("body").scrollTo( $(".homepageWrapper .HOMEPAGE-scrollTo"), scrollSpeed );
          });          
          $("div.HOMEPAGE-content > div[class!='contactWrapper']").hide();
          $("#footer-wrapper").css("padding-bottom","300px");
     });
     $("a.termsLink").click(function(){
          $("#footer-wrapper").css("padding-bottom","500px");
          $("div.termsWrapper").show();
          $("body").oneTime(100, function(){
               $("body").scrollTo( $(".homepageWrapper .HOMEPAGE-scrollTo"), scrollSpeed );
          });          
          $("div.HOMEPAGE-content > div[class!='termsWrapper']").hide();
          $("#footer-wrapper").css("padding-bottom","500px");
     });
     $("a.privacyLink").click(function(){
          $("#footer-wrapper").css("padding-bottom","500px");
          $("div.privacyWrapper").show();
          $("body").oneTime(100, function(){
               $("body").scrollTo( $(".homepageWrapper .HOMEPAGE-scrollTo"), scrollSpeed );
          });
          $("div.HOMEPAGE-content > div[class!='privacyWrapper']").hide();
          $("#footer-wrapper").css("padding-bottom","500px");
     });
     $("span.arrowTop").click(function(){
          //$("body").scrollTo( $("div#main-wrapper"), scrollSpeed);
          $("body").scrollTo( '0px', scrollSpeed);
     });
     
     $("div.news-highlighted-top div.views-field-field-story-image-fid").show();
     
     /* end */

     /* columnize */
     $("div.us-motto").each(function(){
          $(this).columnize({columns:2, balanced:true});    
     });
     
     

     /* proměnná do cookie, kvůli submenu, slide */
     if(undefined===window.currentPage){          
          window.currentPage = [];
     }
     /**/
        
     /* LZ - animations and transitions */
	
	if ($.cookie('last_page')==window.currentPage){
          $("div#secondary-menu > ul > li.expanded > ul").each(function(){
               $(this).show();  
               $(this).children("li.expanded").children("ul").show();/* */
          });
          //alert('minulá:  '+$.cookie('last_page')+' současná: '+window.currentPage);
     }else{
          $("div#secondary-menu > ul > li.expanded > ul").each(function(){
               $(this).slideDown(1500, function(){
                    $(this).children("li.expanded").children("ul").slideDown(1000); 
               });  
          });
     }
     $.cookie('last_page', window.currentPage , { path: '/' });
		

     
     		
     $("h1, div#inner > div.right-column > img, div.us-approach > img").each(function(){
          $(this).fadeIn(1900);
     });
   
     
     
     //$(".news-highlighted-secondary").fadeIn(1000);
     var nNews = $(".news-highlighted-secondary").length;
     for (i=0;i<=nNews-1;i++){
          x = (i+3)*250;
          $(".news-highlighted-secondary:eq("+i+")").oneTime(x, function(){
               //$(this).slideDown(1000);
               $(this).fadeIn(1000);
          });
     }
     
     var nPMenu = $("ul#primary-menu li").length;
     for (i=0;i<=nPMenu-1;i++){
          x = (i+1)*250;
          $("ul#primary-menu li:eq("+i+")").oneTime(x, function(){
               $(this).animate({"top": "+=110px"}, 500);
          });
     }
     $("div.team-members div.views-row").each(function(){
          //
     });     
     
     /*
     var nTeam = $("div.team-members div.views-row").length;
     var TeamH = ((nTeam / 4)*320)+100;
     $("div.team").css("min-height",TeamH);
     for (i=0;i<=nTeam-1;i++){
          x = (i+1)*250;
          $("div.team-members div.views-row:eq("+i+")").oneTime(x, function(){
               $(this).fadeIn(1000);
          });
     }   
     */ 
     
     var nPartners = $("div.partners-grid div.views-row").length;
     var PartnersH = ((nPartners / 4)*320)+100;
     $("div.partners").css("min-height",PartnersH);
     for (i=0;i<=nPartners-1;i++){
          x = (i+1)*250;
          $("div.partners-grid div.views-row:eq("+i+")").oneTime(x, function(){
               //$(this).slideDown(1000);
               $(this).fadeIn(1000);
          });
     }

     var nHPB = $("div.home-panel a.gbutton").length;
     for (i=0;i<=nHPB-1;i++){
          x = (i+1)*300;
          $("div.home-panel a.gbutton:eq("+i+")").oneTime(x, function(){
               $(this).animate({ width: 'show' });
          });
     } 
  
     var nUs = $("div.us-main-blocks div.column").length;
     for (i=0;i<=nUs-1;i++){
          x = (i+1)*250;
          $("div.us-main-blocks div.column:eq("+i+")").oneTime(x, function(){
               //$(this).slideDown(500);
               $(this).animate({ width: 'show' });
          });
     }   
     
     /* end */ 
     
     /* News, opened from QuartersPage - LZ Solution */
     $("div.news_node_item div.column_box").each(function(){
          $(this).columnize({columns:3, balanced:true});     
     });
     $(".news-secondary-cross, div.news_node_item .news-secondary-close").click(function(){
          $("body").scrollTo( $("#page-wrapper"), 1000 );  
          $(this).parent("div").slideUp(1500);   
     });
     $("table.news-quarters a").click(function(){        
          $("body").scrollTo( $("#page-wrapper"), 1000 );
          var x = $(this).attr("class");
          var y = ( x.substr(18) );
          $("div.news_node_item#"+y).hide();
          $("div.news_node_item#"+y).css("top","0px");  
          $("div.news_node_item#"+y).slideDown(1500);   
          return false;
     });
     
     $("span.pprint2").click(function(){
          $(this).hide();
          $(this).parent(".column").parent(".column_box").parent("div.news_node_item").printArea();
          $(this).show();
     });
     
     /* end */
     $("div.news-highlighted-top .views-field-title a").click(function(){          
          $(".news-highlighted-top .field-content p").slideDown(500);
          $(".news-highlighted-top a.expand").hide();
          $(".news-highlighted-top a.collapse").show();
          $("body").oneTime(500, function(){
                    $("body").scrollTo( $(".MainNewScrollHere"), 1000 );
          });

          return false;
     });
     

     

  
  
  // Hack menu items in Us/Parnters submenu
  $("#secondary-menu a[title='Distributors']").css("color", "#808080");
  $("#secondary-menu a[title='Advertisers']").css("color", "#808080");
  
  // Hack home switchable banner
  var bannerOutdent = Math.ceil(( $("body").width() - $(".home-panel").width() )/2);
  $(".node-type-home .banner-left").css("left", "-"+bannerOutdent+"px");
  $(".node-type-home .banner-left").css("padding-left", bannerOutdent+"px");
  $(".node-type-home .banner-right").css("right", "-"+(bannerOutdent+0)+"px");
  $(".node-type-home .banner-right").css("padding-right", (bannerOutdent+0)+"px");
  /* 40 pixels added */
  
	
// 	$(".home-panel .switchable-img .imagefield-field_home_hoverable1_img").addClass("active");
	
	// Home - rollover buttons
  buttonsTrigger = 0;
  $(".gbutton").bind("mouseenter", function(){
  	// clear all timed actions
  	//buttonsTrigger = 1;  	
  		
  	$(this).stopTime();
		
		var n = $(this).attr("rel");
  	
  	// change image
//   	if (  $(".home-panel .switchable-img img.active").hasClass("imagefield-field_home_hoverable"+n+"_img")==false  ) {
// 	  	$(".home-panel .switchable-img img.active").fadeOut(175, function(){ $(".home-panel .switchable-img .imagefield-field_home_hoverable"+n+"_img").fadeIn(300); });
// 	  	$(".home-panel .switchable-img img").removeClass("active");
// 	  	$(".home-panel .switchable-img .imagefield-field_home_hoverable"+n+"_img").addClass("active");
//   	}
  	
		//bounce
  	bounceHomeButtons(n);
  	$("div.banner").show();
		
		//after while display banner
// 		$(this).oneTime(1200, "showHomeBannerTimer", function(){
			forceHideHomeBanner();               			
			if (buttonsTrigger==0){
			  //alert(buttonsTrigger);
			  showHomeBanner(n);
			}
// 		});	
		
		return false;
	});
	
	$(".gbutton").bind("mouseleave", function(){
		$(".gbutton").removeClass("active");
		hideHomeBanner();
		$(".gbutton").each(function(){
               $(this).removeAttr("style");
               $(this).show();
          });
		return false;
	});
	
	/*
	$(".gbutton").mouseover(function(){
	    if (buttonsTrigger==1){
	         var n = $(this).attr("rel");
	         showHomeBanner(n);
	     }
     });
     */

	
	// NEWS - SECONDARY ARTICLE POPUP
	$(".news-highlighted-secondary .views-field-title a, .news-highlighted-secondary .views-field-nid a").click(function(){
		openSecondaryNews(this);
		return false;
	});
	
	
});

function bounceHomeButtons(n) {
	$(".gbutton").removeClass("active");
	$(".gbutton.title-"+n).addClass("active");
	
     $("a.title-1[class!=active]").css("background-color","#D90D3E");
     $("a.title-2[class!=active]").css("background-color","#0045DE");
     $("a.title-3[class!=active]").css("background-color","#FF8A08");
     
		
	//	return Home Buttons 
	$(".gbutton").not(".active").oneTime(3000, "returnHomeButtons", function(){
		$(this).slideDown(300);
	});
}

function showHomeBanner(n) {
     buttonsTrigger = 1;  
	$(".banner-"+n).children().hide();
	$(".banner-"+n).animate({
    height: 145
  }, 1200, function() {
    $(".banner-"+n).children().fadeIn("fast"); 
  });
  $(".banner-"+n).addClass("active");
}

function forceHideHomeBanner() {
  	$(".banner").stop();
	$(".banner").children().hide();
	$(".banner").css("height","0px");
  	buttonsTrigger = 0;
     $(".banner").removeClass("active");
}

function hideHomeBanner() {
	$(".banner").children().hide();
  	$(".banner").stop();
	$(".banner.active").animate({
    height: 0
  }, 200, function() {
  	buttonsTrigger = 0;
  	$(".banner").children().hide();
  });
  $(".banner").removeClass("active");
}

function openSecondaryNews(alink) {
	$(".news-secondary-window").remove();
	
	var modal = $('<div class="news-secondary-window"><span class="pprint" style="color:#1B7E48;position:absolute;right:15px;top:40px;cursor:pointer;"><img src="/sites/all/themes/vuguru/images/printIcon2.gif" alt="" border="" /></span></div>');
	
	//var title = $('<div class="news-secondary-title"></div>').append( $(alink).text() ); /*  */
	var title = $('<div class="news-secondary-title"></div>').append( $(alink).parent().parent().parent().children(".views-field-title").clone() );
	var tagline = $(alink).parent().parent().parent().children(".views-field-field-tagline-value").clone();
	var body = $('<div class="news-secondary-body"></div>').append( $(alink).parent().parent().parent().children(".views-field-body-1").clone() );
	var imags = $('<div class="news-secondary-img clr"></div>').append( $(alink).parent().parent().parent().children(".views-field-field-story-image-fid").clone() );
	var cloze = $('<div class="news-secondary-close clr">close article</div>');
	var cross = $('<a class="news-secondary-cross"></a>');
	
	modal.append( title );
	modal.append( tagline );
	modal.append( imags );
	modal.append( body );
	modal.append( cloze );
	modal.append( cross );
	
	$(".news-content").append( modal );
	
	$("body").oneTime(500, function(){
          modal.slideDown(1500);
     });
	$("body").oneTime(520, function(){
          //body.find('.field-content').columnize({columns: 3, balanced: true, height: 900, cache: false});
          body.find('.field-content').columnize({columns: 3, balanced: true, cache: false});
     });
	
	
	//modal.slideDown(1200, function(){ body.find('.field-content').columnize({columns: 3, balanced: true, height: 800, cache: false}); });
	
	$('html, body').animate({
		//scrollTop: $("#content-area").offset().top
		scrollTop: $("div.newsScrollTo").offset().top
	}, 1200);
	
     $("div.news-content div.news-secondary-title div.views-field-title a").bind('click', function(){
          return false;
     });
	
	$(".news-secondary-close, .news-secondary-cross").bind('click', function(){
		$(".news-secondary-window").slideUp(400, function(){  $(".news-secondary-window").remove();  });
		return false;
	});
	
     $("span.pprint").bind('click', function(){
          $(this).hide();
          $("div.news-secondary-window").printArea();
          $(this).show();
     });
	
	return false;
}