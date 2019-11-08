<?php
$db = Database::DB();
$manager = new BookManager($db);



include "../views/detailbookVue.php";
