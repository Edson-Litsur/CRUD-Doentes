<?php
    require_once './templates/header.php'; 
    require_once '../controllers/doente.php';
?>

<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title text-success">Pacientes Diagnosticados</h3>
            <a href="./index.php" class="btn btn-outline-success">Diagnosticar</a>
        </div>
        <div class="col-sm-12 col-sm-offset-">
            <table class="table table-bordered table-striped" style="margin-top:20px;">
            
                    <thead>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Sintomas</th>
                        <th>Diagnostico</th>
                        <th>Accoes</th>
                    </thead>

                    <tbody>
                        <?php foreach ($doentes as $doente) { ?>
                            <tr>
                                <td><?php echo $doente['nome'] ?></td>
                                <td><?php echo $doente['idade'] ?></td>
                                <td><?php echo $doente['sintomas'] ?></td>
                                <td><?php echo $doente['diagnostico'] ?></td>

                                <td>
                                    <a href="actualizar.php?id_editar=<?php echo $doente['id'] ?>" class="btn btn-outline-info btn-sm" ><i class='far fa-edit'></i>Editar</a>
                                    <a href="listar.php?id_apagar=<?php echo $doente['id'] ?>" class="btn btn-outline-danger btn-sm">Apagar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once './templates/footer.php'; ?>
