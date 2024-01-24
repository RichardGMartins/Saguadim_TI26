<?php 
include("cabecalhocliente.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $ativo = $_POST['ativo'];
    $senha = $_POST['senha'];

    #BUSCAR O TEMPERO
    $sql = "UPDATE cliente SET cli_senha = '$senha',cli_nome = '$nome', cli_status = '$ativo' WHERE cli_id = $id";
    mysqli_query($link,$sql);

    echo("<script>window.alert('Usuario alterado com sucesso !')</script>");
    echo("<script>window.location.href='listausuarios.php';</script>");
    exit();
}
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE cli_id =$id";
    $retorno = mysqli_query($link,$sql);

    while ($tbl = mysqli_fetch_array($retorno)){
        $nome = $tbl[1]; #Campo nome
        $senha = $tbl[2]; #Campo senha
        $email = $tbl[3]; #Campo ativo
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
        <form action="alterarcliente.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>Nome</label>
            <input type="text" name = "nome" value="<?=$nome?>" required>
            <label>Senha</label>
            <input type="password" name ="senha" value="<?=$senha?>" required>
            <button type="submit" name = "cadastro" id = "btn">Alterar</button>
        </form>
    </div>
    
</body>
</html>