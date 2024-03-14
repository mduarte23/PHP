<?php
Class Conta {
    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    #metodo retirar 
    #diminui o saldo da quantia
    function Retirar ($quantia){
        if ($quantia > 0){
            $this->Saldo -= $quantia;
        }
    }

    #metodo Depositar
    #aumenta o saldo da quantia
    function Depositar($quantia){
        if ($quantia > 0){
            $this->Saldo += $quantia;
        }
    }

    #metodo obterSaldo
    #mostra o saldo 
    function ObterSaldo(){
        return $this->Saldo;
    }
}