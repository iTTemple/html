<ul class="news_quarter quarter<? echo $quarter ?>">
<? if (is_array($news)) foreach($news as $story): ?>
	<li>
		<? echo l($story['title'], $story['url'], array('attributes' => array('class' => 'news_quarter_link'))); ?>
	</li>
<? endforeach ?>
</ul>