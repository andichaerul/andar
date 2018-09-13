<?php


echo "<pre>";
$url  = $_GET['url'];
$url1 = explode(".com", $url);
$url2 = $url1['0'];
$url3 = explode(".", $url2);
if (count($url3) > 1) {
	$domain[] = $url3['1'];
}
else{
	$domain[] = $url3['0'];
}
$www[] = "www";
$com[] = "com";
$merge = array_merge($www,$domain,$com);
$source = join(".",$merge);

echo "</pre>";

?>