<?php

$images = include __DIR__."/data.php";

//var_dump($_GET['id']);
//echo __DIR__ . "/images/" . $images[$_GET['id']];
echo "<img src=/3_2/images/" . $images[$_GET['id']]." >";