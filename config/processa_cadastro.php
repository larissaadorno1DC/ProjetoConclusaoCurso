<?php
session_start(); // Inicia a sessão

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "meowly"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// O email já existe?
$stmt = $conn->prepare("SELECT email FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $_SESSION['error_message'] = "Esse email já está cadastrado. Tente outro.";
    $stmt->close();
    $conn->close();
    header("Location: ../cadastro.php");
    exit();
}

$stmt->close();

// Selecionar uma imagem aleatória da pasta uploads/profiles
$imagem_dir = '../uploads/profiles/'; // Caminho da pasta de imagens
$imagens = glob($imagem_dir . 'foto*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Pega todas as imagens com o prefixo 'foto' (foto1.jpg, foto2.jpg, etc.)

// Debug: Verifique o conteúdo do array de imagens
echo '<pre>';
print_r($imagens); // Verifique se o array de imagens contém os caminhos corretos.
echo '</pre>';

if (count($imagens) > 0) { // Verifica se há imagens
    // Seleciona uma imagem aleatoriamente da lista
    $imagem_perfil = basename($imagens[array_rand($imagens)]); // Pega o nome da imagem (ex: foto1.jpg)
    
    // Debug: Verifique qual imagem foi escolhida
    echo '<pre>';
    echo "Imagem escolhida: " . $imagem_perfil;
    echo '</pre>';
} else {
    // Se não houver imagens, usamos uma imagem padrão
    $imagem_perfil = 'default.jpg'; // Define uma imagem padrão se não houver
}

// Inserir na tabela usuarios
$sql = "INSERT INTO usuarios (nome, email, senha, imagem_perfil) VALUES (?, ?, ?, ?)";
$stmt_insert = $conn->prepare($sql);
$stmt_insert->bind_param("ssss", $nome, $email, $senha, $imagem_perfil);

if ($stmt_insert->execute()) {
    // Inicia a sessão e redireciona para perfil
    $_SESSION['email'] = $email; // Guarda o email na sessão
    header("Location: ../perfil.php"); 
    exit();
} else {
    $_SESSION['error_message'] = "Erro ao realizar o cadastro. Tente novamente.";
    header("Location: ../cadastro.php");
    exit();
}

// 'Fechar' a conexão 
$stmt_insert->close();
$conn->close();
?>
