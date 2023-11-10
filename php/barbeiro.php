<?php
include('protecao.php');
include('conexao.php');


$barbeiro_logado = $_SESSION['nome'];


$table_name = "agendamentos"; 

if ($barbeiro_logado == 'Cláudio') {

    $table_name = 'agendamentos';
} 

elseif ($barbeiro_logado == 'Cleiton') {

    $table_name = 'agendamentos2';
} 

elseif ($barbeiro_logado == 'exemplo') {

    $table_name = 'agendamentos3';
}


$sql = "SELECT nome, telefone, barbeiro, data_agend, hora FROM $table_name";
$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
    <link rel="shortcut icon" href="imagens/android-chrome-512x512.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
    <img src="../imagens/barbearia-sem-fundo.png" alt="Logo Barbearia do Claudio">

    <div class="quadradoBase2">
        <h2>Bem vindo, <?php echo $barbeiro_logado;?> </h2>

        <h3>Agendamentos:</h3>
        <table>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data</th>
                <th>Hora</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['telefone'] . "</td>";
                echo "<td>" . $row['data_agend'] . "</td>";
                echo "<td>" . $row['hora'] . "</td>";
                echo "</tr>";
            }
            ?>
            </table>

    </div>

    <a href="sair.php">
        <div class="botaoTamanho3">Sair da conta</div>
    </a>
</body>
</html>
