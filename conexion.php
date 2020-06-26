<?php
try {

$conexion= new PDO('mysql:host=localhost;dbname=maestranza','root','');
} catch (PDOException $e) {
  echo "conexion fallida".$e->getMessage();

}



 ?>
c