<?php
    class DespesaDia extends DespesaMes{
        private int $dia;

        public function __construct(int $dia, int $mes, float $valor){
            parent::__construct($mes, $valor);
            $this->dia = $dia;
        }
        /**
         * Get the value of dia
         */ 
        public function getDia()
        {
            return $this->dia;
        }
    }
?>