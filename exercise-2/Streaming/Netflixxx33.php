<?php
     class Netflixxx33 extends Streaming{
        public function __construct(Postgres $database){
            array_push($this->bancosDados, $database);
        }

        public function streamVideo(){
            echo "<br>Transmitindo video na netflix<br>";
        }
     }
?>