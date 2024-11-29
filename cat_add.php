<?php
include_once("templates/header.php");
include_once("config/processa_gatos.php"); // Inclua um arquivo com a conexão ao banco

// Processar o formulário se for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['cat_name'];
    $descricao = $_POST['description'];

    // Verificar se um arquivo foi enviado
    if (isset($_FILES['formFile']) && $_FILES['formFile']['error'] === 0) {
        $arquivo = $_FILES['formFile'];
        $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
        $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($extensao, $extensoes_permitidas)) {
            // Definir o caminho para salvar a imagem
            $diretorio = 'uploads/';
            if (!is_dir($diretorio)) {
                mkdir($diretorio, 0755, true);
            }

            $nome_arquivo = uniqid() . '.' . $extensao;
            $caminho = $diretorio . $nome_arquivo;

            // Mover o arquivo para o diretório
            if (move_uploaded_file($arquivo['tmp_name'], $caminho)) {
                // Inserir dados no banco
                $sql = "INSERT INTO gatos (nome, descricao, imagem) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $nome, $descricao, $caminho);

                if ($stmt->execute()) {
                    echo "<div class='alert alert-success text-center'>Gato adicionado com sucesso!</div>";
                } else {
                    echo "<div class='alert alert-danger text-center'>Erro ao adicionar o gato: " . $stmt->error . "</div>";
                }
            } else {
                echo "<div class='alert alert-danger text-center'>Erro ao salvar a imagem.</div>";
            }
        } else {
            echo "<div class='alert alert-danger text-center'>Formato de imagem não permitido.</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center'>Por favor, envie uma foto válida.</div>";
    }
}
?>

<title>Meowly - Adicionar Gato</title>

<div class="container mt-3 p-2 text-center">
    <h1 class="text-secondary">Adicionar novo gato</h1>
    <div class="container">
        <form action="cat_add.php" method="POST" enctype="multipart/form-data">
            <div class="container row text-start">
                <div class="col-md-12 mb-3 cat_input">
                    <label for="cat_name" class="form-label">Nome do gato:</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Digite o nome do gatinho" required>
                </div>
                <div class="mb-3 cat_input">
                    <label for="description" class="form-label">Descrição:</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Dê uma descrição detalhada do animal. Inclua detalhes como personalidade, gostos, raça, etc." required></textarea>
                </div>
                <div class="mb-3 cat_input">
                    <label for="formFile" class="form-label">Foto do gatinho</label>
                    <input class="form-control" type="file" id="formFile" name="formFile" required>
                </div>
                <div class="mb-3 cat_input text-center mx-auto">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include_once("templates/footer.php");
?>
