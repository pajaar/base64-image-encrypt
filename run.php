<?php
//github.com/pajaar

$file = "image.png";
$lol = file_get_contents($file);
$result = 'data:image/'.pathinfo($file, PATHINFO_EXTENSION).';base64,'.base64_encode($lol);
echo $result;
?>
