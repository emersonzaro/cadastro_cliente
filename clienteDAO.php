<?php

//include_once 'conexao.php';
//include_once 'cliente.php';
require_once("conexao.php");
require_once("cliente.php");


class ClienteDao {

    public static $instance;

    function __construct() {

    }

        public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new ClienteDao();
        return self::$instance;
    }

    
    public function getNextID() {
        try {
            $sql = "SELECT * FROM  cliente WHERE id = id;";       
            $result = conexao::getInstance()->query($sql);
            $final_result = $result->fetch(PDO::FETCH_ASSOC);
            return $final_result['Auto_increment'];     
            
            var_dump($final_result);

        } catch (Exception $e) {
            print "Ocorreu um erro.";
        }
    }     
   

    public function inserir(Cliente $cliente) {
        try {
            $sql = "INSERT INTO cliente ( 
                    id,
                    cnpj,
                    razaosocial,
                    endereco,
                    telefone,
                    email, 
                    datacadastro
                    )
                    VALUES (                    
                    :id
                    :cnpj,
                    :razaosocial,
                    :endereco,
                    :telefone,
                    :email,
                    :datacadastro                    
                    )";

            $p_sql = Conexao::getInstance()->prepare($sql);            

            $p_sql->bindValue(":id", $cliente->getId());
            $p_sql->bindValue(":cnpj", $cliente->getCnpj());
            $p_sql->bindValue(":razaosocial", $cliente->getRazaoSocial());
            $p_sql->bindValue(":endereco", $cliente->getEndereco());
            $p_sql->bindValue(":telefone", $cliente->getTelefone());
            $p_sql->bindValue(":email", $cliente->getEmail());
            $p_sql->bindValue(":datacadastro", $cliente->getDataCadastro(new DateTime('Y-m-d')));
    
            return $p_sql->execute();   
            
        } catch (Exception $e) {
            print "Ocorreu um erro.";
            
           
        }
    }

    
}