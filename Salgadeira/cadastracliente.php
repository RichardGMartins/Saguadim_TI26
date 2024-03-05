<?php 
include("conectadb.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $curso = $_POST['curso'];
    $sala = $_POST['sala'];


    #INSERIR INSTRUÇÕES NO BANCO
    $sql = "SELECT COUNT(cli_id) FROM cliente WHERE cli_email = '$email'";
    $result = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($result) [0];
    #Grava log
    $sql = '"'.$sql.'"';
    $sqllog = "INSERT INTO tab_log(tab_query,tab_data) VALUES ($sql, NOW())";
    mysqli_query($link,$sqllog);
    #Verifica se existe
    if($result >= 1){
        echo"<script>window.alert('Email já cadastrado');</script>";
        echo"<script>window.location.href='logincliente.html';</script>";
    }
    else{
        $sql ="INSERT INTO cliente(cli_nome,cli_email,cli_telefone,cli_cpf,cli_curso,cli_sala,cli_status,cli_saldo,cli_senha)
        VALUES ('$nome', '$email', '$telefone', '$cpf', '$curso','$sala','s',0,'$senha')";
        mysqli_query($link,$sql);
        #Grava Log
        $sql = '"'.$sql.'"';
        $sqllog = "INSERT INTO tab_log(tab_query,tab_data) VALUES ($sql, NOW())";
        mysqli_query($link,$sqllog);
        echo"<script>window.alert('Usuario Cadastrado');</script>";
        echo"<script>window.location.href='logincliente.html';</script>";
    }
}
?>