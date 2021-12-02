<?php
    class DespesaMes{
        private int $mes;
        private float $valor;

        public function __construct(int $mes, float $valor){
            $this->mes = $mes;
            $this->valor = $valor;
        }
        /**
         * Get the value of mes
         */ 
        public function getMes()
        {
            return $this->mes;
        }

        /**
         * Get the value of valor
         */ 
        public function getValor()
        {
            return $this->valor;
        }
    }
?>