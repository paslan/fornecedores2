<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Fornecedores</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Empresas
                            <a href="index.php" class="btn btn-danger float-end">VOLTAR</a><br>
                            <a href="empresa-create.php" class="btn btn-primary float-begin">Adicionar Empresa</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome Fantasia</th>
                                    <th>Razao Social</th>
                                    <th>CNPJ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM empresas";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $empresa)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $empresa['empresa_id']; ?></td>
                                                <td><?= $empresa['nome_fantasia']; ?></td>
                                                <td><?= $empresa['razao_social']; ?></td>
                                                <td><?= $empresa['cnpj']; ?></td>
                                                <td>
                                                    <a href="empresa-view.php?empresa_id=<?= $empresa['empresa_id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                    <a href="empresa-edit.php?empresa_id=<?= $empresa['empresa_id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <a href="contrato-list.php?empresa_id=<?= $empresa['empresa_id']; ?>" class="btn btn-primary btn-sm">Contratos</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_empresa" value="<?=$empresa['empresa_id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                        <img src="\icones\" alt="">
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Nenhuma empresa cadastrada </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>