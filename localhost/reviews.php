<?php

require_once 'bd.php';
$table = "reviews";
$reviews = getAll($table);

$title = "Отзывы";
require_once "view/reviews.php";