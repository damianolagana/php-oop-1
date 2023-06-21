<?php 

class Movie {
    public $titolo;
    public $genere;
    public $duration;
    public $poster;


    function __construct($titolo,$genere,$duration,$poster) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->duration = $duration;
        $this->poster = $poster;
        
    }

 
}


?>
