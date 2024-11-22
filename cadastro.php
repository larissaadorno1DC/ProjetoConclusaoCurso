<?php include_once("templates/header.php"); ?>

<title>Meowly - Cadastro</title>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 img-box-cad text-center mb-4">
            <img style="border-radius: 10px;" src="img/gato06.jpeg" class="img-fluid mb-3" alt="gato">
        </div>
        <div class="col-md-6 content-box-cad mb-4">
            <div class="form-box-cad">
                <h2 class="text-dark">Faça seu cadastro!</h2>

                <?php
                // Se existir, exibe a mensagem de erro
                if (isset($_SESSION['error_message'])) {
                    echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
                    unset($_SESSION['error_message']); // Limpa a mensagem para não exibir novamente
                }
                ?>

                <form action="config/processa_cadastro.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Nome </label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="João" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"> Email </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> Senha </label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="*****" required>
                    </div>

                    <?php
                    // Código para selecionar uma imagem aleatória de perfil
                    // Caminho para as imagens de perfil
                    $perfilImages = glob('uploads/profiles/foto*.jpg');  // Pega todos os arquivos de imagem foto(1).jpg até foto(19).jpg
                    $randomImage = $perfilImages[array_rand($perfilImages)]; // Escolhe uma imagem aleatória
                    $imageFileName = basename($randomImage); // Pega só o nome da imagem (sem o caminho)
                    ?>

                    <input type="hidden" name="imagem_perfil" value="<?php echo $imageFileName; ?>">

                    <div class="mb-3">
                        <input type="submit" id="cadastrar" name="cadastrar" class="btn btn-primary bg-dark" value="Se cadastrar">
                    </div>
                    <div class="mb-3">
                        <p>Já tem uma conta? Faça seu <a href="">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once("templates/footer.php"); ?>
