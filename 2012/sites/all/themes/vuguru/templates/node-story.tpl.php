<? $year = format_date($created, 'small'); ?>

<div class="h1"><span class="parent"><a href="/news">News:</a></span> <a href="/news/archive/<? echo $year; ?>"><? echo $year; ?></a></div>

<!-- 
<ul>
<?
$years = vuguru_news_years();
if (is_array($years)) foreach ($years as $_year): ?>
<li class="<? echo $_year['class'] ?>"><a href="/news/archive/<? echo $_year['year'] ?>"><? echo $_year['year'] ?></a></li>
<? endforeach; ?>
</ul>
 -->

<div class="news-story">
	<div class="news-story-image">
		<?
			ereg('src="(.{0,})"', content_format('field_story_image', $field_story_image[0], 'image_plain'), $regArr);
			$imageUrl = $regArr[1];
			if ($imageUrl!='')
				echo '<img src="'.$imageUrl.'" />';
		?>
	</div>
	
	<h1><?php print $node->title; ?></h1>
	<h2 class="subtitle"><?php print content_format('field_tagline', $field_tagline[0]); ?></h2>
	
	<?php print $node->content['body']['#value']; ?>
	
	<? print l('back to list '.$year, 'news/archive/'.$year, array('attributes'=>array('class'=>'back'))); ?>
</div>


<script>
$(document).ready(function(){
 
	$("#primary-menu .menu-582").addClass("active-trail");
	$(".news-years-list .year-<? print $year; ?>").addClass("active");
	
	$(".news-years-list").attr("style", "display: none");
	
});
</script>