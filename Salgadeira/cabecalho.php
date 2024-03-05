<?php 
include ("conectadb.php");
session_start();
//isset é para saber se esta logado
isset($_SESSION['nomeusuario'])?$nomeusuario = $_SESSION['nomeusuario']:"";
$nomeusuario = $_SESSION['nomeusuario'];
$id = $_SESSION['idusuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div>
    <div class="menu">
        <li onclick="ativaNavUser()" id="user">USUARIO <ul id="nav-user"> 
        <li><a href="cadastrousuario.php">CADASTRAR USUARIO</a></li>
        <li><a href="listausuarios.php">LISTAR USUARIOS</a></li>
        </ul></li>
       
        <li  onclick="ativaNavProduct()" id="user" >PRODUTOS <ul id="nav-product">
        <li><a href="cadastraprodutos.php">CADASTRAR PRODUTOS</a></li>
        <li><a href="listaprodutos.php">LISTAR PRODUTOS</a></li>
        <li><a href="encomendas.php">ENCOMENDAS</a></li>
        <li><a href="fornecedor.php">FORNECEDOR</a></li>
        </ul></li>
        <li  onclick="ativaNavClient()" id="user">CLIENTE<ul id="nav-client">
        <li><a href="listacliente.php">LISTAR CLIENTES</a></li>
        </ul></li>
        
        <li class="menu-loja"><a href="logout.php">SAIR</a></li>

        <?php
        if($nomeusuario == null){
    
              echo "<script>window.alert('USUARIO NÃO AUTENTICADO');window.location.href='login.html';</script>";
     
        }?>
           
      
    </div>
</div>
</body>
<script src="./script.js"></script>
</html>