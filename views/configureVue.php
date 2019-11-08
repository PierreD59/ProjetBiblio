<?php include 'template/header.php'; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Accueil</a></li>
        <li class="breadcrumb-item active">Configuration</li>
    </ol>
</nav>
<div class="container article">

    <h2 class="news">Panneau de Configuration</h2>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-configure row m-0 p-0">

        <div id="form" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box">
            <h1>Ajouter un Livre</h1>
            <form method="post" action="configure.php">
                <input type="hidden" name="id" />
                <div class="input-box">
                    <label for="name">Nom du Livre</label>
                    <input type="text" name="name" placeholder="azertyuiop" />
                </div>
                <div class="input-box">
                    <label for="author">Son Auteur</label>
                    <input type="text" name="author" placeholder="John Doe" />
                </div>
                <div class="input-box">
                    <label for="content">Son Résumé</label>
                    <input type="text" name="content" placeholder="Un résumé" />
                </div>

                <div class="input-box">
                    <div class="form-check">
                        <label class="form-check-label" for="manga">
                            Manga
                        </label>
                        <input class="form-check-input" type="radio" name="category" id="Manga" value="Manga" checked>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="roman">
                            Roman
                        </label>
                        <input class="form-check-input" type="radio" name="category" id="Roman" value="Roman">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="comic">
                            Comic
                        </label>
                        <input class="form-check-input" type="radio" name="category" id="Comic" value="Comic">
                    </div>
                </div>
                <div class="input-box mt-5">
                    <label for="image">Image</label>
                    <input type="text" placeholder="../assets/img/livre.jpg" name="image" />
                </div>
                <div class="input-box">
                    <label for="alt">Description de l'image</label>
                    <input type="text" placeholder="azertyuiop" name="alt" />
                </div>
                <input type="submit" value="Submit" />
            </form>
        </div>

        <div class="boxButton">
            <div class="btn btn-primary" id="buttonAdd">Ajouter</div>
            <div class="btn btn-primary" id="buttonEdit">Editer</div>
            <div class="btn btn-primary" id="buttonSup">Supprimer</div>
        </div>

    </div>
</div>


<?php include 'template/footer.php'; ?>