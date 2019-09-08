<?php
    class Produto{
        public $id;
        public $nome;
        public $nomeCliente;
        public $precoCusto;
        public $custoFixo;
        public $custoVariavel;
        public $icms;
        public $cofins;
        public $lucro;
        public $resultado;

        public function Produto(){
            $this->criaProduto();
        }

        public function criaProduto(){
            $this->id;
            $this->nome;
            $this->nomeCliente;
            $this->precoCusto;
            $this->custoFixo;
            $this->nome;
            $this->custoVariavel;
            $this->icms;
            $this->cofins;
            $this->lucro;
            $this->resultado;
        }

        public function getId(){
            return $this->nome;
        }
        public function seId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNomeCliente(){
            return $this->nomeCliente;
        }
        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
        }

        public function getPrecoCusto(){
            return $this->precoCusto;
        }
        public function setPrecoCusto($precoCusto){
            $this->precoCusto = $precoCusto;
        }

        public function getCustoFixo(){
            return $this->precoCusto;
        }
        public function setCustoFixo($confirmar){
            $this->custoFixo = $confirmar;
        }

        public function getCustoVariavel(){
            return $this->custoVariavel;
        }
        public function setCustoVariavel($custoVariavel){
            $this->custoVariavel = $custoVariavel;
        }

        public function getIcms(){
            return $this->icms;
        }
        public function setIcms($icms){
            $this->icms = $icms;
        }

        public function getCofins(){
            return $this->cofins;
        }
        public function setCofins($cofins){
            $this->cofins = $cofins;
        }

        public function getLucro(){
            return $this->lucro;
        }
        public function setLucro($lucro){
            $this->lucro = $lucro;
        }

        public function getResultado(){
            return $this->resultado;
        }
        public function setResultado($resultado){
            $this->resultado = $resultado;
        }
        public function resultado($v1,$v2,$v3,$v4,$v5,$v6){
            $v1 = $this->precoCusto;
            $v2 = $this->custoFixo;
            $v3 = $this->custoVariavel;
            $v4 = $this->icms;
            $v5 = $this->cofins;
            $v6 = $this->lucro;
            $this->resultado = $v1 + $v2 + $v3 + $v4 + $v5 * $v6;
            return $this->resultado;
        }
    }
?>