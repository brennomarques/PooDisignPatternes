<?php
     abstract class Streaming{
        protected array $bancosDados = [];

        public function __construct(Database $database){
            array_push($this->bancosDados, $database);
        }

        public function addConnection(Database $database){
            if(!$this->checkConnection($database)){
                array_push($this->bancosDados, $database);
                echo "<br>O serviço de streaming {$this->getName()} conseguiu estabelecer uma conectar com o {$database->getName()}<br>";
                return ;
            }

            echo "<br> Conexão já existente, não é possível reconectar <br>";
        }

        public function checkConnection(Database $dabase):bool{
            foreach($this->bancosDados as $banco){
                if($banco == $dabase){
                    return true;
                }
            }

            return false;
        }


        public abstract function streamVideo();

        public function getName(){
            return get_class($this);
        }
    }
?>