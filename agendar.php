<?php

if (isset($_POST['submit'])) {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $barbeiro = isset($_POST['barbeiro']) ? $_POST['barbeiro'] : '';
    $data = isset($_POST['data']) ? $_POST['data'] : '';
    $hora = isset($_POST['hora']) ? $_POST['hora'] : '';

    // Resto do seu código...

    include_once('conexao.php');

    $result = mysqli_query($conexao, "INSERT INTO agendamentos(nome, telefone, barbeiro, data_agend, hora)
    VALUES ('$nome', '$telefone', '$barbeiro', '$data', '$hora')");
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
    <link rel="shortcut icon" href="imagens/android-chrome-512x512.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <img src="imagens/barbearia-sem-fundo.png" alt="Logo Barbearia do Claudio">

    <div class="quadradoBase2">
        <form action="agendar.php" method="post" class="agendamento">

            <input type="text" name="nome" class="agendar" placeholder="Nome" required>

            <input type="tel" name="telefone" class="agendar" placeholder="Telefone" required>

            <select name="barbeiro" class="agendar" required>
                <option selected disabled>Escolha um barbeiro</option>
                <option value="claudio">Barbeiro Cláudio</option>
                <option value="cleiton">Barbeiro Cleiton</option>
                <option value="exemplo">Barbeiro Exemplo</option>
            </select>

            <input type="date" name="data" class="agendar" id="data" required>

            <select name="hora" class="agendar" required>
                <option selected disabled>Escolha uma hora</option>
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

    <a href="index.php">
        <div class="botaoTamanho3">Voltar</div>
    </a>
</body>

</html>