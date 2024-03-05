<?php 
include ("conectadb.php");
session_start();
//isset é para saber se esta logado
isset($_SESSION['nomecliente'])?$nomecliente = $_SESSION['nomecliente']:"";
$nomecliente = $_SESSION['nomecliente'];
$id = $_SESSION['idcliente'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pagina de Encomendas</title>
</head>
<body>
<div>
    <div class="menu">
        <li class="ecomendas"><a href="encomendas.php">ENCOMENDAS</a></li>
    </div>
        <div class="menu-perfil">
        <li onclick="ativaPerfil()" id="user" class="user">PERFIL<ul id="nav-perfil" class="nav-perfil"> 
        <li><a href="perfil.php?id=<?=$id?>">ALTERAR DADOS</a></li>
        <li><a href="logoutcliente.php">SAIR</a></li>
        </ul> 
        </li>
        <?php
        if($nomecliente == null){
        
             echo "<script>window.alert('USUARIO NÃO AUTENTICADO');window.location.href='logincliente.html';</script>";
        } 
        ?>
        </div>
   
</div>
</body>
<script src="./script.js"></script>
</html>