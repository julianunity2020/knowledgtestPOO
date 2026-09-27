<?php

class arbusto extends planta {
    public int $anchoArbusto;
    public string $domestico;
    public string $variedadArbusto;
    public string $colorHojas;
    public bool $poda;

    public function __construct(string $nombre, int $alturaTallo, string $tieneHojas, string $climaIdeal, int $anchoArbusto, string $domestico, string $variedadArbusto, string $colorHojas, bool $poda)
    {
        parent::__construct($nombre, $alturaTallo, $tieneHojas, $climaIdeal);

        $this->anchoArbusto = $anchoArbusto;
        $this->domestico = $domestico;
        $this->variedadArbusto = $variedadArbusto;
        $this->colorHojas = $colorHojas;
        $this->poda = $poda;
    }

    public function saludar(){
        return "\"Hola soy un arbusto\"";
    }
}