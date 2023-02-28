<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Criar Empresa</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar empresa
                            <a href="empresa-list.php" class="btn btn-outline-primary float-end"><img src="./Icones/back.png" width="32" height="32" title="Voltar" alt="Voltar"></a><br>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="code.php" method="POST">

                                <div class="row">
                                    <div class="col-1">
                                        <label>ID</label>
                                        <input type="text" name="empresa_id" class="form-control">
                                    </div>
                                    <div class="col-11">
                                        <label>Nome Fantasia</label>
                                        <input type="text" name="nome_fantasia" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <label>Razao Social</label>
                                        <input type="text" name="razao_social" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label>CNPJ</label>
                                        <input type="text" name="cnpj" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-10">
                                        <label>Endereço</label>
                                        <input type="text" name="endereco" class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label>Nro</label>
                                        <input type="text" name="nro" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <label>Complemento</label>
                                        <input type="text" name="complemento" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label>Bairro</label>
                                        <input type="text" name="bairro" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-8">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade" class="form-control">
                                    </div>
                                    <div class="col-1">
                                        <label>UF</label>
                                        <input type="text" name="uf" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label>CEP</label>
                                        <input type="text" name="cep" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" name="save_empresa" class="btn btn-outline-primary">Gravar</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>