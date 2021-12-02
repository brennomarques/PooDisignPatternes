<?php
    require_once('Correntista.php');

    Interface OperacaoBanco{
        public function encontraCorrentista($todosCorrentistas, $cpfProcurado):Correntista;
    }

    class OperacaoBancoClass implements OperacaoBanco{
        private static $instance = null;

        public function getInstance(){
            if(self::$instance == null){
                self::$instance = new OperacaoBancoClass();
            } 

            return self::$instance;
        }

        private function __construct(){}

        private function __clone(){}

        private function __wakeUp(){}

        public function encontraCorrentista($todosCorrentistas, $cpfProcurado):Correntista{
            $resultado = NULL;
            
            foreach($todosCorrentistas as $correntista){
                if($correntista->getCPFCliente() == $cpfProcurado){
                    $resultado = $correntista;
                }
            }

            return $resultado;
        }
    }
?>