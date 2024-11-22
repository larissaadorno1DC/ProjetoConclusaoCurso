<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    //inicia a sessao
}

 // verificação se o usuario esta ou nao logado no site; se há um email armazenado na sessao;
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "meowly"; 
//conexao com o bd meowly

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

//faz a busca dos dados do usuario no banco de dados
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT nome, email, imagem_perfil FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
// s - string
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
//'fechar'
$stmt->close();
$conn->close();
?>

<title>Perfil - Meowly</title>
<style>
    .profile-container {
        background-color: #ffffff; 
        border-radius: 8px; 
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
        padding: 20px; 
        margin-top: 30px; 
        text-align: center; 
    }
    h2 {
        color: #343a40; 
    }
    .rounded-circle {
        border-radius: 50%;
        width: 170px; 
        height: 170px; 
        object-fit: cover; 
    }
    .custom-hr {
        width: 80%; 
        margin: 20px auto; 
        border: 1px solid #000; 
    }
    :root {
        --cor-fundo: #ECA946;
    }

    .btn-cor-fundo {
        text-decoration: none;
        background-color: var(--cor-fundo);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
        transition: all 0.3s ease;
    }

    .btn-cor-fundo:hover {
        background-color: #ECA946;
    }

    .custom-color {
        font-size: 15px; 
        padding: 10px 20px; 
    }

</style>

</head>
<body>
    <?php include_once("templates/header.php"); ?>

    <div class="container profile-container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="img-box-cad mt-4">
                     <!-- o codigo abaixo verifica se o usuario tem uma imagem (que ta em profile) definida e se tbm o arquivo dela existe; se existir é pra exibir e se não vai ter uma imagem padrão -->
                    <?php if (isset($user['imagem_perfil']) && file_exists("uploads/profiles/" . $user['imagem_perfil'])): ?>
                        <img src="uploads/profiles/<?= $user['imagem_perfil'] ?>" class="img-fluid m-4 rounded-circle" alt="Imagem de perfil">
                        <?php else: ?>
                        <img src="uploads/profiles/default.jpg" class="img-fluid m-4 rounded-circle" alt="Imagem padrão">
                    <?php endif; ?>
                </div>
                
                <h2 class="text-dark mb-4">Seja bem vindo (a), <?= htmlspecialchars($user['nome']) ?>!</h2>
                <hr class="barra custom-hr"> 
                <p>Informações cadastradas:</p>
                <p><strong>Nome:</strong> <?= htmlspecialchars($user['nome']) ?></p>       
                <!-- htmlspecialchars($user['nome']) ?> serve para exibir o nome do usuário de uma forma "segura", pq converte os caracteres especiais para evitar erros -->
                <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>     

                <a href="logout.php" class="btn-cor-fundo custom-color">Sair</a>
                <a href="editar_perfil.php" class="btn-cor-fundo custom-color">Editar Perfil</a>
            </div>
        </div>
    </div>

    <?php include_once("templates/footer.php"); ?>
</body>
</html>
