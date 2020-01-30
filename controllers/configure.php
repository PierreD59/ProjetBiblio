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


// Checking form data to edit a new object 
if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
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
                                $newManga = new Manga([
                                    "id" => $_GET['id'],
                                    "name" => $name,
                                    "author" => $author,
                                    "content" => $content,
                                    "category" => "Manga",
                                    "image" => $image,
                                    "alt" => $alt,
                                ]);
                                $manager->update($newManga);
                                header("Location: index.php");
                            } elseif ($_POST['category'] == "Roman") {
                                $newRoman = new Roman([
                                    "id" => $_GET['id'],
                                    "name" => $name,
                                    "author" => $author,
                                    "content" => $content,
                                    "category" => "Roman",
                                    "image" => $image,
                                    "alt" => $alt,
                                ]);
                                $manager->update($newRoman);
                                header("Location: index.php");
                            } elseif ($_POST['category'] == "Comic") {
                                $newComic = new Comic([
                                    "id" => $_GET['id'],
                                    "name" => $name,
                                    "author" => $author,
                                    "content" => $content,
                                    "category" => "Comic",
                                    "image" => $image,
                                    "alt" => $alt,
                                ]);
                                $manager->update($newComic);
                                header("Location: index.php");
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
}



include "../views/configureVue.php";
