<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "meowly"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$email_atual = $_SESSION['email']; 

// vai receber novos dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = !empty($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_DEFAULT) : null;

// se existe outro email com excessão desse
$stmt = $conn->prepare("SELECT email FROM usuarios WHERE email = ? AND email <> ?");
$stmt->bind_param("ss", $email, $email_atual);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $_SESSION['error_message'] = "Esse email já está cadastrado. Tente outro.";
    $stmt->close();
    header("Location: ../editar_perfil.php");
    exit();
}

$stmt->close();

if ($senha) {
    // mesma coisa porem para a senha
    $sql = "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE email = ?";
    $stmt_update = $conn->prepare($sql);
    $stmt_update->bind_param("ssss", $nome, $email, $senha, $email_atual);
} else {
    // Atualiza apenas o nome e o email se a senha não foi informada
    $sql = "UPDATE usuarios SET nome = ?, email = ? WHERE email = ?";
    $stmt_update = $conn->prepare($sql);
    $stmt_update->bind_param("sss", $nome, $email, $email_atual);
}

if ($stmt_update->execute()) {
    $_SESSION['email'] = $email;
    header("Location: ../perfil.php"); 
    exit();
} else {
    $_SESSION['error_message'] = "Erro ao atualizar os dados. Tente novamente.";
    header("Location: ../editar_perfil.php");
    exit();
}

// 'fechar' a conexão 
$stmt_update->close();
$conn->close();
?>
