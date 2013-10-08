<?php
class Cabecera {
    private $titulo;
    public function __construct($tit) {
        $this->titulo = $tit;
    }
    public function graficar() {
        echo "<head>";
        echo "<title> $this->titulo  </title>";
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
        echo "</head>";
    }
}
?>