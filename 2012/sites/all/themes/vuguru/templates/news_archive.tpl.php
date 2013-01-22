<h1><a href="/news"><span class="parent">News:</span></a> <a href="/news/archive/<? echo arg(2); ?>"><? echo arg(2); ?></a></h1>

<ul class="news-years-list news-years-list-pos2">
<?
$years = vuguru_news_years();
if (is_array($years)) foreach ($years as $_year): ?>
<li class="<? echo $_year['class'] ?>"><a href="/news/archive/<? echo $_year['year'] ?>"><? echo $_year['year'] ?></a></li>
<? endforeach; ?>
</ul>

<table class="news-quarters">
  <tr>
    <td>
    <?php
	    $actualYear = Date('Y');
	    $actualMonth = Date('m');
     ?>
				<h3>Q1</h3>
				<?
				$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 1));
				echo $block['content'];
				?>
	</td>
    <td>
    <?php if (!($actualYear==$year and $actualMonth<3)): ?>
				<h3>Q2</h3>
				<?
				$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 2));
				echo $block['content'];
				?>
	<?php endif; ?>
	</td>
	</tr>
	<tr>
    <td>
    <?php if (!($actualYear==$year and $actualMonth<6)): ?>
				<h3>Q3</h3>
				<?
				$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 3));
				echo $block['content'];
				?>
	<?php endif; ?>
	</td>
    <td>
    <?php if (!($actualYear==$year and $actualMonth<9)): ?>
				<h3>Q4</h3>
				<?
				$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 4)); 
				echo $block['content'];
				?>
	<?php endif; ?>
	</td>
  </tr>
</table>


<!-- news detail -->
<? print_r($newsArr); ?>
<? global $newsArr; if (is_array($newsArr)) foreach ($newsArr as $story) : ?>

<div id="news_node_<? echo $story['node']->nid ?>" class="news_node_item">
<? $story['node'] = node_build_content($story['node'], FALSE, FALSE); ?>
<a class="news-secondary-cross"></a><h4><? echo $story['node']->title; ?></h4>
		<?
			ereg('src="(.{0,})"', content_format('field_story_image', $story['node']->field_story_image[0], 'image_plain'), $regArr);
			$imageUrl = $regArr[1];
			if ($imageUrl!='')
				echo '<img src="'.$imageUrl.'" />';
		?>
<div class="column_box">
<span class="pprint2" style="color:#1B7E48;position:absolute;right:15px;top:40px;cursor:pointer;"><img src="/sites/all/themes/vuguru/images/printIcon2.gif" alt="" border="" /></span>
<? echo $story['node']->body; ?>
<div class="clr"></div>
</div>

<div class="news-secondary-close clr">close article</div>
</div>


<? endforeach ?>

<script>
$(document).ready(function(){
 
	$("#primary-menu .menu-582").addClass("active-trail");
	
});
</script>





