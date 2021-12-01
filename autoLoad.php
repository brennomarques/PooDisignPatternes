<?php
    function pegaClasse($nameClass){
        require_once("exercise".DIRECTORY_SEPARATOR.$nameClass . ".php");
    }

    spl_autoload_register("pegaClasse");
?>