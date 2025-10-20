<?php
$controller = $_GET['controller'] ?? 'genre';

if($controller == 'genre') {
    require "controller/GenreController.php";
    $c = new GenreController();
    $c->index();
} elseif($controller == 'author') {
    require "controller/AuthorController.php";
    $c = new AuthorController();
    $c->index();
} else {
    echo "Halaman tidak ditemukan";
}
