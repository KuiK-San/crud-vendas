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
            <th>Descrição Produto</th>
            <th>Valor Produto</th>
            <th>Fornecedor</th>
            <th colspan='2'>Ação</th>
        </thead>

        <?php
            include('../conect/conexao.php');
            
            $query = "SELECT * FROM `produtos`";
            $sql = mysqli_query($conexao, $query);

            while ($row = mysqli_fetch_array($sql)) {?>

            <tr>
                <td><?php echo $row['id_prod']?></td>
                <td><?php echo $row['desc_prod'];?></td>
                <td><?php echo $row['valor_prod'];?></td>
                <td><?php 

                    include('../conect/conexao.php');

                    $id_forn = $row['id_forn'];

                    $query_forn = "SELECT `nome_forn` FROM `fornecedores` WHERE `id_forn` = $id_forn";
                    $sql_forn = mysqli_query($conexao, $query_forn);

                    $forn = mysqli_fetch_array($sql_forn);

                    echo $forn[0];

                ?></td>
                <td><a href="../view/altera_cli.php?id=<?=$row['id_prod']?>">Editar</a></td>
                <td><a href="../controller/exclui.php?id=<?=$row['id_prod']?>&tabela=produtos&volta=view/lista_prod.php&id_name=id_prod">Excluir</a></td>
            </tr>
                
           <?php }


        ?>
    </table>
</body>
</html>