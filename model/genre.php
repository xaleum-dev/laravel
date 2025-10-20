<?php
class Genre {
    public $genres = [];

    public function __construct() {
        $this->genres = [
            "Fiksi",
            "Non-Fiksi",
            "Fantasi",
            "Misteri",
            "Romantis"
        ];
    }

    public function getAll() {
        return $this->genres;
    }
}
