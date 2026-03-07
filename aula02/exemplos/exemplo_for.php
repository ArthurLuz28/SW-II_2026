<?php

    $nomes = ['Fulano de Tal', 'Cilcano de Tal', 'Tal de Beltrano', 'Tupiguara'];
    // echo $nomes[0] . "<br>";
    // echo $nomes[1] . "<br>";
    // echo $nomes[2] . "<br>";

    echo "<hr>";

    for ($i = 1; $i <= 5; $i++) {
        echo $i . "<br>";
    }

    $qtd = count($nomes);
    // echo $qtd;

    // echo "<hr>";

    // for ($i = 0; $i <= $qtd - 1; $i++) {
    //     echo $nomes[$i] . "<br>";
    // }

    echo "<hr>";

    foreach ($nomes as $key => $value) {
        echo "<p><strong style=' color: red'>$key</strong>" . " ==> " . $value . "</p>";
    }
?>