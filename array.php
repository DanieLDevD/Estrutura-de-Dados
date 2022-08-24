<?php
    $clientes = [
    ["nome" => "Goku",
    "sobrenome" => "DragonBallz"
    ],

    ["nome" => "Vegeta",
    "sobrenome" => "Saiyajin"
    ],

    ["nome" => "Alan",
    "sobrenome" => "Nogueira"
    ],

    ["nome" => "Mateus",
    "sobrenome" => "Emanoel"
    ], 

    ["nome" => "Deide",
    "sobrenome" => "Frente"
    ], 

    ["nome" => "Power",
    "sobrenome" => "Guido"
    ], 
    
    ["nome" => "Paulo",
    "sobrenome" => "Oliveira"
    ], 

    ["nome" => "Mochila",
    "sobrenome" => "Ajato"
    ], 

    ["nome" => "God",
    "sobrenome" => "Zilla"
    ], 
    
    ["nome" => "Victor",
    "sobrenome" => "Eduardo"
    ] 
    ];  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Listagem de Clientes</title>
</head>
<body>
    <div class="container text-center"><h3>Clientes Cadastrados</h3></div>

    <div class="container text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($clientes as $key): ?>
                    <tr>
                        <td><?= $key['nome'] ?></td>
                        <td><?= $key['sobrenome'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>