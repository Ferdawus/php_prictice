<?php 
    $x = 10;
    $y = 20;
    
    function addition()
    {
        $GLOBALS['z'] =  $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    addition();
    echo $z;
    
    // echo $_SERVER['SERVER_NAME'];
?>