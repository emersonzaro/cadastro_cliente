<?php

class Produto {

    private $id;
    private $produto;
    private $cliente_id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }


    public function getProduto() {
        return $this->produto;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }


    public function getClienteId() {
        return $this->cliente_id;
    }

    public function setClienteId($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

}



?>