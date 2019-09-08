<?php
require_once 'Conexao.php';
    class Cliente{
        public $nome;
        public $sobrenome;
        public $email;
        public $telefone;
        public $data;


        public function Cliente(){
            $this->criaCliente();
        }

        private function criaCliente(){
            $this->nome;
            $this->sobrenome;
            $this->email;
            $this->telefone;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public static function listar(){
            $query = "SELECT id, nome, sobrenome FROM clientes ORDER BY nome";
            $conexao = Conexao::pegarConexao();
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }
?>