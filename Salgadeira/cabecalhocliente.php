<?php 
include ("conectadb.php");
session_start();
//isset é para saber se esta logado
isset($_SESSION['nomecliente'])?$nomecliente = $_SESSION['nomecliente']:"";
$nomecliente = $_SESSION['nomecliente'];
$id = $_SESSION['idcliente'];
?>

<div>
    <ul class="menu">
        <li><a href="encomendas.php">ENCOMENDAS</a></li>
        <li><a href="perfil.php">PERFIL</a></li>
        <li><a href="alterarcliente.php?id=<?=$id?>"></a>ALTERAR CADASTRO</li>
        
        <li class="menuloja"><a href="logoutcliente.php">SAIR</a></li>

        <?php
        if($nomecliente != null){
        ?>
            <li class="profile">OLÁ <?= strtoupper($nomecliente)?></li>
        <?php
        } else {
            ?>
            <li class="profile">OLÁ <?= strtoupper($nomecliente)?>aa</li>
        <?php 
            echo "<script>window.alert('USUARIO NÃO AUTENTICADO');window.location.href='logincliente.html';</script>";
        }
        ?>
    </ul>
</div>