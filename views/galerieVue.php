<?php include 'template/header.php'; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Galerie</li>
    </ol>
</nav>

<div class="container article">
    <h2 class="news">Que souhaiterez-vous lire ?</h2>
    <ul class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 row p-0 m-0 text-center d-flex justify-content-center">
        <li class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <a class="listGalery" href="book.php?category=Manga">
                <div class="block p-0 m-3"><i class="fas fa-book-open iconBook"></i></div>
                <span class="text-block">Mangas</p>
            </a>
        </li>
        <li class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <a class="listGalery" href="book.php?category=Comic">
                <div class="block p-0 m-3"><i class="fas fa-journal-whills iconBook"></i></div>
                <span class="text-block">Comics</p>
            </a>
        </li>
        <li class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <a class="listGalery" href="book.php?category=Roman">
                <div class=" block p-0 m-3"><i class="fas fa-book iconBook"></i>
                </div>
                <span class="text-block">Romans</sp>
            </a>
        </li>
    </ul>
</div>

<?php include 'template/footer.php'; ?>