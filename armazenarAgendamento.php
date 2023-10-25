<?php
// Etapa 1: Conexão com o Banco de Dados
$host = "localhost"; // Host do banco de dados
$usuario = "root@localhost"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = "barbearia"; // Nome do banco de dados

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Etapa 2: Recuperar os Dados do Formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$barbeiro = $_POST['escolha'];
$data = $_POST['data'];
$hora = $_POST['hora'];

// Etapa 3: Preparar a Inserção de Dados
$sql = "INSERT INTO agendamentos (nome, telefone, barbeiro, data, hora) VALUES (?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sssss", $nome, $telefone, $barbeiro, $data, $hora);

// Etapa 4: Executar a Inserção
if ($stmt->execute()) {
    echo "Agendamento realizado com sucesso.";
} else {
    echo "Erro ao agendar: " . $stmt->error;
}

// Etapa 5: Fechar a Conexão com o Banco de Dados
$stmt->close();
$conexao->close();
?>
