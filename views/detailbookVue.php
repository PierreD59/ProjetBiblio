<?php include 'template/header.php'; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Accueil</a></li>
        <li class="breadcrumb-item"><a href="galerie.php">Notre Galerie</a></li>
        <li class="breadcrumb-item"><a href="book.php">Nos Mangas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Détail du manga</li>
    </ol>
</nav>

<div class="container article">
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
            <h2 class="news">Nom du manga</h2>
            <p>Auteur : </p>
            <p>Categorie : </p>
            <p>Disponible : </p>
            <p class="articleBook">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, rem. Molestias doloremque tenetur voluptate rem,
                corrupti suscipit pariatur, beatae dolores molestiae sint laboriosam ipsa impedit, illum et facere consequatur quaerat.
            </p>
            <div class="col-6 col-xs-6 col-sm-6 col-md-12 col-lg-12 row m-auto p-0 d-flex justify-content-center">
                <a class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 btn button text-white m-3 pr-0 pl-0">Acheter</a>
                <a class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 btn button text-white m-3 pr-0 pl-0">Lire un extrait</a>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>