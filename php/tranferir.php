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
}


$cancion1 = new Melodia("ansioso","grupo marrano", 3.4); 
$telefono3 = (object) [
    "marca"=>"nokia",
    "pantalla"=>2.5,
    "color"=>"Gris",
    "camaras"=>0
];

//header('Content-Type: application/json; charset=utf-8');

$respuesta=["cancion"=>$cancion1, "telefono"=>$telefono3];


//print_r($cancion1);
//echo "<br>";
//print_r($telefono3);
//echo json_encode($cancion1);
//echo json_encode($respuesta);
//print_r($telefono3)

$cancion2= json_decode('{"titulo":"thats life","artista":"Frank Sinatra","duracion":4.4}');
print_r($cancion2);

echo "titulo:".$cancion2->titulo;

$cancion3= json_decode( json_encode($cancion1));


$cancion3->titulo= "HOLA";
print_r($cancion1);
print_r($cancion3);



?>