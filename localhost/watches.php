<?php

require_once 'bd.php';

$table = 'watches';
$items = getAll($table);
$title = 'Часы';
require_once "view/catalog.php";