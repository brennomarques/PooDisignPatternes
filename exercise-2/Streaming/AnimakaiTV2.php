<?php
    class AnimakaiTv2 extends Streaming{
        public function __construct(Postgres $database){
            array_push($this->bancosDados, $database);
        }

        public function streamVideo(){
            echo "<br>Transmitindo video na AnimakaiTv2<br>";
        }
    }
?>