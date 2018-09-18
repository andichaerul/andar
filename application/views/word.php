<?php
$data = getTitle($_GET['url']);
$rere = explode(" ", $data);
echo "<pre>";
print_r($rere);
echo "</pre>";
?>