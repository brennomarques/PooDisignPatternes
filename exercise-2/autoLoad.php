<?php
    function pegaClasse($nameClass){
        $database = "./Database/".$nameClass.".php";
        $streaming = "./Streaming/".$nameClass.".php";

        if(file_exists( $database)){
            require_once($database);
        }else if(file_exists($streaming)){
            require_once($streaming);
        }
        
    }
    spl_autoload_register("pegaClasse");
?>