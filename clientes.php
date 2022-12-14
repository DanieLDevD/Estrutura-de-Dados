<?php
    $clientes = [
    ["nome" => "Goku",
    "sobrenome" => "DragonBallz",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ],

    ["nome" => "Vegeta",
    "sobrenome" => "Saiyajin",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ],

    ["nome" => "Alan",
    "sobrenome" => "Nogueira",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ],

    ["nome" => "Daniel",
    "sobrenome" => "Vitor",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ], 

    ["nome" => "King",
    "sobrenome" => "Kong",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ], 

    ["nome" => "Power",
    "sobrenome" => "Gamer",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ], 
    
    ["nome" => "Paulo",
    "sobrenome" => "Oliveira",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ], 

    ["nome" => "Mochila",
    "sobrenome" => "Ajato",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ], 

    ["nome" => "God",
    "sobrenome" => "Zilla",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
    ], 
    
    ["nome" => "Victor",
    "sobrenome" => "Eduardo",
    "telefone" => "(11)12312-12345",
    "pais" => "Brasil",
    "endereco" => "Av.Rio Verde"
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
    <title>Lista de Clientes</title>
</head>
<body>
    <div class="container text-center"><h3>Lista de Clientes</h3></div>

    <div class="container text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Pa??s</th>
                    <th scope="col">Endere??o</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($clientes as $key): ?>
                    <tr>
                        <td><?= $key['nome'] ?></td>
                        <td><?= $key['sobrenome'] ?></td>
                        <td><?= $key['telefone'] ?></td>
                        <td><?= $key['pais']?></td>
                        <td><?= $key['endereco']?></td> 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>