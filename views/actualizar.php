<?php

require_once './templates/header.php';
require_once '../controllers/doente.php';

?>

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2 class="card-title text-success">Insira os Dados</h2>

                <a href="./listar.php" class="btn btn-outline-success">listar</a>
            </div>
            <div>
                <?php
                    if (isset($msgDoenteatualizar)) {
                        echo $msgDoenteatualizar;
                    }
                ?>
            </div>

            <div class="card-body">
                <div class="w-50 mx-auto">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <span id="data-error"></span>
                            <input type="text" name="nome" id="name" value="<?php
                                if (isset($_POST['actualizar'])) {
                                    echo $_POST['nome'];
                                } else {
                                    echo $doente['nome'];
                                }
                            ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">idade</label>
                            <span id="data-error"></span>
                            <input type="text"  name="idade" id="email" value="<?php 
                                echo $doente['idade'];
                            ?>" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="password">sintomas</label>
                            <span id="data-error"></span>
                            <input type="text" name="sintomas" id="password" value="<?php 
                                echo $doente['sintomas'];
                            ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">diagnostico</label>
                            <span id="data-error"></span>
                            <input type="text" name="diagnostico" id="password" value="<?php 
                                echo $doente['diagnostico'];
                            ?>" class="form-control">
                        </div>

                        <div class="form-group d-flex justify-content-center">   
                            <button name="actualizar" type="submit" id="button-enviar" class="btn btn-outline-success">Actualizar</button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once "./templates/footer.php" ?>
