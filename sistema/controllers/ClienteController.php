<?php
require_once  "../models/Cliente.php";
require_once "Conexao.php";

class ClienteController{

    public static function inserir(Cliente $cliente){

        $sql = "INSERT INTO cliente (nome, cpf, endereco, email, senha, telefone) VALUES (:nome, :cpf, :endereco, :email, :senha, :telefone)";




//        $sql .= '"' . $cliente->getNome() . '",';
//        $sql .= '"' . $cliente->getCpf() . '",';
//        $sql .= '"' . $cliente->getEndereco() . '",'
//        $sql .= '"' . $cliente->getEmail() . '",';
//        $sql .= '"' . $cliente->getSenha() . '",';
//        $sql .= '"' . $cliente->getTelefone() . '")';

        $db = Conexao::getInstance();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue(':endereco', $cliente->getEndereco());
        $stmt->bindValue(':email', $cliente->getEmail());
        $stmt->bindValue(':senha', $cliente->getSenha());
        $stmt->bindValue(':telefone', $cliente->getTelefone());

        $stmt->execute();

        return "OK";

        //echo $cliente->getNome();

        //return var_dump($cliente);
        //return $sql;
    }






}