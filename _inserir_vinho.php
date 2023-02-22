<?php
    include(".\process\connection\connection.php");
?>

<?php  
    //Head HTML
    include(".\page\_header.php");
?>

<?php

$nome_wine = $_POST['nome_wine'];
$origem_wine = $_POST['origem_wine'];
$safra_wine = $_POST['safra_wine'];
$harminizacao_wine = $_POST['harminizacao_wine'];
$temperatura_wine = $_POST['temperatura_wine'];


//upload de arquivo

$extensao = strtolower(substr($_FILES['foto_wine']['name'], -4));
$new_name = md5(time()).$extensao;
$diretorio = "foto_wines/";

move_uploaded_file($_FILES['foto_wine']['tmp_name'], $diretorio.$new_name);

$sql = "INSERT INTO `wine`(`nome_wine`, `origem_wine`, `safra_wine`, `temperatura_wine`, `harmonizacao_wine`, `foto_wine`) VALUES ('$nome_wine','$origem_wine','$safra_wine','$temperatura_wine','$harminizacao_wine','$new_name')";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container page-wraooer bg-wine p-t-100 font-robo">
    <div class="wrapper wrapper--680">
        <div class="card card1">
            <div class="card-body">
                <h2 class="title">Vinho Cadastrado</h2>
                <div class="p-t-20">
                    <button href="index.php" class="btn btn--radius btn--wine" type="submit">Voltar</button>
                    <button href="_cadastrar_vinho.php" class="btn btn--radius btn--wine2" type="submit">Cadastrar Novo</button>
                </div>
            </div>
        </div>
    </div>
</div>