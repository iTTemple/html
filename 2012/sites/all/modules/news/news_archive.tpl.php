<h3>Q4</h3>
<?
$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 4)); 
echo $block['content'];
?>

<h3>Q3</h3>
<?
$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 3));
echo $block['content'];
?>

<h3>Q2</h3>
<?
$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 2));
echo $block['content'];
?>

<h3>Q1</h3>
<?
$block = module_invoke('news', 'block' , 'view', 1, array('year'=> $year, 'quarter'=> 1));
echo $block['content'];
?>