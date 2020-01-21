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

// Delete Book
if (isset($_POST['delete'])) {
    if (isset($_POST['id'])) {
        $manager->deleteBook($_POST['id']);
        header('location: index.php');
    }
}

// Displays all the details of the book
if (isset($_GET['id'])) {
    if (isset($_GET['category'])) {
        $bookId = $_GET['id'];
        $categoryBook = $_GET['category'];

        $book = $manager->getBook($bookId);
    }
}

include "../views/detailbookVue.php";
