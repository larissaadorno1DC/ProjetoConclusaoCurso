<?php
session_start();
include_once("templates/header.php");
?>
<title>Meowly - Formulario Adoção </title>


<style>
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
        background-color: white;
    }

    .modal-title {
        text-align: center;
        width: 100%;
    }

    input.form-control {
        border: 1px solid ; 
        border-radius: 10px; 
    }

    input.form-control:focus {
        border-color: #0056b3; 
        box-shadow: 0 0 5px rgba(0, 91, 189, 0.5);
    }
    .custom-hr {
        width: 100%; 
        margin: 20px auto; 
        border: 2px solid black; 
    }
    

</style>

<div class="container mt-5">
    <h2 class="text-center text-uppercase mb-4">Formulário</h2>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="name" placeholder="Digite seu nome"required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name" class="form-label"> Telefone </label>
                <input type="number" class="form-control" id="telefone" placeholder="Digite um número de contato" required>
            </div>

            <div class="col-md-4">
                <label for="name" class="form-label"> CPF </label>
                <input type="text" class="form-control" id="cpf" placeholder="Digite o número do seu CPF" required>
            </div>

            <div class="col-md-4">
                <label for="numero" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" placeholder="Digite seu RG" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-5">
                <label for="profissao" class="form-label"> Profissão </label>
                <input type="text" class="form-control" id="profissao" placeholder="Digite sua profissão" required>
            </div>

            <div class="col-md-5">
                <label for="nif" class="form-label"> NIF </label>
                <input type="text" class="form-control" id="nif" placeholder="Digite seu NIF" required>
            </div>

            <div class="col-md-2">
                <label for="age" class="form-label"> Idade </label>
                <input type="number" class="form-control" id="idade" placeholder="Digite sua idade" required>
            </div>
        </div>

        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Por que deseja adotar um felino? </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> </textarea>
        </div>

        <hr class="barra custom-hr"> 

        <h2 class="mb-3 mt-4 text-center">Informações sobre o endereço</h2>

        <div class="row mb-3">
            <div class="col-md-11">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" placeholder="Digite o nome da rua" required>
            </div>

            <div class="col-md-1">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" placeholder="N°" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="profissao" class="form-label"> Bairro </label>
                <input type="text" class="form-control" id="profissao" placeholder="Digite seu bairro" required>
            </div>

            <div class="col-md-4">
                <label for="nif" class="form-label"> Cidade </label>
                <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
            </div>

            <div class="col-md-4 mb-4">
                <label for="age" class="form-label"> CEP </label>
                <input type="number" class="form-control" id="cep" placeholder="Digite seu CEP" required>
            </div>
        </div>

        <hr class="barra custom-hr"> 

        <h2 class="mt-4 mb-4 text-center">Informações sobre o lar</h2>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="aluguelProprietario" class="form-label">Se sua casa é alugada, o proprietário permite animais?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aluguelProprietario" id="aluguelSim" value="sim" required>
                            <label class="form-check-label" for="aluguelSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aluguelProprietario" id="aluguelNao" value="nao" required>
                            <label class="form-check-label" for="aluguelNao">Não</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aluguelProprietario" id="aluguelNaoSei" value="nao-sei" required>
                            <label class="form-check-label" for="aluguelNaoSei">Não sei</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aluguelProprietario" id="aluguelPropria" value="minha-casa-propria" required>
                            <label class="form-check-label" for="aluguelPropria">Minha casa é própria</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label for="gatosCasa" class="form-label">Já teve gatos em casa?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gatosCasa" id="gatosSim" value="sim" required>
                            <label class="form-check-label" for="gatosSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gatosCasa" id="gatosNao" value="nao" required>
                            <label class="form-check-label" for="gatosNao">Não</label>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="outrosAnimais" class="form-label">Tem outros animais em casa?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="outrosAnimais" id="animaisGatos" value="gatos" required>
                            <label class="form-check-label" for="animaisGatos">Sim, gato(s)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="outrosAnimais" id="animaisCachorros" value="cachorros" required>
                            <label class="form-check-label" for="animaisCachorros">Sim, cachorro(s)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="outrosAnimais" id="animaisPassaros" value="passaros" required>
                            <label class="form-check-label" for="animaisPassaros">Sim, pássaro(s)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="outrosAnimais" id="animaisOutros" value="outros" required>
                            <label class="form-check-label" for="animaisOutros">Sim, outro(s)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="outrosAnimais" id="animaisNao" value="nao" required>
                            <label class="form-check-label" for="animaisNao">Não</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label for="orçamentoAnimais" class="form-label">Você tem condições de acrescentar no seu orçamento os gastos que terá com alimentação de boa qualidade, vacinas e atendimento veterinário?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="orçamentoAnimais" id="orçamentoSim" value="sim" required>
                            <label class="form-check-label" for="orçamentoSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="orçamentoAnimais" id="orçamentoNao" value="nao" required>
                            <label class="form-check-label" for="orçamentoNao">Não</label>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="alergiaCasa" class="form-label">Alguém na sua casa tem alergia?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alergiaCasa" id="alergiaSim" value="sim" required>
                            <label class="form-check-label" for="alergiaSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alergiaCasa" id="alergiaNao" value="nao" required>
                            <label class="form-check-label" for="alergiaNao">Não</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-5">
                        <label for="adocaoAnterior" class="form-label">Já entregou algum animal para adoção?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="adocaoAnterior" id="adocaoSim" value="sim" required>
                            <label class="form-check-label" for="adocaoSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="adocaoAnterior" id="adocaoNao" value="nao" required>
                            <label class="form-check-label" for="adocaoNao">Não</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="barra custom-hr"> 

        <h2 class="text-center mb-4">Condições</h2> 
        <div class="container d-flex justify-content-center align-items-center;">
            <div class="col-12 col-md-8">
                <div class="row justify-content-center">
                    <!-- Pergunta 1 -->
                    <div class="col-12 col-md-6 mb-3">
                        <label for="vistoriaCasa" class="form-label">Você concorda que sua casa seja vistoriada para averiguação das respostas acima?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="vistoriaCasa" id="vistoriaSim" value="sim" required>
                            <label class="form-check-label" for="vistoriaSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="vistoriaCasa" id="vistoriaNao" value="nao" required>
                            <label class="form-check-label" for="vistoriaNao">Não</label>
                        </div>
                    </div>

                    <!-- Pergunta 2 -->
                    <div class="col-12 col-md-6 mb-3">
                        <label for="devolverGatinho" class="form-label">Você concorda em nos devolver o gatinho se por qualquer motivo não puder continuar com ele?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="devolverGatinho" id="devolverSim" value="sim" required>
                            <label class="form-check-label" for="devolverSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="devolverGatinho" id="devolverNao" value="nao" required>
                            <label class="form-check-label" for="devolverNao">Não</label>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-2">
                    <!-- Pergunta 3 -->
                    <div class="col-12 col-md-6 mb-3">
                        <label for="repassarGatinho" class="form-label">Você concorda em não repassar o gatinho a ninguém sem antes nos consultar?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repassarGatinho" id="repassarSim" value="sim" required>
                            <label class="form-check-label" for="repassarSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repassarGatinho" id="repassarNao" value="nao" required>
                            <label class="form-check-label" for="repassarNao">Não</label>
                        </div>
                    </div>

                    <!-- Pergunta 4 -->
                    <div class="col-12 col-md-6 mb-5">
                        <label for="contratoAdocao" class="form-label">Você concorda em assinar um contrato de adoção no ato da entrega, responsabilizando pelos cuidados com o animal e sua segurança?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contratoAdocao" id="contratoSim" value="sim" required>
                            <label class="form-check-label" for="contratoSim">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contratoAdocao" id="contratoNao" value="nao" required>
                            <label class="form-check-label" for="contratoNao">Não</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>


