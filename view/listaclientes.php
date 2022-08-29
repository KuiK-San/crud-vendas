<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
</head>
<body>
    <h1>Lista de clientes</h1>
    <table border='1'>
        <thead>
            <th>ID</th>
            <th>Clientes</th>
            <th>CPF</th>
            <th>CEP</th>
            <th>Rua</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th colspan='2'>Ação</th>
        </thead>

        <?php
            include('../conect/conexao.php');
            
            $query = "SELECT * FROM `clientes`";
            $sql = mysqli_query($conexao, $query);

            while ($row = mysqli_fetch_array($sql)) {?>

            <tr>
                <td><?php echo $row['id_clie']?></td>
                <td><?php echo $row['nome_clie'];?></td>
                <td><?php echo $row['cpf_clie'];?></td>
                <td><?php echo $row['cep_clie'];?></td>
                <td><?php echo $row['end_clie'];?></td>
                <td><?php echo $row['cidade_clie'];?></td>
                <td><?php echo $row['uf_clie'];?></td>
                <td><?php echo $row['fone_clie'];?></td>
                <td><?php echo $row['email_clie'];?></td>
                <td><a href="../view/altera_cli.php?id=<?=$row['id_clie']?>">Editar</a></td>
                <td><a href="../controller/exclui.php?id=<?=$row['id_clie']?>">Excluir</a></td>
            </tr>
                
           <?php }


        ?>
    </table>
</body>
</html>