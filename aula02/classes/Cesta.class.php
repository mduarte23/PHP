<?php
class Cesta{
    private $itens;
    #adiciona Itens na cesta
    function AdicionaItem(Produto $item){
        $this->itens[] = $item;
    }
    #exibe a lista de produtos
    function ExibeLista(){
        foreach ($this->itens as $item){
            $item->ImprimeEtiqueta();
        }
    }
    #calcula o valor da cesta
    function CalculaTotal(){
        $total = null;
        foreach ($this->itens as $item){
            $total += $item->Preco;
        }
        return 'R$ '.$total;
    }
}

