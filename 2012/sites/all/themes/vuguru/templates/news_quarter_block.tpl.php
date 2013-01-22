<? global $newsArr;  ?>
<?
if (!is_array($news) or count($news)==0):
?>
<p class="no-stories">No stories for this quarter.</p>
<?
else:
?>
<ul class="news-quarter quarter<? echo $quarter ?>">

<? if (is_array($news)) foreach($news as $story): ?>
<? $newsArr[] = $story; ?>
	<li>
		<? echo l($story['title'], '', array('attributes' => array('class' => 'news_quarter_link news_node_'.$story['node']->nid))); ?>
	</li>
<? endforeach ?>
</ul>
<? endif; ?>
