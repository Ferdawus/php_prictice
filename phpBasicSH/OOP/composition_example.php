<?php 
    class Engine
    {
        public function start()
        {
            echo "Engine started \n";
        }
    }
    class Car{
        private $engine;
        public function __construct()
        {
            $this->engine = new Engine();
        }
        public function start()
        {
            $this->engine->start();
            echo "car started \n";
        }
    
    }
    $car = new Car();
    $car->start();
?>