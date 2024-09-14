<?php 

class Celular
{
    private $marca;
    public $modelo;
    public $cor;

    public function ligar()
    {
         return 'Celular Ligado';
    }

    public function tirarFoto()
    {
        return 'Foto Tirada';
    }

    public function chamadaTelefonica()
    {
        return 'Chamada Realizada';
    }

    public function setMarca($marcaRecebida)
    {
        $this->marca = $marcaRecebida;
    }

    public function getMarca()
    {
        return $this->marca;
    }
} 

$celular = new Celular;
//echo $celular->ligar();

$celular->setMarca('Motorola') ;
$celular->modelo = "Moto Edge 30 Ultra";
$celular->cor = 'Preto';

echo $celular->getMarca();