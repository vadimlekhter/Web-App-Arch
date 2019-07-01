<?php

require_once 'One.php';

$obj = new One();
var_dump($obj);

$clonedObj = clone $obj;
var_dump($clonedObj);