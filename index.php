<?php
include_once("templates/header.php");
?>


<title>Meowly - Home</title>

<div class="d-flex justify-content-center my-4">
  <div id="carouselExampleAutoplaying" class="carousel slide gatos-carrossel" data-bs-ride="carousel" data-bs-touch="false">
    <div class="carousel-inner gatos-carrossel">
      <div class="carousel-item active gatos-carrossel-item h-100">
        <img style="border-radius: 10px;" src="img/banner.jpeg" class="d-block w-100" alt="Banner01">
      </div>
      <div class="carousel-item gatos-carrossel-item h-100">
        <img style="border-radius: 10px;" src="img/banner02.jpeg" class="d-block w-100" alt="Gatinho cinza">
      </div>
      <div class="carousel-item gatos-carrossel-item h-100">
        <img style="border-radius: 10px;" src="img/banner03.jpeg" class="d-block w-100" alt="Gato malhado">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="d-flex justify-content-center my-5">
  <p class="h2 fw-bold text-primary">Nossos Gatinhos</p>
</div>
<div class="container d-flex">
  <div class="row row-cols-2 row-cols-lg-4 g-3 justify-content-center">
    <div class="col">
      <div class="card border-0 shadow-sm text-light bg-secondary">
        <div class="img-card"><img src="img/gato39.jpeg" class="card-img-top" alt="Gato malhado"></div>
        <div class="card-body text-center">
          <h5 class="fs-6 card-title fw-semibold">Oreo</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-0 shadow-sm text-light bg-secondary">
        <div class="img-card "><img src="img/gato37.jpeg" class="card-img-top" alt="Gato malhado"></div>
        <div class="card-body text-center">
          <h5 class="fs-6 card-title fw-semibold">Nino</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-0 shadow-sm text-light bg-secondary">
        <div class="img-card"><img src="img/gato35.jpeg" class="card-img-top" alt="Gato malhado"></div>
        <div class="card-body text-center">
          <h5 class="fs-6 card-title fw-semibold">Bento</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-0 shadow-sm text-light bg-secondary">
        <div class="img-card"><img src="img/gato34.jpeg" class="card-img-top" alt="Gato malhado"></div>
        <div class="card-body text-center">
          <h5 class="fs-6 card-title fw-semibold">Ravena</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="d-flex" style="width: 90vw;">
  <div class="ms-auto my-3">
    <a class="text-decoration-none" href="listagem.php"><p class="fw-bold text-primary">Ver mais...</p> </a>
  </div>
</div>

<div class="container-fluid d-flex bg-primary p-3 p-sm-5 mb-5">
  <div class="row g-3 row-cols-1 row-cols-lg-2 justify-content-center align-items-center">
    <div class="col-lg-5">
      <p class="h4 text-uppercase fw-semibold mb-3"><a href="#" class="text-light text-decoration-none">Leia mais sobre os cuidados com o seu felino!</a></p>
      <p class="h4 text-light"> <i class="fa-solid fa-paw"></i> Higiene bucal</p>
      <p class="h4 text-light"> <i class="fa-solid fa-paw"></i> Check-ups com veterinários</p>
      <p class="h4 text-light"> <i class="fa-solid fa-paw"></i> Sedentarismo</p>
      <p class="h4 text-light"> <i class="fa-solid fa-paw"></i> Estações do ano</p>
    </div>
    <div class="col-lg-5">
      <div class="img-cuidados"><img src="https://images.pexels.com/photos/45170/kittens-cat-cat-puppy-rush-45170.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Família com gato"></div>
    </div>
  </div>
</div>


<?php
include_once("templates/footer.php");
?>