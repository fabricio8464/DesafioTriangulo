<?php

class Triangulo{

    public $numero;

    function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function gerarTriangulo(int $numero)
    {
        // utilizando o primeiro loop para criar a linha
        for($i=1; $i <= $numero; $i++){
            echo "<div style= 'display:table-row'>";
            // segunda linha onde seram geradas as colunas
            for($j=1; $j <=$i; $j++){
                $mostrar = $j==1 ? true : false;
                $response = $j==$i ? $this->gerandoElementos($i,"triangulo",$mostrar) : $this->gerandoElementos($i,"resposta",$mostrar);
                
                echo $response;
            }
            echo "</div>";
        }
    }

    public function gerandoElementos(int $numero, string $classe, bool $mostrar){
        if($mostrar == true){
            $elemento = "<div class='$classe'>$numero</div>";
        }else{
            $elemento = "<div class='$classe'></div>";
        }
        return $elemento;
    }

}
