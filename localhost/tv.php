<?php

require_once 'bd.php';
$table = 'tv';
$items = getAll($table);
$title = "ТВ";

require_once "view/catalog.php";