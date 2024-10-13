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
?>