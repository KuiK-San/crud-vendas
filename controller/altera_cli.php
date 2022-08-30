<?php
$id = $_GET['id'];
$cliente = $_POST['cliente'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['fone'];
$email = $_POST['email'];

include("../conect/conexao.php");
$query = "UPDATE `clientes` SET `nome_clie`='$cliente',`cpf_clie`='$cpf',`cep_clie`='$cep',`end_clie`='$endereco',`cidade_clie`='$cidade',`uf_clie`='$estado',`fone_clie`='$telefone',`email_clie`='$email' WHERE `id_clie` = $id";

mysqli_query($conexao, $query);

header("location: ../view/listaclientes.php");

?>