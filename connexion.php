<?php
include('fonction.php');
include('navbar.php');
redicrection3();
if(count($_POST)==0)
{ 
    include('vue/vconnexion.php');
}
else
{


$mail = $_POST['mail'];
$pwd = $_POST['pwd'];
$cnx = search_eleve($mail,$pwd);
if($cnx=="ok")
{
    $_SESSION["mail"] = $mail;
   
    ?>
    <div class="alert alert-success" role="alert">
 Connexion Reussi Login : <?php echo $mail;?><?php
  echo "<p>L'adresse IP de l utilisateur est : ".$_SERVER['REMOTE_ADDR']."</p>";
  echo "Les données du navigateur :";
  echo "<p>";
  echo getenv("HTTP_USER_AGENT");
  "</p>";
  sleep(4);
  header('Location:compte.php'); 
  ?>
</div>
<?php
}
else
{
    ?>
<div class="alert alert-danger" role="alert">
  Connexion Refusé!!
</div>
    <?php
    include('vue/vconnexion.php');
}

}
?>