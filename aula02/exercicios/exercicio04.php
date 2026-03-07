<?php

$option = 2;
echo "Option: " . $option . "<hr>";

switch ($option){
    case 1:
        echo "Você escolheu a opção 1";
        break;
    case 2:
        echo "Você escolheu a opção 2";
        break;
    case 3:
        echo "Você escolheu a opção 3";
        break;
    case 4:
        echo "Você escolheu a opção 4";
        break;
    default:
        echo "Esta não é uma opção válida!";
        break;
}

?>