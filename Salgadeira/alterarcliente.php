<?php 
include("cabecalhocliente.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $curso = $_POST['curso'];
    $sala = $_POST['sala'];
    $senha = $_POST['senha'];

    #BUSCAR O TEMPERO
    $sql = "UPDATE cliente SET cli_nome = '$nome',cli_email = '$email',cli_telefone = '$telefone',cli_curso = '$curso', cli_sala = '$sala',cli_senha = '$senha'  WHERE cli_id = $id";
    mysqli_query($link,$sql);

    echo("<script>window.alert('Usuario alterado com sucesso !')</script>");
    echo("<script>window.location.href='encomendas.php';</script>");
    exit();
}
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE cli_id =$id";
    $retorno = mysqli_query($link,$sql);

    while ($tbl = mysqli_fetch_array($retorno)){
        $nome = $tbl[1]; #Campo nome
        $email = $tbl[2]; #Campo ativo
        $telefone = $tbl[3]; #Campo telefone
        $curso = $tbl[5]; #Campo curso
        $sala = $tbl[6]; #Campo sala
        $senha = $tbl[9]; #Campo senha
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Usuário</title>
    <link rel = "stylesheet" href="./css/style.css">
</head>
<body>
    <div class="div-form">
        <h2>Alteração de dados</h2>
        <form action="alterarcliente.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>Nome</label>
            <input type="text" name = "nome" value="<?=$nome?>">
            <label>Email</label>
            <input type="email" name ="email" value="<?=$email?>">
            <label>Telefone</label>
            <input type="number" name ="telefone" value="<?=$telefone?>">
            <label>Curso</label>
            <input type="text" name ="curso" value="<?=$curso?>">
            <label>Sala</label>
            <input type="text" name ="sala" value="<?=$sala?>">
            <label>Senha</label>
            <input type="password" name ="senha" value="<?=$senha?>">
            <br>
            <button type="submit" name = "cadastro" id = "btn">Alterar</button>
        </form>
    </div>
    
</body>
</html>