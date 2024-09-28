<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
        /*
        echo "<br>--------------------------------------------<br>";
        echo "<h1>".$this->titulo."</h1>";
        echo "<i>".$this->artista."</i><br>";
        echo "duracion:[<b>".$this->duracion."</b>]";
        echo "<br>--------------------------------------------";}
        */
            echo '<div class="card m-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="https://images.vexels.com/media/users/3/306199/isolated/preview/976d8d8aff9b81f7564da768f26ad5f9-notenfigur.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">'.$this->titulo.'</h5>
                    <p class="card-text">'.$this->artista.'</p>
                    <p class="card-text"><small class="text-body-secondary">'.$this->duracion.'</small></p>
                </div>
                </div>
            </div>
            </div>';


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

print_r($melodia1);

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