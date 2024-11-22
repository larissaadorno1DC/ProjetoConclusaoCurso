<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "meowly"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtendo as informações do usuário
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT nome, email FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>
    <title>Meowly - Editar Perfil</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <?php include_once("templates/header.php"); ?>

    <div class="container profile-container mb-4">
    <h2 class="text-dark">Editar Perfil</h2>
    <form action="config/processa_edicao.php" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo htmlspecialchars($user['nome']); ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>">
        </div>
        <div class="mb-3">
            <label for="nova_senha" class="form-label">Nova Senha</label>
            <input type="password" class="form-control" name="nova_senha" id="nova_senha" placeholder="Digite a nova senha">
        </div>
        <div class="mb-3">
            <label for="confirma_senha" class="form-label">Confirme a Nova Senha</label>
            <input type="password" class="form-control" name="confirma_senha" id="confirma_senha" placeholder="Confirme a nova senha">
        </div>
        
        <!-- Botões alinhados nas extremidades -->
        <div class="d-flex justify-content-between">
            <input type="submit" class="btn btn-dark" value="Salvar Alterações">
            <a href="perfil.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>


    <?php include_once("templates/footer.php"); ?>
</body>
