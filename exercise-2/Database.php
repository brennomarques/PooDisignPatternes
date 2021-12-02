<?php
    interface Database{
        function insert();
        function update();
        function delete();
    }
    
    class Oracle implements Database{
        function insert(){
            echo "<br> Inserindo dados no Oracle <br>";
        }

        function update(){
            echo "<br> Atualizando dados no Oracle <br>";
        }
        function delete(){
            echo "<br> Delentando dados no Oracle <br>";
        }
    }
    
    class Postgres implements Database{
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

    class Mongo implements Database{
        function insert(){
            echo "<br> Inserindo dados no Mongo <br>";
        }

        function update(){
            echo "<br> Atualizando dados no Mongo <br>";
        }
        function delete(){
            echo "<br> Delentando dados no Mongo <br>";
        }
    }
    
    class MariaDb implements Database{
        function insert(){
            echo "<br> Inserindo dados no MariaDb <br>";
        }

        function update(){
            echo "<br> Atualizando dados no MariaDb <br>";
        }
        function delete(){
            echo "<br> Delentando dados no MariaDb <br>";
        }
    }

    class Firebase implements Database{
        function insert(){
            echo "<br> Inserindo dados no Firebase <br>";
        }

        function update(){
            echo "<br> Atualizando dados no Firebase <br>";
        }
        function delete(){
            echo "<br> Delentando dados no Firebase <br>";
        }
    }
    
    class MySQL implements Database{
        function insert(){
            echo "<br> Inserindo dados no MySQL <br>";
        }

        function update(){
            echo "<br> Atualizando dados no MySQL <br>";
        }
        function delete(){
            echo "<br> Delentando dados no MySQL <br>";
        }
    }
?>