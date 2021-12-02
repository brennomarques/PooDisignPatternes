<?php
    class AcademicGreen extends Streaming{
        public function __construct(Firebase $database){
            array_push($this->bancosDados, $database);
        }
        
        public function streamVideo(){
            echo "<br> Transmitindo video na AcademicGreen<br>";
        }
    }
?>