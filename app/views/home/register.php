<?php require_once '../app/views/templates/headerPublic.php' ?>
<h1> Salman Hassan </h1>
<h2>This is Assignment 1</h2>

    <head>
	
        <title> Registration </title>

    </head>

    <body>
	 <p> <form action="/login/register" method="POST"><br> </p>
	 	 <p> Email: <input type="text" name="email"/></br> </p>
		 <p> Username: <input type="username" name="username"/></br> </p>
		 <p> Password: <input type="password" name="password"/></br></br> </p>
        </form>
		 <p> <form method="post" action="../app/view/login.php"> <br> </p>
		 <p> <input type="submit" name= "register" value="Registr"/> </p>
		</form>
        </form>
    </body>
</html>
     
    <?php require_once '../app/views/templates/footer.php' ?>
