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
            
    }

}


// $i = 0;
        // foreach ( $notas as $n ) 
        // {
        //          $this->notas [ $i ] = $n;
        //          $i++;
        // }


        // $m = new mediaG;
        // $m->setDados ( 5, 6,"Aluno");
        // $media = $m->calcularMediaGeometrica();
        // echo $media; 

