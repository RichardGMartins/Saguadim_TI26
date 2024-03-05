<?php 
include("cabecalho.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $status = $_POST['status'];

    #BUSCAR O TEMPERO
    $sql = "UPDATE cliente SET cli_status = '$status' WHERE cli_id = $id";
    mysqli_query($link,$sql);

    echo("<script>window.alert('Usuario alterado com sucesso !')</script>");
    echo("<script>window.location.href='backoffice.php';</script>");
    exit();
}
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE cli_id =$id";
    $retorno = mysqli_query($link,$sql);

    while ($tbl = mysqli_fetch_array($retorno)){
        $nome = $tbl[1]; #Campo nome
        $status = $tbl[7]; #Campo ativo
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
        <form action="alteraclientes.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>Nome</label>
            <input type="text" name = "nome" value="<?=$nome?>">
            <label>Status</label>
            <input type="text" name = "status" value="<?=$status?>">
            
            <button type="submit" name = "cadastro" id = "btn">Alterar</button>
        </form>
    </div>
    
</body>
</html>