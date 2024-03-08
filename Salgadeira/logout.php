<?php 
session_start();

session_destroy();

header("login.php");

echo "<script>window.location.href='login.html'</script>";

exit;

?>