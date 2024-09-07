<html> 
  <head> 
    <meta charset="utf-8" />
    <title>Calculadora</title> 
  </head>
  <body>

<?php 

$variable1 = $_GET['var_nombre'];
//$cantidad= $_GET['cant'];

?>
    <h1>Calculadora</h1> 

<?php
for($i=0; $i<strlen($variable1); $i++)
{
    echo "<strong>".$variable1."<br>"."</strong>";
}
?>
<hr>

<!--- VERSION HARD--->
<?php
for($i=0; $i<strlen($variable1); $i++)
{
?>
    <strong><?php echo $variable1;?><br></strong>

<?php   
}
?>






  </body>
</html>