<?php include 'template/header.php'; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Accueil</a></li>
        <li class="breadcrumb-item active">Configuration</li>
    </ol>
</nav>
<div class="container article">

    <h1 class="news">Panneau de Configuration</h1>

    <div class="col-12 col-md-12 d-flex justify-content-center">
        <div class="col-12 col-md-6">
            <form method="post" action="configure.php?id=<?= $_GET['id'] ?>">
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
                        <label class="form-check-label" for="manga">Manga</label>
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
                <div class="form-group">
                    <input class="btn button" name="submit" type="submit" value="Editer un livre" />
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>