<div class="form-check d-flex justify-content-center align-items-center">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked required>
    <label class="form-check-label ms-2" for="flexCheckChecked">
        Ao selecionar a opção ENVIAR FORMULÁRIO, concordo com os Termos de Uso e Política de Privacidade
    </label>
</div>

<div class="modal-footer d-flex justify-content-center">
    <a href="listagem.php"><button type="button" class="btn btn-cor-fundo m-5" data-bs-dismiss="modal">Voltar</button></a>
    <button type="button" class="btn btn-cor-fundo" id="btn-enviar" data-bs-toggle="modal" data-bs-target="#confirmarModal">Enviar relatório</button>
</div>

<!-- Modal de confirmação após envio -->
<div class="modal fade" id="confirmarModal" tabindex="-1" aria-labelledby="confirmarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="confirmarModalLabel">Relatório enviado com sucesso!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center align-items-center">
        <p class="text-center">Seu formulário foi enviado com sucesso. Agradecemos pelo interesse e iremos te responder em breve! Contamos com a sua compreensão em aguardar este prazo. Verifique sua caixa de spam caso não receba a nossa resposta.</p>
      </div>
      <div class="d-flex justify-content-center"> 
        <img src="img/check.jpeg" alt="check" width="250px" height="250px"> </img> 
      </div>
      <div class="modal-footer d-flex justify-content-center mb-2">
        <a href="index.php">
            <button type="button" class="btn btn-cor-fundo">Voltar ao Início</button> 
        </a>
      </div>
    </div>
  </div>
</div>


<?php
include_once("templates/footer.php");
?>

