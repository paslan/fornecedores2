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

    <title>Empresas</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Empresas
                            <a href="index.php" class="btn btn-outline-primary float-end"><img src="./Icones/back.png" width="32" height="32" title="Voltar" alt="Voltar"></a><br>
                            <a href="empresa-create.php" class="btn btn-outline-primary float-begin"><img src="./Icones/add_page.png" width="32" height="32" title="Adicionar Empresa" alt="Adicionar Empresa"></a>
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
                                                    <a href="empresa-view.php?empresa_id=<?= $empresa['empresa_id']; ?>" class="btn btn-outline-primary btn-sm"><img src="./Icones/info.png" width="22" height="22" title="Detalhe" alt="Detalhe"></a>
                                                    <a href="empresa-edit.php?empresa_id=<?= $empresa['empresa_id']; ?>" class="btn btn-outline-primary btn-sm"><img src="./Icones/edit.png" width="22" height="22" title="Editar" alt="Editar"></a>
                                                    <a href="contrato-list.php?empresa_id=<?= $empresa['empresa_id']; ?>" class="btn btn-outline-primary btn-sm"><img src="./Icones/contract.png" width="22" height="22" title="Contratos" alt="Contratos"></a>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#excluirModal"><img src="./Icones/delete.png" width="22" height="22" title="Excluir" alt="Excluir"></button>
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

<div>

<!-- Modal -->
<div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Confirma Exclusão da Empresa <?=$empresa['empresa_id'];?> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Fechar</button>
        <form action="code.php" method="POST" class="d-inline">
            <button type="submit" name="delete_empresa" value="<?=$empresa['empresa_id'];?>" class="btn btn-outline-danger btn-sm">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>