<?php
    include("..\process\connection\connection.php");


$dados = array();

$buscarVinhos = "SELECT * FROM wine";

$resultado = mysqli_query($conexao, $buscarVinhos);

if(mysqli_num_rows($resultado)>0){
    while ($user = mysqli_fetch_array($resultado)){
        $dados[] = array(
            'id_wine' => intval($user['id_wine']),
            'nome_wine' => $user['nome_wine'],
            'safra_wine' => $user['safra_wine'],
            'temperatura_wine' => $user['temperatura_wine'],
            'harmonizacao_wine' => $user['harmonizacao_wine'],
            'foto_wine' => $user['foto_wine'],
        );
    }
} else{
    echo 'Nenhum Vinho';
    exit;
}

echo json_encode($dados);


?>