<?php
include('conexao.php');

    if(isset($_POST['login']) or isset($_POST['senha'])){

        if(strlen($_POST['login']) == 0){
            echo"Preencha seu login";
        }
        else if(strlen($_POST['senha']) == 0){
            echo"Preencha sua senha";
        }
        else{
            $login = $conexao -> real_escape_string($_POST['login']); 
            $senha = $conexao -> real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM barbeiros WHERE login = '$login' AND senha = '$senha' ";
            $sql_query = $conexao -> query($sql_code) or die("Falha na execução: ". $conexao -> error);

            $quantidade = $sql_query -> num_rows;

            if ($quantidade == 1){

                $barbeiro = $sql_query -> fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['nome'] = $barbeiro['nome'];
                $_SESSION['id'] = $barbeiro['id'];

                header("Location: barbeiro.php");

            }
            else{
                echo "Falha no login, LOGIN ou SENHA incorretos";
            }

        }

    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="imagens/android-chrome-512x512.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function togglePasswordVisibility() {
            var senhaInput = document.getElementById("senha");
            var eyeIcon = document.getElementById("eye-icon");
            if (senhaInput.type === "password") {
                senhaInput.type = "text";
                eyeIcon.className = "fas fa-eye-slash";
            } else {
                senhaInput.type = "password";
                eyeIcon.className = "fas fa-eye";
            }
        }
    </script>
</head>

<body>
    <img src="../imagens/barbearia-sem-fundo.png" alt="Logo Barbearia do Claudio">

    <div class="quadradoBase">
        <form action="login.php" method="post">

            <input type="text" name="login" class="entrar" placeholder="Login" required>

            <div class="password-input">
                <input type="password" name="senha" id="senha" class="entrar" placeholder="Senha" required>
                <i class="fas fa-eye" id="eye-icon" onclick="togglePasswordVisibility()"></i>
            </div>

            <button type="submit" class="botaoTamanho2" onclick="return confirm('Tem certeza que deseja enviar o formulário')">Entrar</button>

        </form>
    </div>

    <a href="../index.php">
        <div class="botaoTamanho3">Voltar</div>
    </a>
</body>

</html>
