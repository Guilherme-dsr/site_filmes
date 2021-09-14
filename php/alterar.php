<?php
include_once("conexao.php");

$id = $_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];


$instrucao="UPDATE cadastros SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id '" ;

mysqli_query($conn, $instrucao);
header("location: ../minhaconta.php");

?>