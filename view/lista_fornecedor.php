<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="index.html">voltar</a>
    <h1>Lista de clientes</h1>
    <table border='1'>
        <thead>
            <th>ID</th>
            <th>Nome Fornecedor</th>
            <th>CNPJ</th>
            <th>Telefone</th>
            <th colspan='2'>Ação</th>
        </thead>

        <?php
            include('../conect/conexao.php');
            
            $query = "SELECT * FROM `fornecedores`";
            $sql = mysqli_query($conexao, $query);

            while ($row = mysqli_fetch_array($sql)) {?>

            <tr>
                <td><?php echo $row['id_forn']?></td>
                <td><?php echo $row['nome_forn'];?></td>
                <td><?php echo $row['cnpj_forn'];?></td>
                <td><?php echo $row['telefone'];?></td>
                <td><a href="../view/altera_forn.php?id=<?=$row['id_forn']?>">Editar</a></td>
                <td><a href="../controller/exclui.php?id=<?=$row['id_forn']?>&tabela=fornecedores&volta=view/lista_fornecedor.php&id_name=id_forn">Excluir</a></td>
            </tr>
                
           <?php }


        ?>
    </table>
</body>
</html>