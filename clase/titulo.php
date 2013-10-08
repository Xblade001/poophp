<?php
class Titulo {
    private $titulo;
    public function __construct($tit) {
        $this->titulo = $tit;
    }
    public function graficar() {
        include_once ("../menu/ejemplo1.php");
        echo '<h1 style="text-align:center">' . $this->titulo . '</h1>';
    }
}
?>