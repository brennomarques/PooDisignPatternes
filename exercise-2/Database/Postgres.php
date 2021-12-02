<?php   
    class Postgres extends Database{
        function insert(){
            echo "<br> Inserindo dados no postgres <br>";
        }

        function update(){
            echo "<br> Atualizando dados no postgres <br>";
        }
        function delete(){
            echo "<br> Delentando dados no postgres <br>";
        }
    }
?>