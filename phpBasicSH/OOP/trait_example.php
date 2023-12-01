<?php 
    trait Loggable{
        public function log($message){
            echo"Logging:$message\n";
        }
    
    }
    
    class User{
        use Loggable;
        public $username;
        public function __construct($username)
        {
            $this->username = $username;
        }
        public function getUsername(){
            return $this->username;
        }
    }
    $user = new User("M.Ferdawus");
    $user->log("User Created". $user->getUsername());
?>