<?php

    $score_math = 10;
    $score_english = 24;

    if($score_math >= 60 && $score_english >= 60){
        echo '合格';
    }
    elseif(($score_math < 60 && $score_math >= 30) || ($score_english < 60 && $score_english >= 30)){
        echo '再試験';
    }
    elseif($score_math < 30 && $score_english < 30){
        echo '不合格';
    }