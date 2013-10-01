<?php
include_once 'titulo.php';
include_once 'cabecera.php';
include_once 'cuerpo.php';
include_once 'pie.php';
class Pagina {
    private $cabecera;
    private $titulo;
    private $cuerpo;
    private $pie;
    public function __construct($texto0, $texto1, $texto2) {
        $this->cabecera = new Cabecera($texto0);
        $this->titulo = new Titulo($texto1);
        $this->cuerpo = new Cuerpo();
        $this->pie = new Pie($texto2);
    }
    public function insertarCuerpo($texto) {
        $this->cuerpo->insertarParrafo($texto);
    }
    public function graficar() {
        $this->cabecera->graficar();
        $this->titulo->graficar();
        $this->cuerpo->graficar();
        $this->pie->graficar();
    }
}
?>