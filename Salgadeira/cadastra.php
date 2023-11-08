<?php 
include("conectadb.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $login = $_POST['login'];
    $key = RAND(100000,999999);


    #INSERIR INSTRUÇÕES NO BANCO
    $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_email = '$_email' OR usu_login ='$login'";
    $result = mysqli_query($link, $sql);
    $result = mysqli_fetch_array($result) [0];
    #Grava log
    $sql = '"'.$sql.'"';
    $sqllog = "INSERT INTO tab_log(tab_query,tab_data) VALUES ($sql, NOW())";
    mysqli_query($link,$sqllog);
    #Verifica se existe
    if($result >= 1){
        echo"<script>window.alert('Email já cadastrado');</script>";
        echo"<script>window.location.href='login.html';</script>";
    }
    else{
        $sql ="INSERT INTO usuarios(usu_login,usu_senha,usu_status,usu_key,usu_email)
        VALUES ('$login', '$senha', 's', '$key', '$email')";
        mysqli_query($link,$sql);
        #Grava Log
        $sql = '"'.$sql.'"';
        $sqllog = "INSERT INTO tab_log(tab_query,tab_data) VALUES ($sql, NOW())";
        mysqli_query($link,$sqllog);
        echo"<script>window.alert('Usuario Cadastrado');</script>";
        echo"<script>window.location.href='login.html';</script>";
    }
}
?>