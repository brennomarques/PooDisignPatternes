<?php
    class PlusOne extends Streaming{
        public function __construct(Mongo $database){
            array_push($this->bancosDados, $database);
        }

        public function streamVideo(){
            echo "<br>Transmitindo video na PlusOne<br>";
        }
    }

?>