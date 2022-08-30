<?php
$id = $_GET['id'];
$tabela = $_GET['tabela'];
$volta = $_GET['volta'];
$nome_id = $_GET['id_name'];

include('../conect/conexao.php');

$query = "DELETE FROM `$tabela` WHERE `$nome_id` = $id";

$sql = mysqli_query($conexao, $query);

header('location: ../' . $volta);
?>