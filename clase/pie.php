<?php
class Pie {
    private $titulo;
    public function __construct($tit) {
        $this->titulo = $tit;
    }
    public function graficar() {
        $fecha = date('d/m/Y');
        echo '<h4 style="text-align:left">' . $this->titulo . '</h4>';
        echo '<h6 style="text-align:center">' . $fecha . '</h6>';
    }
}
?>