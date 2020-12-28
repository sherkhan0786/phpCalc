<?php
    $a=(float)$_POST['old'];
    $b=(float)$_POST['num'];
    $c=$_POST['opt1'];
    $result = "";
    

    switch ($c) {
        case '+':
            $result = $a+$b;
            echo $result;
            break;

        case '-':
            $result = $a - $b;
            echo $result;
            break;
        
        case '*':
            $result = $a * $b;
            echo $result;
            break;

        case '/':
            $result = $a / $b;
            echo $result;
            break;
        default:
            $result = "Invalid";
            break;
    }
?>