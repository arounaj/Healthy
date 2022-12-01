<?php

$db=mysqli_connect("localhost","root","","healthy_club");

if($db){
//echo "connexion établie";
}
 else {
   echo "pas de connexion";
}
?>