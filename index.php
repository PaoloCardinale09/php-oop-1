<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe 'Movie'
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;
    public $pegi;

    public function __construct (
        string $_title,
        string $_director,
        string $_year,
        string $_genre
    )
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->setPegi();
    }

    public function setPegi(){
        $this->pegi = "all";
        if($this->genre == "horror")  $this->pegi = "14+";
        if($this->genre == "erotic")  $this->pegi = "18+";
        

    }
}


$pulp_fiction = new Movie("Pulp Fiction", "Quentin Tarantino", "1994", "dramatic");

var_dump($pulp_fiction);