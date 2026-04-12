<?php

    $produtos = [
        ["nome" => "Teclado", "preco" => 100, "quantidade" => 5],
        ["nome" => "Mouse", "preco" => 50, "quantidade" => 10],
        ["nome" => "Monitor", "preco" => 900, "quantidade" => 3]
    ];

    $json = json_encode($produtos, JSON_PRETTY_PRINT);

    file_put_contents("produtos.json", $json);

    echo "Arquivo criado com sucesso!";

?>