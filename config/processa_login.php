<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "meowly"; 

// Conexão criada
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

// o usuario existe?
$stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // meio que recupera a senha 
    $stmt->bind_result($senha_hash);
    $stmt->fetch();

    if (password_verify($senha, $senha_hash)) {
        // se a senha estiver correta é para iniciar a sessao
        $_SESSION['email'] = $email;
        header("Location: ../perfil.php"); 
        exit();
    } else {
        // caso o usuario erre a senha, a mensagem vai aparecer 
        $_SESSION['error_message'] = "Senha incorreta.";
        header("Location: ../login.php"); 
        exit();
    }
} else {
    // se o email não existir
    $_SESSION['error_message'] = "Email não encontrado.";
    header("Location: ../login.php"); 
    exit();
}

$stmt->close();
$conn->close();
?>
