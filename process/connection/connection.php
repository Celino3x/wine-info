<?php

  $conexao = mysqli_connect("localhost", "celino3x", "123456", "wine-info");

    if(mysqli_connect_errno()){
       echo "Falha ao conectar com base de dados: ".mysqli_connect_error();
        exit();
    } else{
       // echo "<h1>Você está conectado!</h1><p>Ambiente em desenvolvimento</p>";
    }
?>