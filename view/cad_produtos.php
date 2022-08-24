<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <?php
        include('../conect/conexao.php');

        $query = "SELECT * FROM `fornecedores`";

        $sql = mysqli_query($conexao, $query);

            
    ?>

    <fieldset class="formulario">
        <legend>Cadastro de produtos</legend>
        <form action="../controller/salvar_prod.php" method="post">
            <label for="descricao">Descrição do Produto</label>
            <input type="text" name="descricao" id="" class="campo" required>

            <label for="descricao">Valor do produto</label>
            <input type="number" name="valor" placeholder="(usar '.' para decimal e não colocar 'R$')" required id="" class="campo">

            <label for="fornecedor">Fornecedor</label>
            <select name="fornecedor" id="uf" class="campo" required>

                <option value="">Selecione um fornecedor</option>
                <?php
                    
                    while ($row = mysqli_fetch_assoc($sql)) {
                        ?>
                        <option value="<?php echo $row['id_forn']?>"><?php echo $row['nome_forn'];?></option>
                    <?php } ?>

            </select>

            <input type="reset" class="botao" value="limpar" name="limpar">
            <input type="submit" class="botao" value="Enviar" name="enviar">
            <a href="index.html"><input type="button" class="botao" value="Voltar"></a>
        </form>

    </fieldset>
    
</body>
</html>