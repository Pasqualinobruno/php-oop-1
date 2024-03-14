<?php
/* 
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto 
stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella 
dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/
class Movie
{
    public $title;
    public $duration;
    public $releaseYear;
    public $producer;
    public $coverImage;
    public $genres;

    public function __construct($title, $duration, $releaseYear, $producer, $coverImage, $genres)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->releaseYear = $releaseYear;
        $this->producer = $producer;
        $this->coverImage = $coverImage;
        $this->genres = $genres;
    }

    public function getInfo()
    {
        $genreString = implode(', ', $this->genres);
        return "Title: {$this->title} <br> Duration: {$this->duration} <br> Release Year: 
{$this->releaseYear} <br> Producer: {$this->producer} <br> Genres: {$genreString}";
    }
}

$avatarGenres = array("Fantasy", "Adventure");
$avatar = new Movie('Avatar', 162, 2009, 'James Cameron', 'https://t3.gstatic.com/licensed-image?
q=tbn:ANd9GcRxQar5mlBeYdFTd00io3fOVEI7BcFdlk8i50eJ5tTeYoE02a2TB-Umo4cGjk64Evr8', $avatarGenres);

$matrixGenres = array("Action", "Sci-Fi");
$matrix = new Movie('Matrix', 136, 1999, 'Lana Wachowski, Lilly Wachowski', 'https://www.doppiozero.com/
sites/default/files/matrix_copertina.jpg', $matrixGenres);
