<?php

    $num = 10;
    $answer = 0;
    for($i=2; $i<$num; $i++){
        if($num % $i == 0){
            $answer = 1;
            break;
        }
    }

    if($num == 1 || $num ==0){
        $answer = 1;
    }

    if($answer == 0){
        echo $num.'は素数です';
    }
    elseif($answer == 1){
        echo $num.'は素数ではありません';
    }