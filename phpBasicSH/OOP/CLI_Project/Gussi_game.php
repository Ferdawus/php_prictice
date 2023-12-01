<!-- shebang -->
<!-- #! /user/bin/env php -->
<?php 
    $options = getopt('h::',['min::','max::']);
    if(isset($options['h'])){
        printf('This is a guessing game application');
    }else{
        $min = (int) ($options['min'] ?? 1);
    $max = (int) ($options['max'] ?? 100);
    // var_dump($min,$max);
    $number = rand($min,$max);
    //var_dump($argc);//count off parameters passed
    //var_dump($argv);
    while(true){
        $user_input = (int) readline("Enter Your Number: ");
        if ($user_input > $number) {
            printf("Try a lower number.\n");
        }elseif($user_input < $number){
            printf("Try a bigger number.\n");
        }else{
            printf("Congrats ! You guessed it right");
            break;
        }
    }
    
    }
    
    
    
?>