<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_empresa']))
{

    
    $empresa_id = mysqli_real_escape_string($con, $_POST['delete_empresa']);

    $query = "DELETE FROM empresas WHERE empresa_id='$empresa_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Empresa excluida com sucesso";
        header("Location: empresa-list.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir a empresa";
        header("Location: empresa-list.php");
        exit(0);
    }
}

if(isset($_POST['update_empresa']))
{
    $empresa_id = mysqli_real_escape_string($con, $_POST['empresa_id']);

    $nome         = mysqli_real_escape_string($con, $_POST['nome_fantasia']);
    $razao_social = mysqli_real_escape_string($con, $_POST['razao_social']);
    $cnpj         = mysqli_real_escape_string($con, $_POST['cnpj']);
    $endereco     = mysqli_real_escape_string($con, $_POST['endereco']);
    $nro          = mysqli_real_escape_string($con, $_POST['nro']);
    $complemento  = mysqli_real_escape_string($con, $_POST['complemento']);
    $bairro       = mysqli_real_escape_string($con, $_POST['bairro']);
    $cidade       = mysqli_real_escape_string($con, $_POST['cidade']);
    $uf           = mysqli_real_escape_string($con, $_POST['uf']);
    $cep          = mysqli_real_escape_string($con, $_POST['cep']);


    $query = "UPDATE empresas SET nome_fantasia='$nome', razao_social='$razao_social', cnpj='$cnpj', endereco='$endereco',
                     nro='$nro', complemento='$complemento', bairro='$bairro', cidade='$cidade', uf='$uf', cep='$cep'
                     WHERE empresa_id='$empresa_id' ";
    $query_run = mysqli_query($con, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Empresa atualizada com sucesso";
        header("Location: empresa-list.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Empresa não atualizada";
        header("Location: empresa-list.php");
        exit(0);
    }

}


if(isset($_POST['save_empresa']))
{
  
    $empresa_id   = mysqli_real_escape_string($con, $_POST['empresa_id']);

    $nome         = mysqli_real_escape_string($con, $_POST['nome_fantasia']);
    $razao_social = mysqli_real_escape_string($con, $_POST['razao_social']);
    $cnpj         = mysqli_real_escape_string($con, $_POST['cnpj']);
    $endereco     = mysqli_real_escape_string($con, $_POST['endereco']);
    $nro          = mysqli_real_escape_string($con, $_POST['nro']);
    $complemento  = mysqli_real_escape_string($con, $_POST['complemento']);
    $bairro       = mysqli_real_escape_string($con, $_POST['bairro']);
    $cidade       = mysqli_real_escape_string($con, $_POST['cidade']);
    $uf           = mysqli_real_escape_string($con, $_POST['uf']);
    $cep          = mysqli_real_escape_string($con, $_POST['cep']);


    $query = "INSERT INTO empresas (empresa_id,nome_fantasia,razao_social,cnpj,endereco,nro,complemento,bairro,cidade,uf,cep) 
              VALUES ('$empresa_id','$nome','$razao_social','$cnpj','$endereco','$nro','$complemento','$bairro','$cidade','$uf','$cep')";


    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Empresa cadastrada com sucesso!";
        header("Location: empresa-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Empresa não cadastrada";
        header("Location: empresa-create.php");
        exit(0);
    }
}

?>