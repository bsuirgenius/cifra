<?php

require_once 'bd.php';
$table = 'coffee';
$items = getAll($table);
$title = 'Кофемашины';

require_once "view/catalog.php";