<?php include 'template/header.php'; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Accueil</a></li>
        <li class="breadcrumb-item"><a href="galerie.php">Notre Galerie</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nos Mangas</li>
    </ol>
</nav>

<div class="container article">
    <h2 class="news">Nos <?= $_GET['category'] ?>s</h2>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-book row m-0 p-0">
        <?php foreach ($books as $book) { ?>
            <div class="m-3 col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <a class="link card" href="detailBook.php?id=<?= $book->getId(); ?>&category=<?= $book->getCategory(); ?>">
                    <img src="<?= $book->getImage() ?>" class="card-img-top" alt="<?= $book->getAlt() ?>">
                    <div class="card-body">
                        <h2 class="card-title"><?= $book->getName() ?></h2>
                        <p class="card-author">Auteur : <?= $book->getAuthor() ?></p>
                        <p class="card-text"><?= $book->getCategory() ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>

<?php include 'template/footer.php'; ?>