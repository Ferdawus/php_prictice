<?php 
    class Person{
        
        public function __construct(){
            printf('Initialization');
            echo PHP_EOL;
        }
        public function __call($name, $arguments)
        {
           var_dump($name);
           var_dump($arguments);
        }
        public static function __callStatic($name, $arguments)
        {
            var_dump($name);
            var_dump($arguments);
        }
        public function walk(){
            printf('Waking');
            echo PHP_EOL;
        }
        public function __destruct()
        {
            printf("destructing");
        }
    }
    $obj = new Person();
    $obj->walk();
    // $obj->sing("Hello");
    // echo "end of life";
    echo PHP_EOL;
    Person::method("Hello");
?>