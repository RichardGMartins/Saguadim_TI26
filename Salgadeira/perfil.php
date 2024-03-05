<?php 
include("cabecalhocliente.php");

$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE cli_id =$id";
$retorno = mysqli_query($link,$sql);
while ($tbl = mysqli_fetch_array($retorno)){
    $nome = $tbl[1]; #Campo nome
    $email = $tbl[2]; #Campo email
    $telefone = $tbl[3]; #Campo telefone
    $curso = $tbl[5]; #Campo curso
    $sala = $tbl[6]; #Campo sala
    $cpf = $tbl[4]; #Campo cpf
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL USUARIO</title>
    <link rel = "stylesheet" href="./css/style.css">
</head>
<body>
    <div class="div-form">
            <h2>PERFIL</h2>
        <form action="alterarcliente.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>Nome</label>
            <input type="text" name ="nome" value="<?=$nome?>" readonly>
            <label>Email</label>
            <input type="email" name ="email" value="<?=$email?>" readonly>
            <label>CPF</label>
            <input type="number" name ="cpf" value="<?=$cpf?>" readonly>
            <label>Telefone</label>
            <input type="number" name ="telefone" value="<?=$telefone?>" readonly>
            <label>Curso</label>
            <input type="text" name ="curso" value="<?=$curso?>" readonly>
            <label>Sala</label>
            <input type="text" name ="sala" value="<?=$sala?>"readonly>
            <button><a href="alterarcliente.php?id=<?=$id?>">ALTERAÇÃO DE CADASTRO</a></button>
        </form>
    </div>
    
</body>