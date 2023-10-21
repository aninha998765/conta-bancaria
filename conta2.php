<?php

    class Conta{

        public $Cliente;
        public $Agencia;
        public $Conta;
        public $Saldo;
        public $Status;


        function _construct($Titular,$Agencia,$Conta,$Saldo,$Status){
            $this->Cliente = $Titular;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->Saldo = $Saldo;
            $this->Cancelada = $Status;

        }

        function _destruct(){
            echo "<br/><small>O objeto fou destruido.</small>";
        }

        function Sacar ($quantia){
            if ($quantia > 0){
                $this->$saldo -= $quantia;
            }
        }

        function Depositar ($quantia){
            if ($quantia > 0){
                $this->$saldo += $quantia;
            }
        }

        function ObterSaldo (){
          return $this->Saldo;
        }

    }
?>


