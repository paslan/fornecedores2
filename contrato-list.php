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
                        <h4>Lista de Contratos - Empresa <?php echo $_GET['empresa_id'] ?>
                            <a href="empresa-list.php" class="btn btn-outline-success float-end"><img src="./Icones/back.png" width="32" height="32" title="Voltar" alt="Voltar"></a><br>
                            <a href="contrato-create.php?empresa_id=<?= $_GET['empresa_id']; ?>" class="btn btn-outline-success float-begin"><img src="./Icones/add_page.png" width="32" height="32" title="Adicionar Contrato" alt="Adicionar Contrato"></a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Empresa</th>
                                    <th>Assinado</th>
                                    <th>Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $empresa_id = mysqli_real_escape_string($con, $_GET['empresa_id']);
                                    $query = "SELECT * FROM contratos WHERE empresa_id='$empresa_id' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $contrato)
                                        {
                                            $query2 = "SELECT * FROM empresas WHERE empresa_id='$empresa_id' ";
                                            $query_run2 = mysqli_query($con, $query2);
                                            $empresa = $query_run2->fetch_assoc();
                                ?>
                                            <tr>
                                                <td><?= $contrato['contrato_id']; ?></td>
                                                <td><?= $empresa['nome']; ?></td>
                                                <td><?= $contrato['assinado']; ?></td>
                                                <td><?= $contrato['valor']; ?></td>
                                                <td>
                                                    <a href="contrato-view.php?id=<?= $contrato['contrato_id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                    <a href="contrato-edit.php?id=<?= $contrato['contrato_id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_contrato" value="<?=$contrato['contrato_id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Nenhum contrato cadastrado </h5>";
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