<?php

$images = scandir('images');
array_shift($images);
array_shift($images);
header("Content-Type:application/json");
echo json_encode($images);

?>
