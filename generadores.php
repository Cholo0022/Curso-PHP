<?php

function contador(){
    for ($i = 1; $i <=10; $i++){
        yield $i;
    }
}

$generador = contador();
foreach($generador as $valor){
    echo "$valor\n";
}

class miClase{
    public $cifra = 50;

    public function &obtenerValor(){
        return $this->cifra;
    }
}

$objeto = new miClase;
$miCifra = &$objeto->obtenerValor();
$objeto->cifra = 5;
echo $miCifra;
?>

