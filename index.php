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

    public function getFilm(){
        return "Titolo: $this->title,  Regista: $this->director,  Anno: $this->year,  Genere: $this->genre,  Fascia d'età: $this->pegi";
    }
}


$pulp_fiction = new Movie("Pulp Fiction", "Quentin Tarantino", "1994", "dramatic");

$us = new Movie("Us", "Jordan Pelee", "2019", "horror");

// var_dump($pulp_fiction);
// $card_pulp_fiction = $pulp_fiction-> getFilm();
// $card_us= $us-> getFilm();
// echo $card_pulp_fiction;
// echo $card_us;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex container justify-content-around py-5">
        <div class="card" style="width: 18rem;">
            <img src="https://static.posters.cz/image/750webp/1288.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="text-center"> <?php echo $pulp_fiction->title ?></h2>
                <p class="card-text h5 text-center"> <?php echo $pulp_fiction->director ?></p>
                <p class="card-text m-0 text-center"> <?php echo $pulp_fiction->year ?></p>
                <p class="card-text text-center m-0"> <?php echo $pulp_fiction->genre ?></p>
                <p class="card-text text-center">pegi: <?php echo $pulp_fiction->pegi ?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/512SHRtVjuL._AC_SX425_.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="text-center"> <?php echo $us->title ?></h2>
                <p class="card-text h5 text-center"> <?php echo $us->director ?></p>
                <p class="card-text m-0 text-center"> <?php echo $us->year ?></p>
                <p class="card-text text-center m-0"> <?php echo $us->genre ?></p>
                <p class="card-text text-center"> pegi: <?php echo $us->pegi ?></p>
            </div>
        </div>
    </div>

</body>

</html>