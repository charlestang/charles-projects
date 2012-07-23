<?php
header('Content-Type: text/html; charset=UTF-8');
$news_url = 'http://www.finet.hk/mainsite/newsMain.php?news=CNFINET&'.time().'622';
$news_content = file_get_contents($news_url);
$regx = "#<td[^>]*>\s*<a[^>]*>(.*)</a>\s*</td>#im";
$matches = array();
preg_match_all($regx,$news_content,$matches);
$news = array_splice($matches[1],0,6);
foreach($news as $key => $single_news){
	$news[$key] = strip_tags($single_news);
}
echo 'var news=', json_encode($news);
