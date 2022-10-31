<?php
function liste_eleve_parcour($par)
{
    $cnx = connecterServeurBD();
    $requete = "select * from Eleves where parcours = '".$par."' order by nom ASC;";
    $jeuResultat=$cnx->query($requete); 
  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        $info[$i]['nom']=$ligne['nom'];
        $info[$i]['prenom']=$ligne['prenom'];
        $info[$i]['mail']=$ligne['mail'];
        $info[$i]['password']=$ligne['password'];
        $info[$i]['tel']=$ligne['tel'];

        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  
  return $info;
}
function liste_cours($date)
{
    $cnx = connecterServeurBD();
    $requete = "select * from aganda where date = '".$date."' order by horaire ASC;";
    $jeuResultat=$cnx->query($requete); 
  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        $info[$i]['horaire']=$ligne['horaire'];
        $info[$i]['cours']=$ligne['cours'];
        $info[$i]['date']=$ligne['date'];
        $info[$i]['prof']=$ligne['prof'];
       

        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    if(empty($info))
    {
        return '0';
    }
    else
    {
        return $info;
    }

  


}
function add_cours($hp,$date,$cours,$prof)
{
    $cnx = connecterServeurBD();
    $requete = "insert into aganda (horaire,date,cours,prof) value ('".$hp."','".$date."','".$cours."','".$prof."');";
    echo $requete;
    $ok=$cnx->query($requete);
}
function connecterServeurBD() 
{
    $PARAM_hote='localhost'; 
    $PARAM_port='3306';
    $PARAM_nom_bd='OrtSup'; // le nom de votre base de donn�es
    $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    // mot de passe de l'utilisateur pour se connecter

    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur,'root');
 
    return $connect;
}
function add_eleve($nom,$prenom,$mail,$pwd,$tel,$par)
{
    $cnx = connecterServeurBD();
    $requete = "insert into Eleves (nom,prenom,mail,password,tel,parcours) value ('".$nom."','".$prenom."','".$mail."','".$pwd."','".$tel."','".$par."');";
    echo $requete;
    $ok=$cnx->query($requete);
}
function add_prof($nom,$prenom,$mail,$pwd,$tel)
{
    $cnx = connecterServeurBD();
    $requete = "insert into prof (nom,prenom,mail,password,tel) value ('".$nom."','".$prenom."','".$mail."','".$pwd."','".$tel."');";
    echo $requete;
    $ok=$cnx->query($requete);
}
function redirection()
{
    if($_SESSION['mail'])
    {
        header('Location:compte.php');
    }
    else
    {
        header('Location:connexion.php');
    }
}
function redirection2()
{
    if(!$_SESSION['mail'])
    {
        header('Location:connexion.php');
    }
   
}
function session($mail)
{
    $_SESSION['mail'] = $mail;
}
function liste_eleves()
{
    $cnx = connecterServeurBD();
    $requete = "select * from Eleves order by nom ASC;";
    $jeuResultat=$cnx->query($requete); 
  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        $info[$i]['nom']=$ligne['nom'];
        $info[$i]['prenom']=$ligne['prenom'];
        $info[$i]['mail']=$ligne['mail'];
        $info[$i]['password']=$ligne['password'];
        $info[$i]['tel']=$ligne['tel'];

        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  
  return $info;

}
function redicrection3()
{
   
}
function liste_prof()
{
    $cnx = connecterServeurBD();
    $requete = "select * from prof order by nom ASC;";
    $jeuResultat=$cnx->query($requete); 
  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        $info[$i]['nom']=$ligne['nom'];
        $info[$i]['prenom']=$ligne['prenom'];
        $info[$i]['mail']=$ligne['mail'];
        $info[$i]['password']=$ligne['password'];
        $info[$i]['tel']=$ligne['tel'];
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  
  return $info;


}

function search_eleve($mail,$pwd)
{
    $cnx = connecterServeurBD();
    $requete = "select * from Eleves where mail = '".$mail."' and password = '".$pwd."' ;";
    $jeuResultat=$cnx->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    if($ligne)
    {
        return "ok";
    }
    else
    {
        return "non";
    }

}


?>
