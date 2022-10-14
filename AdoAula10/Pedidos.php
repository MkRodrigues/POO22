<?php 

class Pedidos implements ICrud {

    private $numPedido;
    private $valorTotal;
    private $tipoEnvio;
    private $custoTotal;
    private $prazo;
    private $metodoPgto;
    private $statusEnvio;
    private $dadosEnvio;
    private $dataEnvio;
    private $descricaoEnvio;

    // Métodos Implementados
    public function criar (){
        // Código de função
    }

    public function editar (){
        // Código de função

    }

    public function excluir(){
        // Código de função

    }

    public function mostrar($chave){
        echo $chave;
    }

    public function atualizarDadosCartao(){
        // Código de função

    }

    public function atualizarEndereco(){
        // Código de função

    }

    public function finalizarPedido(){
        // Código de função

    }
}