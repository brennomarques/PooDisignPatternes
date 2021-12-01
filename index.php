<?php
    require_once "autoLoad.php";

    $exepense = new MyExpenses();

    $exepense->setCpf('123456');

    echo $exepense->getCpf();


?>