<?php
    $id = $_GET['id'];

    include('../conect/conexao.php');

    $query = "SELECT * FROM `clientes` WHERE `id_clie` = $id";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Alterar cadastro de clientes</title>
</head>
<body>
<fieldset class="formulario">
        <legend>Cadastro de clientes</legend>
        <form action="../controller/salvar_cli.php" method="POST">
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

                <?php
                switch (strtolower($row['uf_clie'])) {
                    case 'ac':
                        ?>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'al':
                        ?>
                            <option value="Al">Alagoas</option>
                            <option value="Ac">Acre</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        <?php
                        break;
                    case 'ap':
                        ?>
                            <option value="Ap">Amapá</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'am':
                        ?>
                            <option value="Am">Amazonas</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'ba':
                        ?>
                            <option value="Ba">Bahia</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;           
                    case 'df':
                        ?>
                            <option value="Df">Distrito federal</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'es':
                        ?>
                            <option value="Es">Espirito Santo</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'go':
                        ?>
                            <option value="Go">Goiás</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        <?php
                        break;
                    case 'ma':
                        ?>
                            <option value="Ma">Maranhão</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'mt':
                        ?>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'ms':
                        ?>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'mg':
                        ?>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'pa':
                        ?>
                            <option value="Pa">Pará</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'pr':
                        ?>
                            <option value="Pr">Paraná</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'pe':
                        ?>
                            <option value="Pe">Pernambuco</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'pi':
                        ?>
                            <option value="Pi">Piauí</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'rs':
                        ?>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'rj':
                        ?>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'ac':
                        ?>
                            <option value="Sp">São Paulo</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sc">Santa Catarina</option>
                        
                        
                        <?php
                        break;
                    case 'sc':
                        ?>
                            <option value="Sc">Santa Catarina</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            
                        <?php
                        break;
                    default:
                        ?>
                            <option value="">selecione o Estado</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Df">Distrito federal</option>
                            <option value="Es">Espirito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rs">Rio Grande Do Sul</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Sc">Santa Catarina</option>
                        <?php
                        break;
                }
                
                ?>
            </select>
            <label for="telefone" >Telefone:</label><br />
            <input type="text" id="fone" name="fone" class="campo" required />
            <label for="email" >E-mail:</label>
            <input type="email" id="email" name="email" class="campo" required />
            <input type="reset" value="Limpar" class="botao" name="limpar" />
            <input type="submit" value="Enviar" class="botao" name="enviar" />
            <a href="index.html"><input type="button" class="botao" value="Voltar"></a>
        </form>
    </fieldset>
</body>
</html>