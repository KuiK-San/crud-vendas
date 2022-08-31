<?php

include('../conect/conexao.php');

$id_forn = $row['id_forn'];

$query_forn = "SELECT `nome_forn` FROM `fornecedores` WHERE `id_forn` = $id_forn";
$sql_forn = mysqli_query($conexao, $query_forn);

$forn = mysqli_fetch_array($sql_forn);

echo $forn[1];

?>