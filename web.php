<?php

header('Access-Control-Allow-Origin: *');
$result = file_get_contents("http://www.omdbapi.com/?s=" . $_GET['judul'] . "&apikey=737f2098");

$result = utf8_decode($result);



print_r($result);

?>