<?php
//codigo referente a atividade proposta na aula de php.
// Onde o codigo deve fazer uma junção dos dois arrays.
// O array precisa ter suas posições originais repetidas.

    $cliente1 = array(
        "nome" => "Daniel",
        "sobrenome" => "Silva"
    );

    $cliente2 = array(
        "nome" => "Wilton",
        "sobrenome" => "Will"
    );

    $clientes = array_merge_recursive (
        $cliente1,
        $cliente2
    );
    echo "<prev>",
    var_dump ($clientes);