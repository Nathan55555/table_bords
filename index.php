<?php

include('fonction.php');
include('navbar.php');
redirection2();

if($_SESSION['mail']=='')
{
    header('Location:connexion.php');
}
if(count($_POST)==0)
{
    include('vue/vajout.php');

}
else
{

$nom =  $_POST['nom']; 
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$pwd = $_POST['pwd'];
$tel = $_POST['tel'];
$par = $_POST['par'];
add_eleve($nom,$prenom,$mail,$pwd,$tel,$par);
header('Location:table.php');

}
 





?>