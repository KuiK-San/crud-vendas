<?php

$nome = mb_strtolower($_POST['nome'], 'UTF-8');
$cpf = $_POST['cpf'];

include('../conect/conexao.php');

$sql = "INSERT INTO `vendedores`(`nome_vend`, `cpf_vend`) VALUES ('$nome','$cpf')";

$query = mysqli_query($conexao, $sql);

header('location: ../view/index.html');

?>