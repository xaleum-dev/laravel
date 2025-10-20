<?php
require_once "model/Author.php";

class AuthorController {
    public function index() {
        $author = new Author();
        $data = $author->getAll();
        require "view/authorView.php";
    }
}
