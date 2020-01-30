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

if (isset($_GET['category'])) {
    if ($_GET['category'] == "Manga") {
        $books = $manager->getBookByCategory($_GET['category']);
    } elseif ($_GET['category'] == "Roman") {
        $books = $manager->getBookByCategory($_GET['category']);
    } elseif ($_GET['category'] == "Comic") {
        $books = $manager->getBookByCategory($_GET['category']);
    }
} else {
    // Displays books in table format
    $books = $manager->getBooks();
}





include "../views/bookVue.php";
