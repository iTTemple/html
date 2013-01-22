<div class="newsScrollTo"></div><span class="controlNews"></span>

<h1><?php print $node->title; ?></h1>


<ul class="news-years-list news-years-list-pos" style="display:none;">
<?
$years = vuguru_news_years();
$lastYear = current($years);
if (is_array($years)) foreach ($years as $_year): ?>
<li class=""><a href="/news/archive/<? echo $_year['year'] ?>" class="year_link year-<? echo $_year['year'] ?>"><? echo $_year['year'] ?></a></li>
<? break; endforeach; ?>
</ul>

     <ul id="newsArchiveUl">
     <li class=""><a href="/news/archive/<? echo $lastYear['year'] ?>" class="year_link year-<? echo $lastYear['year'] ?>">Archive</a></li>
     </ul>


<h2 class="subtitle"><?php print content_format('field_subtitle', $field_subtitle[0]); ?></h2>

<div class="news-content clearfix">
	
	<div class="left-column">
		<div class="news-highlighted-top" style="position:relative;"><div class="MainNewScrollHere" style="top:115px; position:absolute;"></div>
			<? print views_embed_view('news', 'block_1', $field_news_highlighted_top[0]['nid']); ?>
		</div>
	</div>
	
	<div class="right-column">
		<div class="news-highlighted-secondary">
			<? print views_embed_view('news', 'block_2', $field_news_highlighted_second[0]['nid']); ?>
		</div>
		<div class="news-highlighted-secondary">
			<? print views_embed_view('news', 'block_2', $field_news_highlighted_third[0]['nid']); ?>
		</div>
		<div class="news-highlighted-secondary">
			<? print views_embed_view('news', 'block_2', $field_news_highlighted_fourth[0]['nid']); ?>
		</div>
	</div>
</div>


<script>
$(document).ready(function(){
 
	var morebody = $(".news-highlighted-top .views-field-body p").not(":first-child");
	morebody.hide();
	
	var newsyearslist = $(".news-years-list");
	newsyearslist.hide();
	
	var expandLink = $('<a class="expand" href="#"></a>'); 
	$(".news-highlighted-top .views-field-body .field-content").append(expandLink);
	var collapseLink = $('<a class="collapse" href="#">close article</a>');
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