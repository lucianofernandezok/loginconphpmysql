<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	

</head>
<body>






  <form method="post">
  	<img src="img/png_user.png">
    	<h1>Login</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>

			
    <?php 

    	include("registro.php");

    ?>
			

				
</body>
</html>