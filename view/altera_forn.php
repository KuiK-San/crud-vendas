<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Cadastro de fornecedores</title>
</head>
<body>
    <?php
    include('../conect/conexao.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM `fornecedores` WHERE `id_forn` = $id";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_array($sql);

    ?>
    <fieldset class="formulario" class="campo" >
        <legend>Cadastro de Fornecedores</legend>
        <form action="../controller/altera_forn.php?id=<?= $row['id_forn'] ?>" method="post">
    
            <label for="nome">Nome Da empresa fornecedora</label><br>
            <input  class="campo" type="text" value='<?= $row['nome_forn'] ?>' name="nome" id="" required>
    
            <label for="nome">CNPJ</label><br>
            <input  class="campo" type="text" value='<?= $row['cnpj_forn'] ?>' name="cnpj" id="cnpj" required>
    
            <label for="nome">Telefone</label><br>
            <input  class="campo" id="fone" type="text" value="<?= $row['telefone'] ?>" name="telefone" id="" required>

            <input type="reset" class="botao" value="limpar" name="limpar">
            <input type="submit" class="botao" value="Enviar" name="enviar">
            <a href="index.html"><input type="button" class="botao" value="Voltar"></a>
        </form>
    </fieldset>
    
    <script src="js/jquery.mask.js"></script>
    <script src="js/mascara.js"></script>
</body>
</html>