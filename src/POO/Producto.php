<?php
class Producto {
    //Atributos (privados para protegerlos)
    private $nombre;
    private $precio;
    private $iva;
    private $categoria;

    //Constructor: Se ejecuta el crear el objeto
    public function __construct($nombre, $precio, $iva=0.19, $categoria="") {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->iva = $iva;
        $this->categoria = $categoria;
    }

    //Metodos publicos para interactuar
    public function getPrecioFinal() {
        return $this->precio * (1 + $this->iva);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    //Metodo adicional para mostar la info formateada
    public function getInfo() {
        return "Producto: ($this->nombre) | Categoría: $this->categoria | Precio Final: $". $this->getPrecioFinal();
    }
}
?>