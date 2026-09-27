<?php

class planta{
    public string $nombre;
    public int $alturaTallo;
    public string $tieneHojas;
    public string $climaIdeal;

    public function __construct(string $nombre, int $alturaTallo, string $tieneHojas, string $climaIdeal  ){

        $this->nombre = $nombre;
        $this->alturaTallo = $alturaTallo;
        $this->tieneHojas = $tieneHojas;
        $this->climaIdeal = $climaIdeal;

    }

    public function crecer(){
        return "Estoy creciendo";
    }
    public function name(){
        return $this->nombre;
    }

}

