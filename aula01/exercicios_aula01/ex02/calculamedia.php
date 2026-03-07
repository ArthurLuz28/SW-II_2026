<?php

    $n1 = 5;
    $n2 = 7;
    $n3 = 9;
    $texto = "Média: 7 - ";
    $media = ($n1 + $n2 + $n3) / 2;

    echo "Nota: " . $n1 . "<br>";
    echo "Nota: " . $n2 . "<br>";
    echo "Nota: " . $n3 . "<br><br>";

    if ($media >= 7) {
        echo $texto . "Aprovado";
    } else {
        echo $texto . "Reprovado";
    }

?>