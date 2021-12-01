<?php
    
    class MyExpenses {

        private int $cpf;
        private array $expense;
        private int $idade;

        public function __construct()
        {
            
        }

        /**
         * Get the value of cpf
         */ 
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         *
         * @return  self
         */ 
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        public function totalizaMes(){

        }

        public function gravaInfos(){
            
        }
    }


?>