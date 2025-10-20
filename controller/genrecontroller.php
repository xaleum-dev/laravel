<?php
require_once "model/Genre.php";

class GenreController {
    public function index() {
        $genre = new Genre();
        $data = $genre->getAll();
        require "view/genreView.php";
    }
}
