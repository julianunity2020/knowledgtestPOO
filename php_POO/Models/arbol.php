<?php

// require_once __DIR__ . 'planta.php';

class arbol extends planta {
    public string $variedad;
    public string $tipoTronco;
    public int $radioTronco;
    public string $color;
    public string $tipoHojas;

    public function __construct(string $nombre, int $alturaTallo, string $tieneHojas, string $climaIdeal, string $variedad, string $tipoTronco, int $radioTronco, string $color, string $tipoHojas)
    {
    
        parent:: __construct($nombre, $alturaTallo, $tieneHojas, $climaIdeal);
        $this->variedad = $variedad;
        $this->tipoTronco = $tipoTronco;
        $this->radioTronco = $radioTronco;
        $this->color = $color;
        $this->tipoHojas = $tipoHojas;


    }

    public function saludar(){
        return "\"Hola soy un arbol\"";
    }
}