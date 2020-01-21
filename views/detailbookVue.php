<?php include 'template/header.php'; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Accueil</a></li>
        <li class="breadcrumb-item"><a href="galerie.php">Notre Galerie</a></li>
        <li class="breadcrumb-item"><a href="book.php">Nos Mangas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Détail du manga</li>
    </ol>
</nav>

<section class="container article">
    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 row m-auto p-0 d-flex align-items-center">
        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/livre.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/livre.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/livre.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1 class="news"><?= $book->getName(); ?></h1>
            <p>Auteur : <?= $book->getAuthor(); ?></p>
            <p>Categorie : <?= $book->getCategory(); ?></p>
            <p>Disponible : <?= $book->getAvailable(); ?></p>
            <p class="articleBook">
                <?= $book->getContent(); ?>
            </p>
            <ul class="row m-auto p-0 buttonList">
                <li class="col-12 col-md-6 col-lg-4"> <a class="btn button text-button my-3">Acheter</a></li>
                <li class="col-12 col-md-6 col-lg-4"> <a href="configure.php?id=<?= $book->getId() ?>" class="btn button my-3">Editer</a></li>
                <li class="col-12 col-md-6 col-lg-4"> <a class="btn button text-button my-3">Supprimer</a></li>
            </ul>
        </div>
    </div>
</section>

<?php include 'template/footer.php'; ?>