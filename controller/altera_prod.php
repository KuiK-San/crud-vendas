<?php
$id_prod = $_GET['id'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$id_forn = $_POST['fornecedor'];

include('../conect/conexao.php');

$query = "UPDATE `produtos` SET `desc_prod`='$descricao',`valor_prod`='$valor',`id_forn`='$id_forn' WHERE `id_prod`='$id_prod'";

$sql = mysqli_query($conexao, $query);

header('location: ../view/lista_prod.php');

?>