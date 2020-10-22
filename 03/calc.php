<?php 

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    if($operator == 'addition'){
        $add = $num1 + $num2;
        echo $num1 . ' + ' . $num2 . ' = ' . $add;
    }
    elseif($operator == 'subtraction'){
        $sub = $num1 - $num2;
        echo $num1 . ' - ' . $num2 . ' = ' . $sub;
    }
    elseif($operator == 'multiplication'){
        $mul = $num1 * $num2;
        echo $num1 . ' * ' . $num2 . ' = ' . $mul;
    }
    elseif($operator == 'division'){
        $div = $num1 / $num2;
        echo $num1 . ' / ' . $num2 . ' = ' . $div;
    }
    else{
        echo '正しい演算子を指定して下さい';
    }
    