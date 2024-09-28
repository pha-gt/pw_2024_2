<?php
//Arreglo con llave
$telefono1 = (object) [
    "marca"=>"Samsung",
    "pantalla"=>6.2,
    "color"=>"blanco",
    "camaras"=>5
];

print_r($telefono1);

echo "<br>";

$telefono2 = (object) [
    "marca"=>"Xiaomi",
    "pantalla"=>6.1,
    "color"=>"Negro",
    "camaras"=>3
];
$telefono2->infrarojo=true;
print_r($telefono2);


echo "<br>";
echo "telefono2 marca:".$telefono2->marca;
echo "<br>";
echo "telefono1 marca:".$telefono1->marca;
echo "<br>";
echo "telefono2 color:".$telefono2->color;


?>