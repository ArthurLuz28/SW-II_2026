<?php

    $json = file_get_contents("produtos.json");
    $produtos = json_decode($json, true);

    if (!is_array($produtos)) {
        $produtos = [];
    }

    $novoProduto = [
        "nome" => "Headset",
        "preco" => 200,
        "quantidade" => 7
    ];

    $produtos[] = $novoProduto;

    file_put_contents("produtos.json", json_encode($produtos, JSON_PRETTY_PRINT));

    echo "Produto adicionado!";

?>