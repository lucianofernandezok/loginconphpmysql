<?php 

include("conexion_bd.php");

if (isset($_POST['register'])) {

if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {


	$name = trim ($_POST['name']);
	$email = trim ($_POST['email']);
	$fechareg = date("d/m/y");

	$consulta = "INSERT INTO `registro`(usuario_nombre, usuario_correo, fecha_reg) VALUES ('$name','$email','$fechareg')";

		$resultado = mysqli_query($conexion,$consulta);

		if ($resultado) {

			?>
			<h3 class="bien">Logueado correctamente</h3>
			<?php

			} else {

				?>
			<h3 class="mal">Algo salio mal</h3>
			<?php

			}
		} else {

				?>
			<h3 class="mal">Complete los campos</h3>
			<?php
		}
}



?>