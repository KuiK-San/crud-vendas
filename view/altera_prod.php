<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Alterar Produtos</title>
</head>
<body>
    <?php
        include('../conect/conexao.php');

        $query_forn = "SELECT * FROM `fornecedores`";

        $sql_forn = mysqli_query($conexao, $query_forn);

        $query_prod = "SELECT * FROM `produtos`";

        $sql_prod = mysqli_query($conexao, $query_prod);

        $row_prod = mysqli_fetch_array($sql_prod);

            
    ?>

    <fieldset class="formulario">
        <legend>Cadastro de produtos</legend>
        <form action="../controller/altera_prod.php?id=<?=$row_prod['id_prod']?>" method="post">
            <label for="descricao">Descrição do Produto</label>
            <input type="text" name="descricao" id="descricao" value="<?= $row_prod['desc_prod']?>" class="campo" required>

            <label for="descricao">Valor do produto</label>
            <input type="text" name="valor" placeholder="" value="<?= $row_prod['valor_prod'] ?>" required id="valor" class="campo">

            <label for="fornecedor">Fornecedor</label>
            <select name="fornecedor" id="uf" class="campo" required>

                <option value="">Selecione um fornecedor</option>
                <?php
                    
                    while ($row_forn = mysqli_fetch_assoc($sql_forn)) {
                        ?>
                        <option value="<?php echo $row_forn['id_forn']?>" <?php
                            if ($row_forn['id_forn']==$row_prod['id_forn']) {
                                echo 'selected';
                            }
                        
                        ?>><?php echo $row_forn['nome_forn'];?></option>
                    <?php } ?>

            </select>

            <input type="reset" class="botao" value="limpar" name="limpar">
            <input type="submit" class="botao" value="Enviar" name="enviar">
            <a href="index.html"><input type="button" class="botao" value="Voltar"></a>
        </form>

    </fieldset>
    
    <script src="js/jquery.mask.js"></script>
    <script src="js/mascara.js"></script>
</body>
</html>