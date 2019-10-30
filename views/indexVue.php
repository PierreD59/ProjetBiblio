<?php include 'template/header.php'; ?>
<div class="page">

  <main class="site-content">
    <div class="m-0 p-0 project">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Accueil</li>
        </ol>
      </nav>

      <div class="article">
        <h2 class="news">Les dernières nouveautés</h2>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-book row m-0 p-0">

          <?php
          foreach ($books as $book) { ?>
            <div class="m-3 col-xs-12 col-sm-12 col-md-4 col-lg-3">
              <a class="link card" href="../controllers/detailBook.php"><img src="../assets/img/livre.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-title"><?= $book->getName() ?></h2>
                  <p class="card-text"><?= $book->getContent() ?></p>
                </div>
              </a>
            </div>
          <?php } ?>

          <a href="../controllers/galerie.php" class="btn button">Voir plus</a>
        </div>

        <div class="article">
          <h2 class="news">Nos actualités</h2>
          <div class="list-actuality row m-0 p-0">

            <div class="col-sm-5 col-md-6 col-lg-3 p-0 m-3">
              <a class="link card" href="detailActualite.php"><img class="card-img-top" src="../assets/img/paradis.jpg" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Article 1</h3>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </a>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 p-0 m-3">
              <a class="link card" href="detailActualite.php"><img class="card-img-top" src="../assets/img/ecriture.jpg" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Article 2</h3>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </a>
            </div>
          </div>
          <a href="actualite.php" class="btn button">Voir toutes les actualités</a>
        </div>
      </div>
      <div id="blockStat">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 row p-0 m-0">

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0 m-0">
            <div class="blockStat">
              <div class="iconStat"><i class="fas fa-book"></i></div>
              <div class="counter" data-count="150">0</div>
              <div class="textIconstat">
                <h2>Mangas vendu</h2>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0 m-0">
            <div class="blockStat">
              <div class="iconStat"><i class="fas fa-book"></i></div>
              <div class="counter" data-count="100">0</div>
              <div class="textIconstat">
                <h2>Comics vendu</h2>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0 m-0">
            <div class="blockStat">
              <div class="iconStat"><i class="fas fa-book"></i></div>
              <div class="counter" data-count="500">0</div>
              <div class="textIconstat">
                <h2>Livres vendu</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

  <!-- <h1 class="news">Les Coups de coeur du mois</h1>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <img src="../assets/img/comic.jpg" class="imgSlide" alt="...">
          <img src="../assets/img/manga.jpg" class="imgSlide" alt="...">
          <img src="../assets/img/livreCouv.jpg" class="imgSlide" alt="...">
          <img src="../assets/img/bandeDessine.jpg" class="imgSlide" alt="...">
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <img src="../assets/img/comic.jpg" class="imgSlide" alt="...">
          <img src="../assets/img/manga.jpg" class="imgSlide" alt="...">
          <img src="../assets/img/livreCouv.jpg" class="imgSlide" alt="...">
          <img src="../assets/img/bandeDessine.jpg" class="imgSlide" alt="...">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->

</div>
<?php include 'template/footer.php'; ?>