<?php
     abstract class Streaming{
        protected array $bancosDados = [];

        public function __construct(Database $database){
            array_push($this->bancosDados, $database);
        }

        public function addConnection(Database $database){
            if(!$this->checkConnection($database)){
                array_push($this->bancosDados, $database);
                echo "<br>{$this->getName()} conectado ao banco de dados {$database->getName()}!<br>";
                return ;
            }

            echo "<br>Não é possível realizar a mesma conexão com o banco de dados {$database->getName()} !<br>";;
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