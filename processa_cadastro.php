<?php

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $plano_saude = $_POST['plano_saude'];
    $qual_plano = $_POST['qual_plano'];
    $farmacia_popular = $_POST['farmacia_popular'];
    $qual_produto = $_POST['qual_produto'];
    $farmacia = $_POST['farmacia'];
 
    // Conexão com o banco de dados
    $servername = "localhost"; // Host do MySQL
    $username = "root"; // Nome de usuário do MySQL
    $dbname = "farmacia"; // Nome do banco de dados
 
    $conn = new mysqli($servername, $username, '', $dbname);
 
    // Verificar a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
 
    // Preparar e executar a inserção
    $stmt = $conn->prepare("INSERT INTO cadastros (nome_completo, rg, telefone, plano_saude, qual_plano, farmacia_popular, qual_produto, farmacia) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $nome, $rg, $telefone, $plano_saude, $qual_plano, $farmacia_popular, $qual_produto, $farmacia);
    $stmt->execute();
 
    // Verificar se a inserção foi bem-sucedida
    if ($stmt->affected_rows > 0) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente.";
    }
 
    // Fechar a conexão
    $stmt->close();
    $conn->close();
    
}
?>