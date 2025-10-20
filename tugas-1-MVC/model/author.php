<?php
class Author {
    public $authors = [];

    public function __construct() {
        $this->authors = [
            "J.K. Rowling",
            "George R.R. Martin",
            "Agatha Christie",
            "Tere Liye",
            "Dan Brown"
        ];
    }

    public function getAll() {
        return $this->authors;
    }
}
