<?php 
    class TelgoPlus extends Streaming{
        public function __construct(MySQL $database){
            array_push($this->bancosDados, $database);
        }

        public function streamVideo(){
            echo "<br>Transmitindo video na TelgoPlus<br>";
        }
    }
?>