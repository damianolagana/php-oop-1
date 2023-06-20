<?php 

class Movie {
    public $titolo;
    public $genere;

    function __construct($_item) {
        $this->genere = $_item;
    }

 
}


$movie1 = new Movie("Action");
$movie1 ->titolo = "Terminator";


// $movie2 = new Movie();
// $movie2 ->titolo = "Jumanji";
// $movie1 ->genere = "Adventure";



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
