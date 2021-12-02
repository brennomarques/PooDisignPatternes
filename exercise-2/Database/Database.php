<?php
     abstract class Database{
        abstract function insert();
        abstract function update();
        abstract function delete();

        public function getName(){
            return get_class($this);
        }
    }
?>