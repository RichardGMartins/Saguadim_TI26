<?php 
include("cabecalho.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];

    $sql = "SELECT COUNT(for_id) FROM fornecedores WHERE for_nome ='$nome'";
    $resultado = mysqli_query($link,$sql);
    $resultado = mysqli_fetch_array($resultado)[0];

    if($resultado == 0){
        $sql = "INSERT INTO fornecedores(for_nome) VALUES('$nome')";
        mysqli_query($link,$sql);
        echo"<script>window.alert('Fornecedor cadastrado');</script>";
        echo"<script>window.location.href='backoffice.php';</script>";
    }else {
        echo"<script>window.alert('Fornecedor já cadastrado');</script>";
        echo"<script>window.location.href='fornecedor.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>FORNECEDORES</title>
</head>
<body>
    <div class="div-form">
        <form action="fornecedor.php" method="post">
            <input type="text" name="nome" placeholder="NOME DO FORNECEDOR">
            <button type="submit" id="btn" >Cadastrar</button>

        </form>
    </div>
</body>
</html>