<?php

$nomeRemover = "Mouse";

$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);

$produtosFiltrados = [];

foreach ($produtos as $p) {
    if ($p["nome"] !== $nomeRemover) {
        $produtosFiltrados[] = $p;
    }
}

file_put_contents("produtos.json", json_encode($produtosFiltrados, JSON_PRETTY_PRINT));

echo "Produto removido!";

?>