<?php 
    class Router{
        private static array $list = [];
        public static function get(string $page, Closure $closure){
            static::$list[] =[
                'page'   => $page,
                'method' => 'GET',
                'logic'  => $closure,
            ];
            
        }
        public static function post(string $page, Closure $closure){
        
            static::$list[] =[
                'page'   => $page,
                'method' => 'POST',
                'logic'  => $closure,
            ];
        }
        public static function run(){
            // var_dump(self::$list);
            $method = $_SERVER['REQUEST_METHOD'];
            $page   = trim( $_SERVER['REQUEST_URI'],'/');
            
          foreach (self::$list as $item) {
            // print_r($item);
            if ($item['page'] === $page && $item['method'] === $method) {
                $item['logic']();
                return;
            }
          }
          die("not found");
            
        }
        
    
    }

?>