<?php

    $score = 10;

    if($score >= 60){
        echo '合格です';
    }
    elseif($score < 60 && $score >= 30){
        echo '追試です';
    }
    elseif($score < 30){
        echo '不合格です';
    }