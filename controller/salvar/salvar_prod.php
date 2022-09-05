<?php
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$id_forn = $_POST['fornecedor'];

include('../../conect/conexao.php');

$query = "INSERT INTO `produtos`( `desc_prod`, `valor_prod`, `id_forn`) VALUES ('$descricao','$valor','$id_forn')";

$sql = mysqli_query($conexao, $query);

header('location: ../../view/index.html');

?>