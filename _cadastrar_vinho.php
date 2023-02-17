<?php
    include(".\process\connection\connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Wine | Cadastro</title>
</head>
<body>
    <div class="container card">
        <div class="card-header">
            <h3>Wine Info</h3>
        </div>
        <div class="card-body">
            <h3 class="card-title">Cadastre o Vinho</h3>
            <p>Exmeplo</p>
        </div>
        <form action="_inserir_vinho.php" method="POST">
                <div class="input-group">
                    <input placeholder="Nome" name="nome_mass" id="nome_mass" type="text" class="input--style-2">
                </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>