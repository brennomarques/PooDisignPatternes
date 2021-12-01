<?php
    require_once "autoLoad.php";

    $despesaMes2 = new DespesaMes(1, 40.50);
    $despesaMes5 = new DespesaMes(5, 12.50);
    $despesaMes11 = new DespesaMes(11, 4.50);
    $despesaMes12 = new DespesaMes(12, 3.50);
    
    $despesaDia10 = new DespesaDia(10, 12, 60.50);
    $despesaDia11 = new DespesaDia(11, 9, 5.45);
    $despesaDia13 = new DespesaDia(13, 10, 10.45);
    $despesaDia16 = new DespesaDia(16, 11, 10.40);
    $despesaDia20 = new DespesaDia(20, 12, 2.20);

    $user1 = array($despesaMes2, $despesaDia10);
    $user2 = array($despesaMes5, $despesaDia11);
    $user3 = array($despesaMes11, $despesaDia13);
   
    $input1 = new MyExpenses('3894', $user1);
    
    $soma = $input1->totalizaMes(1);
    echo "Valor Total: ".$soma->getValor()."<br>";
    $input1->GravaInfos($soma);

?>