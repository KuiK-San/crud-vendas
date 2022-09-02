<?php
$id = $_GET['id'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];

include('../conect/conexao.php');

$query = "UPDATE `fornecedores` SET `nome_forn`='$nome',`cnpj_forn`='$cnpj',`telefone`='$telefone' WHERE `id_forn` = $id";

$sql = mysqli_query($conexao, $query);

header('location: ../../view/lists/lista_fornecedor.php');

?>