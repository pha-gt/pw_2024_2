<?php
//Arreglo
$var_arreglo = [];           //Arreglo vacio
$var_arreglo2 =[4,9,10];     //Areglo de 3 elemento


print_r($var_arreglo2);
$contar_elementos = count($var_arreglo);
echo "<br>Cantidad:".$contar_elementos;


echo "<br>";
array_push($var_arreglo2,200);   //Agregar elementos
print_r($var_arreglo2);

echo "<br>";
$var_arreglo2 = array_slice($var_arreglo2,1 ,3);   //Crear un nuevo arreglo 
print_r($var_arreglo2);

echo "<br>";
array_pop($var_arreglo2);                   //Quitar el ultimo elemento
print_r($var_arreglo2);


echo "<br>";
echo "<br>";
$var_arreglo2 =[4,9,10,1,3,7,99]; 
print_r($var_arreglo2);
echo "<br>";
array_splice($var_arreglo2,1 ,2);           //Quita elmentos especifica indice inicio borrar  y cuantos 
print_r($var_arreglo2);


echo "<br>";
echo array_search(99,$var_arreglo2);          //Buscar en arreglo (<Valor a buscar>, <arreglo>)

echo "<br>";
echo "<br>";
$arreglo_claves=[                              //Asignacion de indices con una palabra
            "nombre"=>"Fabian",                 
            "apellido_p"=>"Gonzalez", 
            "apelllido_m"=>"Torres"];

print_r($arreglo_claves);

echo "<br>";
echo array_search("Fabian",$arreglo_claves);   




?>