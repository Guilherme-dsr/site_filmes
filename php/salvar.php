<?php 
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$result_usuario = "INSERT INTO cadastros VALUES ( 0, '$nome','$email','$senha')";
$resutado_usuario = mysqli_query($conn, $result_usuario);

header("Location: ../login.php");
?>