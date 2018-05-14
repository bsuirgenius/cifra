<?php

require_once 'bd.php';

addReview($_POST);

header("Location: /success.php");