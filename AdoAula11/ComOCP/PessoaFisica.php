<?php

require_once("Pessoa.php");
require_once("IVendas.php");


class PessoaFisica extends Pessoa implements IVendas {

    public $nome; 

    // Métodos
    
    public function listarPessoas(): void{

    }

    public function listarEmpresas(): void{

    }


}