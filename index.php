<?php
    include(".\process\connection\connection.php");
?>

<?php  
    //Head HTML
    include(".\page\_header.php");
?>

<body>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="headung-section"><img class="logo" src=".\img\logo.png" alt=""></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h5 mb-4 text-center">Listagem de Vinhos</h3>
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <th>Foto</th>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Safra</th>
                                <th>Temperatura</th>
                                <th>Harmonização</th>
                            </thead>

                            <?php
                                $sql = "SELECT * FROM wine";
                                $buscar = mysqli_query($conexao, $sql);

                                while($array = mysqli_fetch_array($buscar)){
                                    $id_wine = $array['id_wine'];
                                    $nome_wine = $array['nome_wine'];
                                    $safra_wine = $array['safra_wine'];
                                    $temperatura_wine = $array['temperatura_wine'];
                                    $harmonizacao_wine = $array['harmonizacao_wine'];
                                    $foto_wine = $array['foto_wine'];
                            ?>
                            <tbody>
                                <tr class="alert">
                                    <td><img class="foto_wines" src="foto_wines\<?php echo $foto_wine ?>" alt=""></td>
                                    <td><?php echo $id_wine ?></td>
                                    <td><?php echo $nome_wine ?></td>
                                    <td><?php echo $safra_wine ?></td>
                                    <td><?php echo $temperatura_wine ?> °C</td>
                                    <td><?php echo $harmonizacao_wine ?></td>
                                </tr>
                            </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php
    //Final BODY SCRIPT
    include(".\page\_footer.php");
?>