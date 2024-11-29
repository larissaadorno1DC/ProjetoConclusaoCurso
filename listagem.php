<?php
include_once("templates/header.php");

// conexao com o banco de dados
$host = 'localhost'; 
$dbname = 'meowly';
$username = 'root';  
$password = '';     

try {
  // pdo é uma biblioteca do php (poo) pra acessar bancos de dados; ele facilita essa conexão e as consultas 
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // instancia pra estabelecer a conexao; mysql:host é a string do bd - fala que é do tipo sql e deve ser utilizado o host armazenado no bdname
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //essa linha é pra se caso ocorrer um erro na conexão ou nas consultas, pq ai vai gerar uma exceção e nao só avisar que ocorreu um erro
} catch (PDOException $e) {
  //se uma exceção ocorrer, esse catch sera executado
    echo "Erro de conexão: " . $e->getMessage();
    // mensagem de erro
    exit;
}

// consulta para obter o id, nome e imagem dos gatos
$stmt = $pdo->query("SELECT id, nome, imagem FROM gatos");
$gatos = $stmt->fetchAll();
?>

<style>
  a {
    text-decoration: none;
  }
</style>

<title>Meowly - Nossos bichinhos</title>

<div class="d-flex justify-content-center my-5">
  <p class="h2 fw-bold text-primary">Encontre seu novo amigo!</p>
</div>

<div class="container d-flex mb-5">
  <div class="row row-cols-2 row-cols-lg-4 g-3 justify-content-center">

    <?php foreach ($gatos as $gato): ?>
      <div class="col">
          <a href="cat_profile.php?id=<?php echo $gato['id']; ?>">
              <div class="card border-0 shadow-sm text-light bg-secondary">
                  <div class="img-card">
                      <img src="http://192.168.137.1/ProjetoConclusaoCurso/<?php echo htmlspecialchars($gato['imagem']); ?>" class="card-img-top" alt="Imagem do gato">
                  </div>
                  <div class="card-body text-center">
                      <h5 class="fs-6 card-title fw-semibold"><?php echo htmlspecialchars($gato['nome']); ?></h5>
                  </div>
              </div>
          </a>
      </div>
    <?php endforeach; ?>

  </div>
</div>

<?php
include_once("templates/footer.php");
?>
