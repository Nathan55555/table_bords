<?php
include('fonction.php');
include('navbar.php');
$prof = liste_prof();
redirection2();
if(count($_POST)==0)
{
    include('vue/vAddAganda.php');

}
else
{
    $hp = $_POST['hp'];
    $date = $_POST['date'];
    $cours = $_POST['cours'];
    $prof = $_POST['prof'];
    add_cours($hp,$date,$cours,$prof);
}
?>