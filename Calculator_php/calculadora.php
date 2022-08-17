<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $opcao = $_POST['opcao'];
    switch($opcao){
        case 'soma':
            $resultado = $num1 + $num2;
            echo 'A soma é: '.$resultado;
        break;
        case 'sub':
            $resultado = $num1 - $num2;
            echo 'A subtração é: '.$resultado;
        break;
        case 'divisao':
            $resultado = $num1 / $num2;
            echo 'A divisão é: '.$resultado;
        break;
        case 'mult':
            $resultado = $num1 * $num2;
            echo 'A multiplicação é: '.$resultado;
        break;
    }
?>