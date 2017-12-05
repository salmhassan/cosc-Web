<?php require_once '../templates/headerPublic.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
				<?php 
				if(isset($_SESSION['message']))
				{
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				}
				
				?>
				
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="register.php" method="post">
			    <fieldset>
					<div class="form-group">
					  <label for="username" class="col-lg-2 control-label">New Username</label>
					  <div class="col-lg-10">
						<input type="text" class="form-control" name="username" placeholder="Username">
					  </div>
					</div>
					<div class="form-group">
					  <label for="password" class="col-lg-2 control-label">New Password</label>
					  <div class="col-lg-10">
						<input type="password" class="form-control" name="password" placeholder="Password">
					  </div>
					</div>
					<div class="form-group">
					  <div class="col-lg-10 col-lg-offset-2">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
			    </fieldset>
			</form>
			<a href="login.php"> Sign In here </a>
        </div>
    </div>

    <?php require_once '../templates/footerPublic.php' ?>
