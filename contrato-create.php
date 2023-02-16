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

    <title>Criar Contrato</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Contrato
                            <a href="contrato-list.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="code.php" method="POST">

                                <div class="row">
                                    <div class="col-1">
                                        <label>ID</label>
                                        <input type="text" name="contrato_id" class="form-control">
                                    </div>
                                    <div class="col-11">
                                        <label>Descrição</label>
                                        <input type="text" name="descricao" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <label for="objeto" class="form-label">Objeto</label>
                                        <textarea class="form-control" id="objeto" name="objeto" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label>Data</label>
                                        <input type="date" name="dt_assinatura" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label>Início Vigência</label>
                                        <input type="date" name="inicio_vigencia" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label>Final Vigência</label>
                                        <input type="date" name="fim_vigencia" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label>Valor</label>
                                        <input type="text" name="valor" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label>Ultimo TA</label>
                                        <input type="text" name="ultimo_ta" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label>Assinado</label>
                                        <input class="form-check-input" type="checkbox" name="assinado" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" name="save_contrato" class="btn btn-primary">Salvar Contrato</button>

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