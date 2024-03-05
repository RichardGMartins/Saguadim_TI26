<?php 
include("cabecalho.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $status = $_POST['status'];

    #BUSCAR O TEMPERO
    $sql = "UPDATE usuarios SET usu_status = '$status' WHERE usu_id = $id";
    mysqli_query($link,$sql);

    echo("<script>window.alert('Usuario alterado com sucesso !')</script>");
    echo("<script>window.location.href='backoffice.php';</script>");
    exit();
}
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE usu_id =$id";
    $retorno = mysqli_query($link,$sql);

    while ($tbl = mysqli_fetch_array($retorno)){
        $nome = $tbl[1]; #Campo nome
        $senha = $tbl[2];
        $status = $tbl[3]; #Campo ativo
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
        <form action="alterausuario.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>Nome</label>
            <input type="text" name = "nome" value="<?=$nome?>" required>
            <label>Senha</label>
            <input type="password" name ="senha" value="<?=$senha?>" required>
            <br>
            <label>Status: <?= $check = ($status =='s') ? "Ativo" : "Inativo" ?> </label>
            <br>
            <input type="radio" name = "ativo" value="s" <?=$status == "s" ? "checked" : "" ?>> ATIVO <br>
            <input type="radio" name = "ativo" value="n" <?=$status == "n" ? "checked" : "" ?>> INATIVO <br>
            <button type="submit" name = "cadastro" id = "btn">Alterar</button>
        </form>
    </div>
    
</body>
</html>