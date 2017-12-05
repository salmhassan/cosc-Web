<?php require_once '../templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
			</br>
			<a href="/home">Back</a>
                <h1>Create New Note</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="create.php" method="post">
			    <fieldset>
					<div class="form-group">
					  <label for="username" class="col-lg-2 control-label">Subject</label>
					  <div class="col-lg-10">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
					  </div>
					</div>
					<div class="form-group">
					  <label for="description" class="col-lg-2 control-label">Description</label>
					  <div class="col-lg-10">
						 <textarea class="form-control" rows="5" id="description" name="description"></textarea>
					  </div>
					</div>
					<div class="form-group">
					  <div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
			    </fieldset>
			</form>
			
        </div>
    </div>

    <?php require_once '../templates/footer.php' ?>
