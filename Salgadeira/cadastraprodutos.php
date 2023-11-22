<?php 
include("cabecalho.php");


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $custo = $_POST['custo'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "SELECT COUNT(pro_id) FROM produtos WHERE pro_nome = '$nome'";
    $return = mysqli_query($link,$sql);
    $cont = ($tbl =mysqli_fetch_array($return)[0]);
    if($cont == 0){
        $sql = "INSERT INTO produtos(pro_nome,pro_descricao,pro_custo,pro_preco,pro_quantidade,pro_validade,fk_for_id,pro_status)
        VALUES ('$nome', '$descricao', $custo, $preco,$quantidade,'$validade',$fornecedor,'s')";
        mysqli_query($link,$sql);
        echo"<script>window.alert('Produto cadastrado com sucesso');</script>";
        echo"<script>window.location.href='listaproduto.php'</script>";
    }
    else{
        echo"<script>window.alert('Produto já existente');</script>";
        echo"<script>window.location.href='listaproduto.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <div class="div-form">
            <form action="cadastraprodutos.php" method="post">
                <label for="">NOME PRODUTOS</label>
                <input type="text" name='nome' id="nome">
                <label for="">DESCRIÇÃO</label>
                <textarea type="text" name='descricao' id="descricao"></textarea>
                <label for="">CUSTO</label>
                <input type="number" step="0.01" name='custo' id="custo">
                <label for="">PREÇO</label>
                <input type="number" step="0.01" name='preco' id="preco">
                <label for="">QUANTIDADE</label>
                <input type="text" name='quantidade' id="quantidade">
                <label for="">VALIDADE</label>
                <input type="date" name='validade' id="validade">
                <label for="">FORNECEDOR</label>
                <select name="fornecedor" id="fornecedor" required>
                    <?php 
                    $sql = "SELECT for_id,for_nome FROM fornecedores";
                    $retorno = mysqli_query($link,$sql);
                    while($tbl =mysqli_fetch_array($retorno)){
                    ?>
                     <option value="<?=$tbl[0]?>"><?=$tbl[1]?></option>
                    <?php
                    }
                    ?>
                </select><br>
                <button type="submit" id="btn">CADASTRAR</button>
            </form>
    </div>
</body>
</html>