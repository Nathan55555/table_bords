<?php
include('fonction.php');
include('navbar.php');
redirection2();
if(count($_POST)==0)
{
    include('vue/vAddProf.php');

}
else
{
$tel = $_POST['tel'];   
$nom =  $_POST['nom']; 
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$pwd = $_POST['pwd'];
add_prof($nom,$prenom,$mail,$pwd,$tel);
header('location:compte.php');
}


?>