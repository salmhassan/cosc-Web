<?php require_once '../app/views/templates/headerPublic.php' ?>

<h1> Salman Hassan </h1>
<h2>This is Assignment 1</h2>

    <head>
	
        <title> Login </title>

    </head>

    <body>

	 <p> <form action="login/index" method="POST"><br> </p>
	 <p> Username: <input type="text" name="username"/></br> </p>
	 <p> Password: <input type="password" name="password"/></br></br> </p>
	 <p> <input type="submit" name ="login" value="Log in"/> </p>
	 <p> <input type="submit" name = "Attempts" value="number of attempts"/> </p>
	
        </form>
		 <p> <form method="post" action="/login/register"> <br> </p>
		 <p> <input type="submit" value="Registr Here"/> </p>
		</form>
		
    </body>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
