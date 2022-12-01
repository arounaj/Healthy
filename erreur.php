
<?php
  // Initialiser la session
  
include "Connexion.php";
 session_start(); 
 ?>


<?php
switch($_GET['code'])
{
case '404':header('Location: index.html/erreur-404.php');
break;
default:header('Location: index.html');
}
?>