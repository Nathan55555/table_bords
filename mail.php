<?php
include('fonction.php');
include('navbar.php');
$par = $_GET['par'];
if($par=='SLAM' or $par=='SISR')
{
    $eleve = liste_eleve_parcour($par);
}
else
{
    $eleve = liste_eleves();
}

if(empty($_POST['file']))
{
    include('./vue/vmail.php');
} 


?>