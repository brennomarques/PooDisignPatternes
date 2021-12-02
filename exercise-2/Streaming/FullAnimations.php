<?php
    class FullAnimations extends Streaming{
        public function __construct(MariaDb $database){
            array_push($this->bancosDados, $database);
        }

        public function streamVideo(){
            echo "<br>Transmitindo video na Full animations<br>";
        }
    }
?>