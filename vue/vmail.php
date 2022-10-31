<div class="container">
<br><br><br>
<?php
if(!empty($_GET['status']))
{


if($_GET['status']=="OK")
{
  ?>
  <div class="alert alert-success" role="alert">
 Le Mail a été envoyé !
</div>
<?php
}
}
?>
<form action="sendmail.php?par=<?php echo $_GET['par'] ?>" method="post" enctype="multipart/form-data">
<fieldset disabled="">
 <label class="form-label" for="disabledInput">E-Mail</label>
 <input class="form-control" id="disabledInput" type="text" placeholder="<?php $i = 0; while($i<count($eleve)){echo $eleve[$i]['mail'].";"; $i = $i+1;} ?>" disabled="">
</fieldset>
<div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Subject</label>
      <input type="text" class="form-control"   placeholder="Enter Subject" name="sub" required="required">

    </div>
<div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Body</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="body" required="required"></textarea>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Default file input example</label>
      <input class="form-control" type="file" name="file" id="formFile">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Success</button>
</form>
</div>

