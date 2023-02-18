<?php
    include(".\process\connection\connection.php");
?>

<?php  
    //Head HTML
    include(".\page\_header.php");
?>

<body>

    <div class="page-wrapper bg-wine p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registrar informações sobre o Vinho</h2>
                    <form action="_inserir_vinho.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="text" id="nome_wine" name="nome_wine" placeholder="Nome do vinho" class="input--style-1">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input placeholder="Origem" id="origem_wine" name="origem_wine"  type="text" class="input--style-1">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input placeholder="Safra" id="safra_wine" name="safra_wine"  type="text" class="input--style-1">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input type="text" id="harminizacao_wine" name="harminizacao_wine"  placeholder="Harmonização" class="input--style-1">
                        </div>
                        

                        <div class="col-2">
                            <div class="input-group">
                                <input placeholder="Temperatura" id="temperatura_wine" name="temperatura_wine"  type="text" class="input--style-1">
                            </div>
                        </div>

                        <div class="input-group">
                            <input id="foto_wine" name="foto_wine" type="file" class="input--style-1" aria-describedby="foto_wine">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--wine" type="submit">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

<?php
    //Final BODY SCRIPT
    include(".\page\_footer.php");
?>