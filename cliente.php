<?php

class Cliente {

    private $id;
    private $cnpj;
    private $razaosocial;
    private $endereco;
    private $telefone;
    private $email;
    private $datacadastro;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
    
    public function getRazaoSocial() {
        return $this->razaosocial;
    }

    public function setRazaoSocial($razaosocial) {
        $this->razaosocial = $razaosocial;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDataCadastro() {
        return $this->datacadastro;
    }

    public function setDataCadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }    

    
}

?>