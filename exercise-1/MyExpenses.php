<?php
    class MyExpenses {
        private string $cpf;
        private array $despesas;

        public function __construct(string $cpf, array $despesas)
        {
            $this->cpf = $cpf;
            $this->despesas = $despesas;
        }

        public function getCPF(){
            return $this->cpf;
        }
  
        public function totalizaMes(int $mes){
            $soma = 0;

            foreach($this->despesas as $despesa){
                $mesDespesa = $despesa->getMes();
               
                if($mesDespesa == $mes){
                    $soma += $despesa->getValor();
                }
            }

            $despesaMes = new DespesaMes($mes, $soma);

            return $despesaMes;
        }

        public function GravaInfos(DespesaMes $despesa) {
            $base = serialize($despesa);

            try{
                $file = fopen("./files/fileDataClass.txt", "w+");
                fwrite($file, "class " .$base.PHP_EOL);
                fclose($file);
                echo "Informações gravadas com sucesso!<br>";
            }catch(\Exception $error) {
                echo "Error: ".$error->getMessage();
            }
        }
    }

?>