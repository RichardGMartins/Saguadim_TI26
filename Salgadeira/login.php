<?php 
#INICIA VARIAVEL DE SESSÃO
session_start();
#INCLUI CODIGO DE CONEXÂO DO BANCO#
include('conectadb.php');
#APOS CLICK NO POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    #QUERY DE VALIDA SE USUARIO EXISTE
    $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_email ='$email' AND usu_senha = '$senha' AND usu_status = 's'";
    $resultado = mysqli_query($link,$sql);
    $resultado = mysqli_fetch_array($resultado)[0];
      # Gravar os Logs
      $sql = '"'.$sql.'"';
      $sqllog = "INSERT INTO tab_log(tab_query,tab_data) VALUES ($sql, NOW())";
      mysqli_query($link,$sqllog);
      #SE USUARIO EXISTE LOGA, SE NÃO, NÃO LOGA
    if ($resultado == 0){
        echo "<script>window.alert('USUARIO INCORRETO');</script>";
        echo"<script>window.location.href='login.html';</script>";
    }
    else {
        $sql = "SELECT * FROM usuarios WHERE usu_email = '$email' AND usu_senha = '$senha' AND usu_status ='s'";
        $resultado = mysqli_query($link,$sql);
        while($tbl = mysqli_fetch_array($resultado)){
            $_SESSION['idusuario'] = $tbl[0];
            $_SESSION['nomeusuario'] = $tbl[1];
        }
        $sql = '"'.$sql.'"';
        $sqllog = "INSERT INTO tab_log(tab_query,tab_data) VALUES ($sql, NOW())";
        mysqli_query($link,$sqllog);
        //echo($sqllog);
        echo"<script>window.location.href='backoffice.php';</script>";
    }
}
?>