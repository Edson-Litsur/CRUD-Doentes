<?php

require_once './templates/header.php';
require_once '../controllers/doente.php';

?>

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h2 class="card-title text-success">Insira os Dados</h2>

                <a href="./listar.php" class="btn btn-outline-success">Listar</a>
            </div>

            <div>
                <?php
                    if (isset($msgDoenteCriado)) {
                        echo $msgDoenteCriado;
                    }
                ?>
            </div>

            <div class="card-body">
                <div class="w-50 mx-auto">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <span id="data-error"></span>
                            <input type="text" name="nome" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">idade</label>
                            <span id="data-error"></span>
                            <input type="text" name="idade" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">sintomas</label>
                            <span id="data-error"></span>
                            <input type="text" name="sintomas" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">diagnostico</label>
                            <span id="data-error"></span>
                            <input type="text" name="diagnostico" id="password" class="form-control">
                        </div>

                        <div class="form-group d-flex justify-content-center">   
                            <button name="submeter" type="submit" id="button-enviar" class="btn btn-outline-success">Enviar</button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once "./templates/footer.php" ?>
