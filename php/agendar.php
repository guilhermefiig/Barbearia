<?php

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $barbeiro = $_POST['barbeiro'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    include_once('conexao.php');

    if ($barbeiro == 'claudio') {
        $sql_code = "SELECT * FROM agendamentos WHERE data_agend = '$data' AND hora = '$hora'";
        $result2 = mysqli_query($conexao, $sql_code);
    
        if ($result2 && mysqli_num_rows($result2) > 0) {
            echo "A data e hora selecionadas já estão agendadas. Escolha outra data e hora.";
        }
        
        else {
            $insertSql = "INSERT INTO agendamentos(nome, telefone, barbeiro, data_agend, hora)
            VALUES ('$nome', '$telefone', '$barbeiro', '$data', '$hora')";
            
            $insertResult = mysqli_query($conexao, $insertSql);
    
            if ($insertResult) {
                echo "Agendamento realizado com sucesso!";
            } 
            
            else {
                echo "Erro ao agendar. Tente novamente.";
            }
        }
    }

    else if ($barbeiro == 'cleiton') {

        $sql_code = "SELECT * FROM agendamentos2 WHERE data_agend = '$data' AND hora = '$hora'";
        $result2 = mysqli_query($conexao, $sql_code);
    
        if ($result2 && mysqli_num_rows($result2) > 0) {
            echo "A data e hora selecionadas já estão agendadas. Escolha outra data e hora.";
        } 
        
        else {
            $insertSql = "INSERT INTO agendamentos2(nome, telefone, barbeiro, data_agend, hora)
            VALUES ('$nome', '$telefone', '$barbeiro', '$data', '$hora')";
            
            $insertResult = mysqli_query($conexao, $insertSql);
    
            if ($insertResult) {
                echo "Agendamento realizado com sucesso!";
            } 
            
            else {
                echo "Erro ao agendar. Tente novamente.";
            }
        }
    } 
    
    else if ($barbeiro == 'leandro') {

        $sql_code = "SELECT * FROM agendamentos3 WHERE data_agend = '$data' AND hora = '$hora'";
        $result2 = mysqli_query($conexao, $sql_code);
    
        if ($result2 && mysqli_num_rows($result2) > 0) {
            echo "A data e hora selecionadas já estão agendadas. Escolha outra data e hora.";
        } 
        
        else {
            $insertSql = "INSERT INTO agendamentos3(nome, telefone, barbeiro, data_agend, hora)
            VALUES ('$nome', '$telefone', '$barbeiro', '$data', '$hora')";
            
            $insertResult = mysqli_query($conexao, $insertSql);
    
            if ($insertResult) {
                echo "Agendamento realizado com sucesso!";
            } 
            
            else {
                echo "Erro ao agendar. Tente novamente.";
            }
        }
    }
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
    <link rel="shortcut icon" href="../imagens/android-chrome-512x512.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <img src="../imagens/barbearia-sem-fundo.png" alt="Logo Barbearia do Claudio">


    <div class="quadradoBase2">
        <form action="agendar.php" method="post" class="agendamento" onsubmit="return validateForm()">

            <input type="text" name="nome" class="agendar" placeholder="Nome" required>
            <input type="tel" name="telefone" class="agendar" placeholder="Telefone" required>

            <select name="barbeiro" class="agendar" required>
                <option value="" selected disabled>Escolha um barbeiro</option>
                <option value="claudio">Barbeiro Cláudio</option>
                <option value="cleiton">Barbeiro Cleiton</option>
                <option value="leandro">Barbeiro Leandro</option>
            </select>

            <input type="date" name="data" class="agendar" id="data" required>

            <select name="hora" class="agendar" required>
                <option value="" selected disabled>Escolha uma hora</option>
                <option value="8h00">8h00</option>
                <option value="9h00">9h00</option>
                <option value="10h00">10h00</option>
                <option value="11h00">11h00</option>
                <option value="12h00">12h00</option>
                <option disabled>----------</option>
                <option value="14h00">14h00</option>
                <option value="15h00">15h00</option>
                <option value="16h00">16h00</option>
                <option value="17h00">17h00</option>
                <option value="18h00">18h00</option>
            </select>

            <button type="submit" class="botaoTamanho2" name="submit" onclick="return confirm('Tem certeza que deseja Agendar?')">Agendar</button>
        </form>
    </div>

    <a href="../index.php">
        <div class="botaoTamanho3">Voltar</div>
    </a>

    <script>
        function validateForm() {
            var barbeiro = document.forms[0]["barbeiro"].value;
            var hora = document.forms[0]["hora"].value;

            if (barbeiro == "" || hora == "") {
                alert("Por favor, escolha um barbeiro e uma hora antes de enviar o formulário.");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>