<?php

// include_once __DIR__ . 'planta.php';

class flor extends planta{
    public string $colorPetalos;
    public int $promedioPetalos;
    public string $colorPistilo;
    public string $variedadFlor;
    public string $estacionFlorece;

    public function __construct(string $nombre, int $alturaTallo, string $tieneHojas, string $climaIdeal, string $colorPetalos, int $promedioPetalos, string $colorPistilo, string $variedadFlor, string $estacionFlorece)
    {
        parent:: __construct($nombre, $alturaTallo, $tieneHojas, $climaIdeal);

        $this->colorPetalos = $colorPetalos;
        $this->promedioPetalos = $promedioPetalos;
        $this->colorPistilo = $colorPistilo;
        $this->variedadFlor = $variedadFlor;
        $this->estacionFlorece = $estacionFlorece;
    }
    public function saludar(){
        return "\"Hola soy una flor\"";
    }

    // public function nome(){
    //     return $this->nombre;
    // }

}
