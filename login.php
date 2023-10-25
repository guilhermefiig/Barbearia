<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="imagens/android-chrome-512x512.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <img src="imagens/barbearia-sem-fundo.png" alt="Logo Barbearia do Claudio">

    <div class="quadradoBase">
        <form action="verificarLogin.php" method="post">
            <input type="text" name="login" class="entrar" placeholder="Login" required>
            <input type="password" name="senha" class="entrar" placeholder="Senha" required>
            <button type="submit" class="botaoTamanho2" onclick="return confirm('Tem certeza que deseja enviar o formulário')">Entrar</button>
        </form>
    </div>

    <a href="index.php">
        <div class="botaoTamanho3">Voltar</div>
    </a>
</body>
</html>