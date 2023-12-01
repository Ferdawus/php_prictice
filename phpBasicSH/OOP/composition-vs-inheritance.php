<?php 
    class Vehicle{
        private Engine $engine;
        
        public function __construct()
        {
            $this->engine = new Engine();
        }
        public function start()
        {
           return $this->engine->start();
        }
    }
    
    $vehicle = new Vehicle();
    echo $vehicle->start();
    
    class Engine
    {
        private $model; 
        private $brand;
        
        public function start()
        {
            return "Engine Start";
        }
    }
?>