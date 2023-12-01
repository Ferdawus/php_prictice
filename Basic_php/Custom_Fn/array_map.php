<?php 
    $numbers = [1, 2, 3, 4, 5];
    function square($num){
        return $num ** 2;
    }
    $result = array_map('square',$numbers);
    print_r($result);
?>