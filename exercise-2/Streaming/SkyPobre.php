<?php
    class SkyPobre extends Streaming{
        public function __construct(Oracle $database){
            array_push($this->bancosDados, $database);
        }

        public function streamVideo(){
            echo "<br>Transmitindo video na SkyPobre<br>";
        }
    }
?>