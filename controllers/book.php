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

// if ($manager->getCategory() == "Manga") {
//     $books = $manager->getBooks();
// }
// if ($manager->getCategory() == "Roman") {
//     $books = $manager->getBooks();
// }
// if ($manage->getCategory() == "Comic") {
//     $books = $manager->getBooks();
// }

include "../views/bookVue.php";
