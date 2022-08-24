<?php
$host="localhost";
$usuario="root";
$senha="";
$banco="vendas";

$conexao=mysqli_connect($host,$usuario,$senha,$banco);

if (!$conexao) {
    echo 'conexão falha!';
}
?>
