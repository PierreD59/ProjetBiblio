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
$books = $manager->getBooks();

if (isset($_GET['id'])) {
    if (isset($_GET['category'])) {
        $bookId = $_GET['id'];
        $categoryBook = $_GET['category'];
    }
}

include "../views/galerieVue.php";
