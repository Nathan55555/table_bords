<div class="container">
    <h1 style="text-align:center;">Tableau de bord </h1>
    <br>
    <div class="container">
    <a href="mail.php?par=SLAM"><button type="button" class="btn btn-warning">Email to SLAM</button></a>
    <a href="mail.php?par=SISR"><button type="button" class="btn btn-warning">Email to SISR</button></a>
    <a href="mail.php?par=all"><button type="button" class="btn btn-warning">Email to ALL</button></a>

    <br><br>
    <div class="alert alert-info" role="alert">
    <p style="text-align:center;">Date : <?php echo date('Y-m-d'); ?></p>
    <p style="text-align:left;"><?php if($cours=='0'){ ?>Vous n'avez pas cours aujourd'hui !<?php } else {
        $i = 0;
      
        while($i < count($cours))
        {
            ?> Horaire : <?php echo $cours[$i]['horaire'];
            ?> <br>&ensp; &emsp;   Cours : <?php echo $cours[$i]['cours'];
           
            ?><br> &ensp;&emsp;&ensp;    Prof : <?php echo $cours[$i]['prof'];?></p><?php
            
            $i = $i+1;
        }
    } ?>
</div>
</div>
   
    <div class="row">
        <div class="col">
         
            <br>
<h3 style="text-align:center">Liste des Enseignants</h3>
<br>
<table class="table table-red">
    <thead>
        <tr>
            <th>
                Nom
            </th>
            <th>Prenom</th>
        <th>Mail</th>
        <th>Tel</th>
        </tr>

    </thead>
    <tbody>
    <?php
    $i = 0;
    while($i < count($prof))
    { 
 ?>     
        <tr>
           
            <td><?php echo $prof[$i]["nom"]?></td>
            <td><?php echo $prof[$i]["prenom"]?></td>
            <td ><a href="mailto:<?php echo $prof[$i]["mail"]?>"><?php echo $prof[$i]["mail"]?></a></td>
            <td><a href="https://web.whatsapp.com/send/?phone=<?php echo $prof[$i]["tel"]?>&text&type=phone_number&app_absent=0" target="_blank">0<?php echo $prof[$i]["tel"]?></a></td>
        </tr>
<?php
        $i = $i + 1;
     }
?>       
    </tbody>
</table>
          </div>
        </div>
        <div class="row">

      
        <div class="col">
           <br>
            <div class="container">
            <h3 style="text-align:center">Liste des Eleves </h3>
            <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Mail</th>
            <th scope="col">Tel</th>
          </tr>
        </thead>
        <tbody>
        <?php
    $i = 0;
    while($i < count($eleve))
    { 
 ?>     
        <tr>
           
            <td><?php echo $eleve[$i]["nom"]?></td>
            <td><?php echo $eleve[$i]["prenom"]?></td>
            <td ><a href="mailto:<?php echo $eleve[$i]["mail"]?>"><?php echo $eleve[$i]["mail"]?></a></td>
            <td><a href="tel:<?php echo $eleve[$i]["tel"]?>"><?php echo $eleve[$i]["tel"]?></a></td>
        </tr>
<?php
        $i = $i + 1;
     }
?>       
        </tbody>
      </table>
      </div>
    </div>
            </div>
        </div>
       
    </div>
</div>