<?php

    $emailBuscado = $_GET["email"] ?? "maria@email.com";

    $json = file_get_contents("usuarios.json");
    $usuarios = json_decode($json, true);

    $encontrado = false;

    foreach ($usuarios as $u) {
        if ($u["email"] === $emailBuscado) {
            echo "Usuário encontrado:<br>";
            echo "Nome: " . $u["nome"] . "<br>";
            echo "Email: " . $u["email"];
            $encontrado = true;
            break;
        }
    }

    if (!$encontrado) {
        echo "Usuário não encontrado.";
    }

?>