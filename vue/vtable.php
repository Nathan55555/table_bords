<div class="container-sm">
  <br><br><br>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Mail</th>
     
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
            <td ><?php echo $eleve[$i]["mail"]?></td>
            <td ><?php echo $eleve[$i]["tel"]?></td>
        </tr>
<?php
        $i = $i + 1;
     }
?>       
  </tbody>
</table>
</div>