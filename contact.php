<?php
// Configuração do banco de dados
$host = "sql108.infinityfree.com";
$user = "if0_38223507";
$pass = "OKp7pZMCsE2dsTY";
$dbname = "if0_38223507_emaildados";

// Criar conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $assunto = $_POST["subject"];
    $mensagem = $_POST["message"];

    // Prevenir SQL Injection
    $nome = $conn->real_escape_string($nome);
    $email = $conn->real_escape_string($email);
    $assunto = $conn->real_escape_string($assunto);
    $mensagem = $conn->real_escape_string($mensagem);
    $data_envio = date("Y-m-d H:i:s"); // Data e hora atual

    // Inserir dados no banco
    $sql = "INSERT INTO contatos (nome, email, assunto, mensagem, data_envio) 
            VALUES ('$nome', '$email', '$assunto', '$mensagem', '$data_envio')";

    // Verifica se a inserção foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem: " . $conn->error;
    }
}

// Fechar conexão
$conn->close();
?>
