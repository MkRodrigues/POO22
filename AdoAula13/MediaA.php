<?php 

require_once("IMediaAritmetica.php");

class MediaA implements IMediaAritmetica {
    private $aluno;
    private $nota1;
    private $nota2;
    
    // Métodos
    public function calcularMediaAritmetica(){
        return ($this->nota1 * $this->nota2)/2;
    }
    
    public function setDados ($nota1, $nota2, $aluno){
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->aluno = $aluno;
    } 
}