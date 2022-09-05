<?php

$nome = $_POST['nome'];
$nome = mb_strtolower($nome, 'UTF-8');
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];

include('../../conect/conexao.php');

$query = "INSERT INTO `fornecedores` (`nome_forn`, `cnpj_forn`, `telefone`) VALUES ('$nome','$cnpj','$telefone')";

$sql = mysqli_query($conexao, $query);

header('location: ../../view/index.html')

?>