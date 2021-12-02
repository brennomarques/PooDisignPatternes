<?php
    require_once "../autoLoad.php";

    function atualizaSaldos($correntistas, $movimentosConta, $operacaoBanco){
        foreach($movimentosConta as $movimento){
            $correntista = $operacaoBanco->encontraCorrentista($correntistas, $movimento->getCPFCorretista());
            $novoSaldo = $correntista->getSaldo() + $movimento->getValorMovimento();
            $correntista->setSaldo($novoSaldo);

            GravarMovimentos($movimento);
        }
    };

    function GravarMovimentos(MovimentoContaClass $movimentoConta) {
        $base = serialize($movimentoConta);
        $nomeArquivo = $movimentoConta->getCPFCorretista().'.txt';

        try{
            $file = fopen("./files/".$nomeArquivo, "a+");
            fwrite($file, $base."\n \r");
            fclose($file);
        }catch(\Exception $error) {
            echo "Error: ".$error->getMessage();
        }
    }

    $correntista1 = new Correntista('111',350);
    $correntista2 = new Correntista('222',250);
    $correntista3 = new Correntista('333',250);
    $correntistas = array($correntista1, $correntista2, $correntista3);
    
    $movimento1 = new MovimentoContaClass('111',-100);
    $movimento2 = new MovimentoContaClass('111',+500);
    $movimento3 = new MovimentoContaClass('222', -1);
    $movimentos = array($movimento1,$movimento2,$movimento3);

    $operacaoBanco = OperacaoBancoClass::getInstance(); 

    atualizaSaldos($correntistas,$movimentos,$operacaoBanco);

    var_dump($correntistas);
?>