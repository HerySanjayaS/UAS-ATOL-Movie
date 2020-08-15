<?php 
header('Access-Control-Allow-Origin: *');
$result = file_get_contents("http://www.omdbapi.com/?apikey=737f2098&s=avengers");

$result = utf8_decode($result);



print_r($result);





?>