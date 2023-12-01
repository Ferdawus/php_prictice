<?php 
    require_once "FileStorage.php";
    require_once "UserController.php";
   
    require_once "routes.php";
    
 
    Router::run();

    // echo "<pre>";
    // var_dump($_SERVER);
    // echo "<pre/>";
    
    // if(trim($_SERVER['REQUEST_URI'],'/') ==='user_page' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    //     require_once "user_form.php";
    // }elseif(trim($_SERVER['REQUEST_URI'],'/') ==='user_page' && $_SERVER['REQUEST_METHOD'] === 'POST'){
    //     var_dump($_POST);
    // }
    // else{
    //     echo "Index Page";
    // }
    // require_once "user_form.php";
    
?>