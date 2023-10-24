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
        <form action="#" method="post" class="agendamento">
            <input type="text" name="login" class="agendar" placeholder="Nome">
            <input type="tel" name="senha" class="agendar" placeholder="Telefone">
            <select name="escolha" class="agendar">
                <option selected disabled>Escolha um barbeiro</option>
                <option value="claudio">Barbeiro Cláudio</option>
                <option value="cleiton">Barbeiro Cleiton</option>
                <option value="exemplo">Barbeiro Exemplo</option>
            </select>
            <input type="date" name="data" class="agendar" id="data">
            <select name="hora" class="agendar">
                <option selected disabled>Escolha uma hora</option>
                <option value="claudio">8h00</option>
                <option value="claudio">9h00</option>
                <option value="claudio">10h00</option>
                <option value="claudio">11h00</option>
                <option value="claudio">12h00</option>
                <option disabled>----------</option>
                <option value="claudio">14h00</option>
                <option value="claudio">15h00</option>
                <option value="claudio">16h00</option>
                <option value="claudio">17h00</option>
                <option value="claudio">18h00</option>
            </select>

            <button type="submit" class="botaoTamanho2">Agendar</button>
        </form>
    </div>

    <a href="index.php">
        <div class="botaoTamanho3">Voltar</div>
    </a>
</body>
</html>