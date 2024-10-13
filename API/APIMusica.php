<?php
//Definir que la respuesta a la peticición es un Json y no html o texto plano
header('Content-Type: application/json; charset=utf-8');

require "Melodia.php";


//header('Allow: GET, PUT, DELETE, POST');

//obtener el contenido de la petición
$postBody = file_get_contents("php://input");

//Obtener el metodo de envio
//$_SERVER['REQUEST_METHOD']

switch($_SERVER['REQUEST_METHOD'])
{
    case 'POST':    //Insertar
        echo "Te has conectado con post";
    break;
    case 'GET':    //Consultar
        _get();
    break;
    case 'PUT':     //Actualizar
        echo "Te has conectado con put";
    break;
    case 'DELETE':  //Eliminar
        echo "Te has conectado con delete";
    break;

    default:
        echo "Te has conectado pero no se el metodo";
    break;
}

function _get()
{
    #crear 3 melodias
    $melodia1 = new Melodia("Fly me to the moon","Frank Sinatra", 3.5);
   // $melodia2 = new Melodia("La Racha","Cuca",4.2);
    $melodia3 = new Melodia("Hit Me","Molotov",4.18);
    $melodia4 = new Melodia("Frijolero","Molotov",6.2);
    $melodia5 = new Melodia("One","Metallica",8.2);
    $melodia6 = new Melodia("Black mail","Megadeath",4.2);

    //Lista canciones en el equivalente al resultado de la consulta de tabla Melodias
    $lista_canciones = [$melodia1 /*,$melodia2*/,$melodia3,$melodia4,$melodia5,$melodia6];

    echo json_encode($lista_canciones);


}








?>