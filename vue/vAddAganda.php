<br>
<form action="" method="post">
    <h3 style="text-align:center;">Ajouter un cours</h3>
    <br>

<div class="container-sm">
    <div class="container">
       <h6>Horaire Prévu :</h6>
        <br>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="hp" id="optionsRadios1" value="matin" checked="">
        <label class="form-check-label" for="optionsRadios1">
          Matin
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="hp" id="optionsRadios2" value="midi">
        <label class="form-check-label" for="optionsRadios2">
         Après Midi
        </label>
      </div>
 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Date</label>
      <input type="date" class="form-control" name="date">
    </div>
    <br>
    <div class="form-group">
      <label for="exampleSelect1">Prof</label>
      <select name="prof" class="form-select" id="exampleSelect1">
        <?php $i = 0; while($i<count($prof)){ ?>
        <option value="<?php echo $prof[$i]['nom']; ?>"><?php echo $prof[$i]['nom']; ?></option>
        <?php $i =$i+1;
      } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Cours</label>
      <input type="text" class="form-control" placeholder="Enter cours" name="cours">
    </div>
    <br>    
    <button type="submit" class="btn btn-success">Success</button>
    </form>
    
      </div>

