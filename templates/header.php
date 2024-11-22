<!-- HEADER -->
<?php
// Inclui arquivos externos necessários
require_once($_SERVER['DOCUMENT_ROOT'] . "/ProjetoConclusaoCurso/config/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?=$BASE_URL ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>

        body {
            font-family: "Montserrat", sans-serif !important;
        }

        .custom-header {
            background-color: #75dcc1;
            padding: 10px 0;
            width: 100% important!;
        }
        .logo-header {
            max-height: 60px; 
        }
        .nav-link {
            color: white !important;
            text-decoration: none;
        }
        .separator {
            display: none; 
        }
        /* para 'esconder' os | que divide a lista da header */
        
        @media (min-width: 768px) {
            .separator {
                display: inline; 
            }
        }

    </style>
</head>
<header>
    <nav class="custom-header navbar navbar-expand-lg navbar-light text-align-center">
        <div class="container-fluid flex-column align-items-center">
            <a class="navbar-brand" href="index.php">
                <img src="img/logotipo_branco.png" class="logo-header img-fluid" width="250px" alt="logomarca">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex flex-column flex-md-row">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php">Home</a>
                    </li>
                    <li class="nav-item separator">
                        <span class="nav-link mx-2">|</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="listagem.php">Nossos bichinhos</a>
                    </li>
                    <li class="nav-item separator">
                        <span class="nav-link mx-2">|</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="./cuidados.php">Cuidados com o pet</a>
                    </li>
                    <li class="nav-item separator">
                        <span class="nav-link mx-2">|</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="./sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item separator">
                        <span class="nav-link mx-2">|</span>
                    </li>
                    <?php if (isset($_SESSION['email'])): ?>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="./perfil.php">Perfil</a>
                        </li>
                        <li class="nav-item separator">
                            <span class="nav-link mx-2">|</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="./logout.php">Sair</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="./login.php">Login</a>
                        </li>
                        <li class="nav-item separator">
                            <span class="nav-link mx-2">|</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="./cadastro.php">Cadastro</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
