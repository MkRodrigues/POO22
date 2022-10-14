<?php

// Agregação
require_once("Produtos.php");
require_once("Pedidos.php");
require_once("Estoque.php");


class ItensPedido {

    private $idItem;
    private $numPedido;
    private $codProduto;
    private $qtdVendas;
    private $codRastreio;
    private $descricao;
    private $valorUnitVenda;

    // Métodos  

    public function getProdutos ( Estoque $estoque ) 
    {

    }

    public function addItem( Pedidos $pedidos ){

    }

    public function getValorUnidSaida(Estoque $estoque){

    }
}