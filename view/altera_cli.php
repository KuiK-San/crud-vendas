<?php
    $id = $_GET['id'];

    include('../conect/conexao.php');

    $query = "SELECT * FROM `clientes` WHERE `id_clie` = $id";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_array($sql);
    $estado = strtolower($row['uf_clie']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <title>Alterar cadastro de clientes</title>
</head>
<body>
<fieldset class="formulario">
        <legend>Cadastro de clientes</legend>
        <form action="../controller/altera_cli.php?id=<?= $id ?>" method="POST">
            <label for="cliente" >Clientes:</label>
            <input type="text" id="cliente" name="cliente" class="campo" value="<?= $row['nome_clie']?>" required />
            <label for="cpf" >CPF:</label>
            <input type="text" id="cpf" name="cpf" class="campo" value="<?= $row['cpf_clie']?>" required /><br />
            <label for="cep" >Cep:</label>
            <input type="text" id="cep" name="cep" value="<?= $row['cep_clie']?>" class="campo" required />
            <label for="endereco" >Rua:</label>
            <input type="text" id="endereco" name="endereco" value="<?= $row['end_clie']?>" class="campo" required />
            <label for="cidade" >Cidade:</label>
            <input type="text" id="cidade"  name="cidade" value="<?= $row['cidade_clie']?>" class="campo" required />
            <label for="cidade" >Estado:</label>
            <select name="estado"  class="campo" id="uf">

                <option id="" value="">selecione o Estado</option>
                <option id="ac" value="Ac">Acre</option>
                <option id="al" value="Al">Alagoas</option>
                <option id="ap" value="Ap">Amapá</option>
                <option id="am" value="Am">Amazonas</option>
                <option id="ba" value="Ba">Bahia</option>
                <option id="df" value="Df">Distrito federal</option>
                <option id="es" value="Es">Espirito Santo</option>
                <option id="go" value="Go">Goiás</option>
                <option id="ma" value="Ma">Maranhão</option>
                <option id="mt" value="Mt">Mato Grosso</option>
                <option id="ms" value="Ms">Mato Grosso do Sul</option>
                <option id="mg" value="Mg">Minas Gerais</option>
                <option id="pa" value="Pa">Pará</option>
                <option id="pr" value="Pr">Paraná</option>
                <option id="pe" value="Pe">Pernambuco</option>
                <option id="pi" value="Pi">Piauí</option>
                <option id="rs" value="Rs">Rio Grande Do Sul</option>
                <option id="rj" value="Rj">Rio de Janeiro</option>
                <option id="sp" value="Sp">São Paulo</option>
                <option id="sc" value="Sc">Santa Catarina</option>

            </select>
            <label for="telefone" >Telefone:</label><br />
            <input type="text" id="fone" name="fone" class="campo" value="<?= $row['fone_clie']?>" required />
            <label for="email" >E-mail:</label>
            <input type="email" id="email" name="email" class="campo" value="<?= $row['email_clie']?>" required />
            <input type="reset" value="Limpar" class="botao" name="limpar" />
            <input type="submit" value="Enviar" class="botao" name="enviar" />
            <a href="listaclientes.php"><input type="button" class="botao" value="Voltar"></a>
        </form>
    </fieldset>
    <script>
        var estado = '<?php echo strtolower($row['uf_clie']) ?>'
        document.querySelector(`#${estado}`).setAttribute('selected', 'selected')

    </script>
</body>
</html>