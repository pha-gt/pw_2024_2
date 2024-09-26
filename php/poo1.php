<?php
class Melodia
{
    public $titulo;
    public $artista;
    public $duracion;

    //Constructor2: rutina de creación de espacio en memoria e inicializacion.
    public function __construct($_titulo  , $_artista, $_duracion)
    {
        $this->titulo = $_titulo;
        $this->artista= $_artista;
        $this->duracion= $_duracion;
    }

    public function imprimir()
    {
        echo "<br>--------------------------------------------<br>";
        echo "<h1>".$this->titulo."</h1>";
        echo "<i>".$this->artista."</i><br>";
        echo "duracion:[<b>".$this->duracion."</b>]";
        echo "<br>--------------------------------------------";
    }
}

//Rutina
$melodia1 = new Melodia("Fly me to the moon","Frank Sinatra",2.40);
$melodia1->titulo= "Fly me to the moon";
$melodia1->artista = "Frank Sinatra";
$melodia1->duracion= 2.40;


$melodia3 = new Melodia("","",0.0);
$melodia3->titulo = "Chop Suey!";
$melodia3->artista= "System of a down";
$melodia3->duracion=3.30;

$melodia2 =  new Melodia("Be my Baby", "The Ronettes",2.41);


$melodia1->imprimir();
$melodia2->imprimir();
$melodia3->imprimir();








?>


<!--
--------------------------------------------<br>
<h1>Rata de dos patas</h1>
<i>Paquita la del barrio</i><br>
duracion:[<b>5.3</b>]
<br>--------------------------------------------
--->