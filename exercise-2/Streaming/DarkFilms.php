<?php 
    class DarkFilms extends Streaming{
        public function __construct(Mongo $database){
            array_push($this->bancosDados, $database);
        }

        public function streamVideo(){
            echo "<br>Transmitindo video na DarkFilms<br>";
        }
     }

?>