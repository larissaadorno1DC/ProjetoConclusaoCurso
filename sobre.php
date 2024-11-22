<?php include_once("templates/header.php"); 
?>

<title>Meowly - Sobre </title>

<style>

    .custom-color {
        font-size: 40px; 
        color: #047C5D;
        font-weight: 600;
        padding: 10px 20px; 
    }

    img {
        border-radius: 10px;
    }

    .text-custom{
        font-size: 19px
    }
    .text-custom02{
        font-size: 25px;
        color: white;
    }
    


</style>

<div class="container text-center">
    <h2 class="custom-color m-4"> Sobre a causa... </h2>
    <div class="d-flex justify-content-center align-items-center">
        <img src="img/sobre01.jpeg" class="img-fluid" width="800px" weight="800px" alt="Causa">
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-11">
            <div class="p-3 text-center">
                <p class="text-custom"> A falta de espaço e recursos, somada ao aumento de animais abandonados, virou um problema sério para quem cuida deles. A falta de campanhas de conscientização e a dificuldade para fazer novas adoções só complicam ainda mais as coisas, deixando os abrigos estourados e sem fundos. Isabel Arantes, uma protetora em Santo André, é um bom exemplo disso. Ela acolhe os bichinhos em casa, mas enfrenta muitos desafios por não ter uma
                estrutura adequada. </p>
            </div>
            </div>
    </div>

    <h2 class="custom-color"> Nossa solução </h2>
    <div class="container-fluid d-flex bg-primary p-3 p-sm-5 mb-5">
        <div class="row g-3 row-cols-1 row-cols-lg-2 justify-content-center align-items-center">
            <div class="col-lg-7">
                <p class="text-custom02">Com a crescente diferença na taxa de adoção de gatos em relação a cães e outros animais, tornou-se evidente a necessidade de desenvolver um website e um aplicativo. Isso ajudaria a facilitar a adoção de felinos. Além disso, essa iniciativa pode contribuir para reduzir a superlotação nos abrigos, que é um desafio persistente em função do aumento significativo de animais abandonados. </p>
            </div>
            <div class="col-lg-5">
                <img src="img/sobre02.jpeg" class="img-fluid" width="350px" weight="350px" alt="Solução" />
            </div>
        </div>
    </div>
</div> 

<?php
include_once("templates/footer.php");
?>




