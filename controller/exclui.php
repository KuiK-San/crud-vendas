<?php
$id = $_GET['id'];

include('../conect/conexao.php');

$query = "DELETE FROM `clientes` WHERE `id_clie` == $id";

$sql = mysqli_query($conexao, $query);

?>