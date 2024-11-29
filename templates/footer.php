<style>

html, body {
  height: 100%;
  margin: 0;
  display: flex;
  flex-direction: column;
}

.container {
  flex: 1;
}

footer {
  background-color: #45c5a4;
  color: #fff;
  padding: 20px 0;
  width: 100%;
  margin-top: auto;
}

footer a {
  color: #fff;
  text-decoration: none;
}

.logo_footer {
  height: 3rem;
}

footer .copyright {
  font-size: 14px;
}

footer .row {
  display: flex;
  justify-content: center;
  align-items: center;
}

footer .col {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

footer .col-sm {
  display: flex;
  justify-content: center;
  align-items: center;
}

footer .contact-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

footer .contact-info p {
  margin: 0;  /* Remove qualquer margem padrão */
}

footer .contact-info .h4 {
  margin-bottom: 10px;
}

footer .copyright {
  font-size: 14px;
  margin-top: 20px;
}


</style>
<footer>
    <div class="mftr d-flex container justify-content-center">
        <div class="row mt-4">
            <div class="col text-center align-self-center">
                <div class="row"><a class="fw-bold" href="index.php">Home</a></div>
                <div class="row"><a class="fw-bold" href="listagem.php">Quero adotar!</a></div>
                <div class="row"><a class="fw-bold" href="cuidados.php">Cuidados com o pet</a></div>
            </div>
            <div class="col-sm d-flex align-items-center justify-content-center my-3">
                <a href="perfil.php"> <img class="logo_footer" src="img/logotipo_branco.png" alt="Logotipo branco"> </a>
            </div>
            <div class="col text-center align-self-center contact-info">
                <p class="h4 fw-bold">CONTATO</p>
                <p class="fw-bold">meowly@gmail.com</p>
                <p class="fw-bold">(99) 99999-9999</p>
            </div>
            <div class="row copyright text-center align-self-end">
                <p class="fs-6 align-self-end fw-bold">&copy; 2024. Meowly. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>
