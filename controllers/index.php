<?php

// autoload
function chargerClasse($classname)
{
    if (file_exists('../model/' . $classname . '.php')) {
        require '../model/' . $classname . '.php';
    } else {
        require '../entities/' . $classname . '.php';
    }
}
spl_autoload_register('chargerClasse');

$db = Database::DB();
$manager = new BookManager($db);


if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        if (isset($_POST['author']) && !empty($_POST['author'])) {
            $author = htmlspecialchars($_POST['author']);
            if (isset($_POST['content']) && !empty($_POST['content'])) {
                $content = htmlspecialchars($_POST['content']);
                if (isset($_POST['image']) && !empty($_POST['image'])) {
                    $image = htmlspecialchars($_POST['image']);
                    if (isset($_POST['alt']) && !empty($_POST['alt'])) {
                        $alt = htmlspecialchars($_POST['alt']);
                        if (isset($_POST['category'])) {
                            $category = htmlspecialchars($_POST['category']);
                        }
                        if ($_POST['category'] == "Manga") {
                            $manga = new Manga([
                                "name" => $name,
                                "author" => $author,
                                "content" => $content,
                                "category" => "Manga",
                                "available" => "1",
                                "image" => $image,
                                "alt" => $alt,
                            ]);
                            $manager->add($manga);
                            $mangaAlert = "Manga ajouté !";
                        } elseif ($_POST['category'] == "Roman") {
                            $roman = new Roman([
                                "name" => $name,
                                "author" => $author,
                                "content" => $content,
                                "category" => "Roman",
                                "available" => "1",
                                "image" => $image,
                                "alt" => $alt,
                            ]);
                            $manager->add($roman);
                            $romanAlert = "Roman ajouté !";
                        } elseif ($_POST['category'] == "Comic") {
                            $comic = new Comic([
                                "name" => $name,
                                "author" => $author,
                                "content" => $content,
                                "category" => "Comic",
                                "available" => "1",
                                "image" => $image,
                                "alt" => $alt,
                            ]);
                            $manager->add($comic);
                            $comicAlert = "Comic ajouté !";
                        } else {
                            echo "error category";
                        }
                    } else {
                        echo "error alt";
                    }
                } else {
                    echo "error image";
                }
            } else {
                echo "error content";
            }
        } else {
            echo "error author";
        }
    } else {
        echo "error name";
    }
}

$books = $manager->getBooks();

include "../views/indexVue.php";
