<!-- Vypis roku (menu) v sekci news  -->

<ul class="news-years-list">
<?
if ($_SERVER['REQUEST_URI']!='/news') {
if (is_array($years)) foreach($years as $year=>$data): ?>
	<li class="<? echo $data['class'] ?>">
		<? echo l($year, 'news/archive/'.$year, array('attributes' => array('class' => 'year_link year-'.$year))); ?>
	</li>
<? endforeach;
}
?>
</ul>
