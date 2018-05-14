<?php

require_once 'bd.php';


$item = getOne($_POST['type'], $_POST['id']);


$title = "Карзина";

require_once "view/addToCart.php";