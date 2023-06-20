<?php 

class Movie {
    public $titolo;
    public $genere;

    function __construct($_item1,$_item2) {
        $this->titolo = $_item1;
        $this->genere = $_item2;


    }

 
}


$movie1 = new Movie("Terminator","Action");



$movie2 = new Movie("Jumanji","Adventure");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <div>
        <h2>Movie1</h2>
        <ul>
            <li><?php echo $movie1 ->titolo ?></li>
            <li><?php echo $movie1 ->genere ?></li>

        </ul>
    </div>
    <div>
        <h2>Movie2</h2>
        <ul>
            <li><?php echo $movie2 -> titolo ?></li>
            <li><?php echo $movie2 -> genere ?></li>

        </ul>
    </div>
</body>
</html>
