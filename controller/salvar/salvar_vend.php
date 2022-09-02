<?php

$nome = mb_strtolower($_POST['nome'], 'UTF-8');
$cpf = $_POST['cpf'];

include('../conect/conexao.php');

$query = "INSERT INTO `vendedores`(`nome_vend`, `cpf_vend`) VALUES ('$nome','$cpf')";

$sql = mysqli_query($conexao, $query);

header('location: ../view/index.html');

?>