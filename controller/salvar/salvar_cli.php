<?php
$cliente = $_POST['cliente'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['fone'];
$email = $_POST['email'];

include("../conect/conexao.php");
$query = "INSERT INTO `clientes`(`nome_clie`, `cpf_clie`, `cep_clie`, `end_clie`, `cidade_clie`, `uf_clie`, `fone_clie`, `email_clie`) VALUES ('$cliente','$cpf','$cep','$endereco','$cidade','$estado','$telefone','$email')";

mysqli_query($conexao, $query);

header("location: ../view/index.html");

?>