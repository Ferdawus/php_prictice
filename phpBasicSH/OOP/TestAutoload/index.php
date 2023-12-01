<?php 
    require_once 'vendor/autoload.php';
    $faker = Faker\Factory::create();
    // generate data by calling methods
    echo $faker->name();

?>