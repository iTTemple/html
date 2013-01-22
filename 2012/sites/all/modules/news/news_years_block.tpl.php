<ul class="news_years_list">
<? if (is_array($years)) foreach($years as $year): ?>
	<li>
		<? echo l($year, 'news/archive/'.$year, array('attributes' => array('class' => 'year_link'))); ?>
	</li>
<? endforeach ?>
</ul>