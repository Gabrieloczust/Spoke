<?php
    class Usuario{
        public $nick;
        public $email;
        public $senha;
        public $confirmarsenha;
        public $nome;
        public $sobrenome;
        public $estado;
        public $cidade;


        public function Usuario(){
            $this->criaUsuario();
        }

        private function criaUsuario(){
            $this->nick;
            $this->email;
            $this->senha;
            $this->nome;
            $this->sobrenome;
            $this->estado;
            $this->cidade;
        }

        public function getNick(){
            return $this->nick;
        }
        public function setNick($nick){
            $this->nick = $nick;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getConfirmarsenha(){
            return $this->senha;
        }
        public function setConfirmarsenha($confirmar){
            $this->confirmarsenha = $confirmar;
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

        public function getEstado(){
            return $this->estado;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function getCidade(){
            return $this->cidade;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
    }
?>