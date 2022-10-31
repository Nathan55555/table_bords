<?php
include('fonction.php');    
include('navbar.php');
redirection2();
$date = date('Y-m-d');
$cours = liste_cours($date);
$prof = liste_prof();
$eleve = liste_eleves();
include('vue/vcompte.php');

?>