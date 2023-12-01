<?php 
    require_once "Router.php";
    Router::get('user_page', function(){
        (new UserController())->getUserPage();
    });
    Router::post('user_page', function(){
        (new UserController())->storeUserData();
    });

?>