<?php

include_once 'cliente.php';
include_once 'clienteDAO.php';

$id = isset($_POST['id']);
$cnpj = isset($_POST['cnpj']);
$razaosocial = isset($_POST['razaosocial']);
$endereco = isset($_POST['endereco']);
$telefone = isset($_POST['telefone']);
$email = isset($_POST['email']);
$datacadastro = isset($_POST['datacadastro']);

$vrObj = new clienteDao();

$cliente = new Cliente();

$cliente->setCnpj($cnpj);
$cliente->setRazaoSocial($razaosocial);
$cliente->setEndereco($endereco);
$cliente->setTelefone($telefone);
$cliente->setEmail($email);
$cliente->setDataCadastro($datacadastro);

$vrObj->inserir($cliente);

var_dump($cliente);

?>