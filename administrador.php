<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // Host do MySQL
$username = "root"; // Nome de usuário do MySQL
$dbname = "farmacia"; // Nome do banco de dados
 
// Cria uma conexão com o banco de dados (sem senha)
$conn = new mysqli($servername, $username, '', $dbname);
 
// Verificar a conexão com o banco de dados
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
 
// Consulta SQL para contar os cadastros de cada farmácia
$sql = "SELECT farmacia, COUNT(*) as quantidade FROM cadastros GROUP BY farmacia";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // Exibir a quantidade de cadastros de cada farmácia
    while ($row = $result->fetch_assoc()) {
        $farmacia = $row["farmacia"];
        $quantidade = $row["quantidade"];
        echo "Farmácia $farmacia: $quantidade cadastros<br>";
    }
} else {
    echo "Nenhum cadastro encontrado.";
}
 
// Fechar a conexão com o banco de dados
$conn->close();
?>