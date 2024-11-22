<?php
include_once("templates/header.php");
// Conexão com o banco de dados
$host = 'localhost'; // ou o IP do seu servidor MySQL
$dbname = 'meowly';
$username = 'root'; // ou o nome de usuário do seu banco de dados
$password = ''; // ou a senha do seu banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit;
}

// Pegar o ID do gato da URL
$id_gato = isset($_GET['id']) ? (int)$_GET['id'] : 1; // Se não passar o id, será 1 por padrão

// Consultar os detalhes do gato no banco de dados
$stmt = $pdo->prepare("SELECT nome, descricao, imagem FROM gatos WHERE id = :id");
$stmt->bindParam(':id', $id_gato, PDO::PARAM_INT);
$stmt->execute();

$gato = $stmt->fetch();

if (!$gato) {
    echo "Gato não encontrado!";
    exit;
}
?>

<style>
    .card-img, .card-img-bottom, .card-img-top {
        max-width: 500px; 
        max-height: 500px;
        margin: 10px;
        border-radius: 10px;
    }

    .info {
        font-size: 18px;
    }

    .personality_icon {
        font-size: 30px;
    }

    .personality_title {
        font-size: 16px;
    }
    :root {
        --cor-fundo: #ECA946;
    }

    .btn-cor-fundo {
        background-color: var(--cor-fundo);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
        transition: all 0.3s ease;
        box-shadow: 0px 8px 10px rgba(0, 0, 0, 0.4); 
    }

    .btn-cor-fundo:hover {
        background-color: #ECA946;
    }

    .custom-color {
        font-size: 20px; 
        padding: 10px 20px; 
    }

    .modal-content {
        background-color: #fff;
        border-radius: 10px;
    }

    .text-justify {
        text-align: justify !important;
    }

</style>
<div class="mt-4 container-fluid d-flex align-items-center justify-content-center profile-maincontainer p-3">
    <div class="col-12 col-md-8">
        <div class="d-flex justify-content-center align-items-center">
            <img src="http://172.28.176.1/ProjetoConclusaoCurso/<?php echo htmlspecialchars($gato['imagem']); ?>" class="img-fluid card-img-top" alt="Gato malhado">
        </div>
    </div>
</div>

<div class="d-flex justify-content-center my-5 border-bottom border-dark">
    <p class="h2 fw-bold text-uppercase"><?php echo htmlspecialchars($gato['nome']); ?></p>
</div>

<div class="container info d-flex flex-column align-items-center justify-content-center gap-5">
    <div class="col-12 col-lg-8 text-center">
        <div class="row">
            <p class="fw-bold">Descrição e informações:</p>
        </div>
        <div class="row">
            <p class="text-justify">
                <?php echo nl2br(htmlspecialchars($gato['descricao'])); ?>
            </p>
        </div>
    </div>
    
    <div class="d-flex flex-column flex-sm-row justify-content-center gap-4 btnAdot mb-5">
        <button class="btn-cor-fundo custom-color p-3" data-bs-toggle="modal" data-bs-target="#adotarModal">Adotar</button>
        <button class="btn-cor-fundo custom-color p-3" data-bs-toggle="modal" data-bs-target="#patrocinarModal">Patrocinar</button>
    </div>
</div>

<!-- Modal Adotar -->
<div class="modal fade" id="adotarModal" tabindex="-1" aria-labelledby="adotarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-uppercase text-center w-100" id="adotarModalLabel">Critérios de adoção</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-justify">
                    Você precisará preencher um formulário com seus dados e informações sobre seu lar. Esse formulário é essencial para que possamos avaliar se o ambiente e a rotina são adequados para o animal. Após essa avaliação, nossa equipe entrará em contato para dar continuidade ao processo. Vale ressaltar que, após a adoção, a adaptação do gato no novo lar é de responsabilidade do adotante, assim como o transporte do animal até o seu novo lar. <br> O Meowly não se responsabiliza por esses aspectos, mas estará à disposição para fornecer informações gerais e orientações durante o processo de adaptação do animal.
                </p>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-cor-fundo" data-bs-dismiss="modal">Fechar</button>
                    <a href="formulario.php">
                        <button type="button" class="btn btn-cor-fundo">Formulário</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Patrocinar -->
<div class="modal fade" id="patrocinarModal" tabindex="-1" aria-labelledby="patrocinarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-uppercase text-center w-100" id="adotarModalLabel">Informações sobre o Patrocínio</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-justify">
                    Ao se interessar por um gato, você será redirecionado para a página de adoção, onde precisará preencher um formulário com seus dados e informações sobre seu lar. Esse formulário é essencial para que possamos avaliar se o ambiente e a rotina são adequados para o animal. Após a avaliação, nossa equipe entrará em contato para dar continuidade ao processo. Vale ressaltar que, após a adoção, a adaptação do gato no novo lar é de responsabilidade do adotante, assim como o transporte do animal até o seu novo lar. O Meowly não se responsabiliza por esses aspectos, mas estará à disposição para fornecer informações gerais e orientações durante o processo de adaptação do animal.
                </p>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-cor-fundo" data-bs-dismiss="modal">Fechar</button>
                    <a href="formulario.php">
                        <button type="button" class="btn btn-cor-fundo">Formulário</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("templates/footer.php");
?>
