<?php

//insere a classe da pasa classes 
include_once 'classes/Produto.class.php';

$produto = new Produto; #cria um novo produto usando a class
$produto->Codigo = 4001;
$produto->Descricao = "CD - The Best of Eric Clapton";

var_dump($produto);