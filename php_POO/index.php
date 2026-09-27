<?php

require_once __DIR__ . "/Models/planta.php";
require_once __DIR__ . "/Models/flor.php";  
require_once __DIR__ . "/Models/arbusto.php";
require_once __DIR__ . "/Models/arbol.php";


$planta1 = new flor("Rosa", 10, "ovaladas", "cálido", "rojos", 40, "rosa claro", "rosa rosa", "otoño");
echo "El nombre de esta planta es " . $planta1->name() . " y saluda diciendo " . $planta1->saludar()  . "<br> <br>";

$planta2 = new arbusto("Arbusto del este", 10, "ovaladas", "cálido", 39, "si", "pino", "verdes", true);
echo "El nombre de esta planta es " . $planta2->name() . " y saluda diciendo " . $planta2->saludar() ."<br> <br>";

$planta3 = new arbol("Arbol milagroso", 10, "ovaladas", "cálido", "eucalipto", "leñoso", 30, "café", "alargadas");
echo "El nombre de esta planta es " . $planta3->name() . " y saluda diciendo " . $planta3->saludar() ."<br> <br>";

// $planta4 