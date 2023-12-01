<?php

use App\Classes\Bike;
use App\Classes\Bus;
use App\Classes\Car;
use App\Model\Post;

require_once __DIR__ . '/vendor/autoload.php';
$car  = new Car();
$bus  = new Bus();
$bike = new Bike();
$post = new Post();
calculate();



?>