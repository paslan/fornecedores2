<?php
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

    <title>Detalhes da Empresa</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados da empresa 
                            <a href="empresa-list.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <?php
                            if(isset($_GET['id']))
                            {
                                $empresa_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM empresas WHERE empresa_id='$empresa_id' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $empresa = mysqli_fetch_array($query_run);
                                    ?>
                                        <div class="row">
                                            <div class="col-9">
                                                <label>Nome Fantasia</label>
                                                <p class="form-control">
                                                    <?=$empresa['nome_fantasia'];?>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <label>CNPJ</label>
                                                <p class="form-control">
                                                    <?=$empresa['cnpj'];?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <label>Razão Social</label>
                                                <p class="form-control">
                                                    <?=$empresa['razao_social'];?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-11">
                                                <label>Endereço</label>
                                                <p class="form-control">
                                                    <?=$empresa['endereco'];?>
                                                </p>
                                            </div>
                                            <div class="col-1">
                                            <label>Nro</label>
                                            <p class="form-control">
                                                <?=$empresa['nro'];?>
                                            </p>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-8">
                                                <label>Complemento</label>
                                                <p class="form-control">
                                                    <?=$empresa['complemento'];?>
                                                </p>
                                            </div>
                                            <div class="col-4">
                                                <label>Bairro</label>
                                                <p class="form-control">
                                                    <?=$empresa['bairro'];?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <label>Cidade</label>
                                                <p class="form-control">
                                                    <?=$empresa['cidade'];?>
                                                </p>
                                            </div>
                                            <div class="col-1">
                                                <label>UF</label>
                                                <p class="form-control">
                                                    <?=$empresa['uf'];?>
                                                </p>
                                            </div>
                                        </div>
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