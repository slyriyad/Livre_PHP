<?php

spl_autoload_register(function ($class_name) {
    require  $class_name . '.php';
});




$stephenKing = new Auteur("Stephen","King");

$Ca = new Livre("Ca","1986",1138,20,$stephenKing);
$Simetierre = new Livre("Simetierre","1983",374,15,$stephenKing);
$LeFleau = new Livre("Le Fléau","1978",823,14,$stephenKing);
$Shinning = new Livre("Shinning","1977",447,16,$stephenKing);

echo $stephenKing->afficherBibliographie();

