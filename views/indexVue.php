<?php include 'template/header.php'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Accueil</li>
  </ol>
</nav>

<div class="container article">
  <h2 class="news">Les dernières nouveautés</h2>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-book row m-0 p-0">

      <?php
      foreach ($books as $book) { ?>
        <div class="m-3 p-0 col-xs-12 col-sm-12 col-md-4 col-lg-3">
          <a class="link card" href="detailBook.php?id=<?= $book->getId() ?>&category=<?= $book->getCategory() ?>"><img src="../assets/img/livre.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title"><?= $book->getName() ?></h2>
              <p class="card-author"><?= $book->getAuthor() ?></p>
              <p class="card-text"><?= $book->getContent() ?></p>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>

    <ul class="row m-0 p-0 buttonList">
      <li class="col-12 col-md-4"> <a href="../controllers/galerie.php" class="btn button my-3">Voir plus</a></li>
      <li class="col-12 col-md-4"> <a type="button" class="btn button my-3" data-toggle="modal" data-target="#exampleModalCenter">Ajouter un livre</a></li>
    </ul>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalCenterTitle">Ajouter un livre</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-bodyBlock">
        <form method="post" action="index.php">
          <div class="form-group">
            <label for="name">Nom du Livre</label>
            <input class="form-control" type="text" name="name" placeholder="azertyuiop" />
          </div>
          <div class="form-group">
            <label for="author">Son Auteur</label>
            <input class="form-control" type="text" name="author" placeholder="John Doe" />
          </div>
          <div class="form-group">
            <label for="content">Son Résumé</label>
            <input class="form-control" type="text" name="content" placeholder="Un résumé" />
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="category" id="Manga" value="Manga" checked>
              <label class="form-check-label" for="manga"> Manga </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="category" id="Roman" value="Roman">
              <label class="form-check-label" for="roman">Roman</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="category" id="Comic" value="Comic">
              <label class="form-check-label" for="comic">Comic</label>
            </div>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control" type="text" placeholder="../assets/img/livre.jpg" name="image" />
          </div>
          <div class="form-group">
            <label for="alt">Description de l'image</label>
            <input class="form-control" type="text" placeholder="azertyuiop" name="alt" />
          </div>
          <div class="modal-footer">
            <input class="btn button" type="submit" value="Ajouter un livre" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- <div class="container article">
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
  <a href="actualite.php" class="btn button button-actu">Voir toutes les actualités</a>
</div> -->

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

<?php include 'template/footer.php'; ?>