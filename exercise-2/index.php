<?php
    require_once "autoLoad.php";

    $oracle = new Oracle();
    $postgres = new Postgres();
    $mongo = new Mongo();
    $MariaDB = new MariaDb();
    $firebase = new Firebase();
    $mysql = new MySQL();

    $disney = new DisneyPlus($oracle);
    $netflix = new Netflixxx33($postgres);
    $darkFilms = new DarkFilms($mongo);
    $fullAnimation = new FullAnimations($MariaDB);
    $animaKaiTv = new  AnimakaiTv2($postgres);
    $skyPobre = new SkyPobre($oracle);
    $plusOne = new PlusOne($mongo);
    $academicGreen = new Firebase($firebase);
    $northTv = new NorthTv($firebase);
    $telgoPlus = new TelgoPlus($mysql);
    $avianPlus = new Mongo($mongo);

    echo $disney->getName()."<br>";
    $disney->addConnection($oracle);
    $disney->addConnection($postgres);
    $disney->addConnection($MariaDB);
    $disney->addConnection($firebase);
    $disney->addConnection($firebase);
    $disney->addConnection($mongo);
    $disney->addConnection($mysql);
?>