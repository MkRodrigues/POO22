<?php 

require_once("IMediaGeometrica.php");
require_once("IMedia.php");

class MediaG implements IMediaGeometrica{
    private $aluno;
    private $nota1;
    private $nota2;

    // Métodos
    public function calcularMediaGeometrica(){
        return sqrt($this->nota1 * $this->nota2);
    }
    
    public function setDados ($nota1, $nota2, $aluno){
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->aluno = $aluno;   
    }
}