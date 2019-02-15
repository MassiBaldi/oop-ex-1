<?php

  class Latte {
    public $marca;
    public $litri;
    public $prezzo;

    function __construct($marca, $litri, $prezzo) {
      $this->marca = $marca;
      $this->litri = $litri;
      $this->prezzo = $prezzo;
    }

    public function printProduct() {
      $product = $this->marca . ' - ' . $this->litri . ' - ' . $this->prezzo;

      return $product;
    }

  }
?>
