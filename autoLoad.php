<?php
    function pegaClasse($nameClass){
        require_once($nameClass . ".php");
    }

    spl_autoload_register("pegaClasse");
?>