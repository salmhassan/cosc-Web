<?php require_once '../app/views/templates/headerpublic.php'?>
<div class="count">
<div class="row">
  <div class="col-sm-4">.col-sm-4
<h2> please Update Reminder</h2>
<p class ="load"> <?=date("f js,Y"); ?></p>

    </div>

	</div>
	
  </div>

  <div class="row">
  <div class="col-sm-4">.col-sm-4
  <h3> enter reminder information</h3>
<form> 

Subject:
<input type="text" name="subject"><br><br>
Description:
<input type="text" name="description"><br><br>>

<input type= submit" name="save" value="save">

</form>
</div>

<div class="row">

  <div class="col-sm-4">.col-sm-4
  
  </div>
  <p> <?=$data['message']?> </p>
		</div>
	</div>
<div class="row">
<a href="/home"> back to the list</a>


</div>



<?php require_once '../app/views/templates/footer.php'?>






//https://www.w3schools.com/bootstrap/bootstrap_jumbotron_header.asp