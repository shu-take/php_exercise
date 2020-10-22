<?php

    $num = 11;
    $prime = true;
    
    if($num == 1 || $num == 0){
        $prime = false;
    }
    else{
        for($i=2; $i<$num; $i++){
            if($num % $i == 0){
                $prime = false;
                break;
            }
        }
    }

    if($prime){
        echo $num . ' は素数です';
    }
    else{
        echo $num . ' は素数ではありません';
    }