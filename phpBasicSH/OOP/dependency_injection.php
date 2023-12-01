<?php 
    class Diver{
        protected Vehicle $vehicle;
        
        public function __construct(Vehicle $vehicle)
        {
            // $this->vehicle = new Vehicle();
            $this->vehicle = $vehicle;
        }
        public function starRide(){
           return $this->vehicle->start();
        }
   }
    class Vehicle{
        protected Engine $engine;
        
        public function __construct(Engine $engine)
        {
            // $this->engine = new Engine();
            $this->engine = $engine;
            
        }
        public function start()
        {
            return "Start Vehicle";
        }
        
    }
    class Engine{
    
    }
    
    $engine  = new Engine();
    $vehicle = new Vehicle($engine);
    $driver  = new Diver($vehicle);
    echo $driver->starRide();
?>