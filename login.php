<?php
session_start();
include_once("templates/header.php");
?>

<title>Meowly - Login</title>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 img-box-cad text-center mb-4">
            <img src="img/gato09.jpeg" class="img-fluid mb-4" alt="gato" style="border-radius: 10px;">
        </div>
        <div class="col-md-6 content-box-cad mb-4">
            <div class="form-box-cad">
                <h2 class="text-dark">Faça seu login!</h2>
                <!-- aqui vai a mensagem de erro -->
                <?php if (isset($_SESSION['error_message'])): ?>
                    <div class="alert alert-danger"><?= $_SESSION['error_message'] ?></div>
                <?php unset($_SESSION['error_message']); endif; ?>

                <form action="config/processa_login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label"> Email </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label"> Senha </label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="*****" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="login" name="login" class="btn btn-primary bg-dark" value="Entrar">
                    </div>
                    <div class="mb-3">
                        <p>Ainda não tem uma conta? Faça seu <a class="text-dark" href="cadastro.php">Cadastro</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
include_once("templates/footer.php"); 
?>

</body>
</html>
