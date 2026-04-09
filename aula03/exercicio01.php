<?php
    $produtos = array("items"=>array("Nome"=>"RTX 6090","Preço"=>15000.00,"Quantidade"=>5));
    $encode = json_encode($produtos);

    file_put_contents("produtos.json",$encode);
?>