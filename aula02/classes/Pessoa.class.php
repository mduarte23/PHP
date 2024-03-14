<?php
Class Pessoa{
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    #metodo para Crescer
    #aumenta  a altura em centimetros
    function Crescer($centimetros){
        if ($centimetros>0){
            $this->Altura += $centimetros;
        }   
    }

    # metodo para formar
    #altera a escolaridade

    function Formar($titulacao){
        $this->Escolaridade = $titulacao;
    }

    #metodo envelhecer
    #aumenta a idade em anos
    function Envelhecer($anos){
        if ($anos > 0){
            $this->Idade += $anos;
        }
    }
}