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

    <title>Editar Empresa</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editando Empresa - <?php echo $_GET['empresa_id'] ?>
                            <a href="empresa-list.php" class="btn float-end"><img src="./Icones/back.png" width="32" height="32" title="Voltar" alt="Voltar"></a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <?php
                            if(isset($_GET['empresa_id']))
                            {
                                $empresa_id = mysqli_real_escape_string($con, $_GET['empresa_id']);
                                $query = "SELECT * FROM empresas WHERE empresa_id='$empresa_id' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $empresa = mysqli_fetch_array($query_run);
                                    ?>
                                    <form action="code.php" method="POST">

                                        <input type="hidden" readonly class="form-control-plaintext" name="empresa_id" value="<?= $empresa['empresa_id']; ?>" class="form-control">
    
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Razão Social</label>
                                                <input type="text" name="razao" value="<?=$empresa['razao_social'];?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-9">
                                                <label>Nome Fantasia</label>
                                                <input type="text" name="nome_fantasia" value="<?=$empresa['nome_fantasia'];?>" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label>CNPJ</label>
                                                <input type="text" name="cnpj" value="<?=$empresa['cnpj'];?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-10">
                                                <label>Endereço</label>
                                                <input type="text" name="endereco" value="<?=$empresa['endereco'];?>" class="form-control">
                                            </div>
                                            <div class="col-2">
                                                <label>Nro</label>
                                                <input type="text" name="nro" value="<?=$empresa['nro'];?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-9">
                                                <label>Complemento</label>
                                                <input type="text" name="complemento" value="<?=$empresa['complemento'];?>" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label>Bairro</label>
                                                <input type="text" name="bairro" value="<?=$empresa['bairro'];?>" class="form-control">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-8">
                                                <label>Cidade</label>
                                                <input type="text" name="cidade" value="<?=$empresa['cidade'];?>" class="form-control">
                                            </div>
                                            <div class="col-1">
                                                <label>UF</label>
                                                <input type="text" name="uf" value="<?=$empresa['uf'];?>" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label>CEP</label>
                                                <input type="text" name="cep" value="<?=$empresa['cep'];?>" class="form-control">
                                            </div>
                                        </div>


                                        <div class="mb-3">
                                            <button type="submit" name="update_empresa" class="btn btn-outline-primary">
                                                Gravar
                                            </button>
                                        </div>

                                    </form>
                                    <?php
                                }
                                else
                                {
                                    echo "<h4>Nenhum ID encontrado</h4>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>