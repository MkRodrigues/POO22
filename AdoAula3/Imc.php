<?php

class Imc
{
    public $peso;
    public $altura;

    public function getImc($peso1, $altura1)
    {
        $this->peso = $peso1;
        $this->altura = $altura1;
        $imc = ($peso1 * $altura1) ** 2;
        return $imc;
    }

    public function getStatus($imc)
    {
        echo ("O IMC é $imc");
    }
}
