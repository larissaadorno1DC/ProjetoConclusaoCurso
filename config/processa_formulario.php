<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $profissao = $_POST['profissao'];
    $nif = $_POST['nif'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao']; // O campo de descrição (por que deseja adotar um felino?)
    
    // Informações do endereço
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];

    // Informações sobre o lar
    $aluguelProprietario = $_POST['aluguelProprietario'];
    $gatosCasa = $_POST['gatosCasa'];
    $outrosAnimais = $_POST['outrosAnimais'];
    $orçamentoAnimais = $_POST['orçamentoAnimais'];
    $alergiaCasa = $_POST['alergiaCasa'];
    $adocaoAnterior = $_POST['adocaoAnterior'];

    // Lógica para verificar condições (exemplo: "não" para alguma condição)
    if ($aluguelProprietario == "não" || $gatosCasa == "não" || $outrosAnimais == "não" || $orçamentoAnimais == "não" || $alergiaCasa == "sim" || $adocaoAnterior == "não") {
        // Retorna erro (se alguma condição não for atendida)
        echo json_encode(["status" => "error", "message" => "Você respondeu 'não' a uma das condições."]);
    } else {
        // Enviar e-mail (supondo que a função mail() esteja configurada corretamente)
        $to = "seu-email@dominio.com";
        $subject = "Formulário de Adoção de Gato";
        $message = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\n...";
        $headers = "From: $email";
        
        if (mail($to, $subject, $message, $headers)) {
            // Retorna sucesso
            echo json_encode(["status" => "success", "message" => "E-mail enviado com sucesso!"]);
        } else {
            // Caso não consiga enviar o e-mail
            echo json_encode(["status" => "error", "message" => "Falha ao enviar o e-mail."]);
        }
    }
}
?>
