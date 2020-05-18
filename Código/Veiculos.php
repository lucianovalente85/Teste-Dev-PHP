<?php

    class Veiculos {
        public $dataDeCadastro;
        public $placa;
        public $modelo;
        public $marca;

       public function __construct(){

        }

        public function getDataDeCadasrtro()
        {            
            return date("d-m-Y", strtotime($this->dataDeCadastro));
        }
        
        public function setDataDeCadastro($dataDeCadastro)
        {
            $this->dataDeCadastro = $dataDeCadastro;
        }

        public function getPlaca()
        {
            return $this->placa;
        }
        
        public function setPlaca($placa)
        {
            $this->placa = $placa;
        }   
        public function getModelo()
        {
            return $this->modelo;
        }
        
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }   
        public function getMarca()
        {
            return $this->marca;
        }
        
        public function setMarca($marca)
        {
            $this->marca = $marca;
        }   
        
    }

