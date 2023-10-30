<?php

include('protecao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
    <link rel="shortcut icon" href="imagens/android-chrome-512x512.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <img src="../imagens/barbearia-sem-fundo.png" alt="Logo Barbearia do Claudio">

    <div class="quadradoBase2">
        <h2>Bem vindo, <?php echo $_SESSION['nome'];?> </h2>
    </div>

    <a href="sair.php">
        <div class="botaoTamanho3">Sair da conta</div>
    </a>
</body>
</html>