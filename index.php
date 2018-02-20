<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/hoja_index.css">
	<title>Sistema de Biblioteca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mi página con favicon</title>
    <link href="img/favicon.ico" rel="shortcut icon" />

	<script type="text/javascript">

		function AbrirVentaLogin(){
			document.forms['formingreso'].reset();
			$("#ventanalogin").slideDown("slow");
			$('#ErrorUsuario').hide('fast');
		}

		function CerrarVentaLogin(){
			document.forms['formingreso'].reset();
			$("#ventanalogin").slideUp("fast");
			$('#ErrorUsuario').hide('fast');
		}
		

	</script>

</head>
<body onload="VistaInicio()">
<!--	<div id="contenedor">-->

		<div id="ventanalogin">
			

			<div id="formlogin">
                <img src="img/login.png">
				<br>
                <p>Inicia Sesión para continuar..</p>
                <br>
                <br>

				<form method="POST" name="formingreso">
	
					<input type="text" name="txtnrcarnet" placeholder="Nro. Carnet..." required>
					<input type="password" name="txtclave" placeholder="Contraseña..." required>
					<button type="submit" name="btnEntrar">Entrar</button>
					<button type="button" onclick="javascript:CerrarVentaLogin();">Cancelar</button>
					<div id='ErrorUsuario'><strong>Error!</strong>Usuario No Encontrado</div>
					<?php
						include('dbconexion.php');

						if (isset($_POST['btnEntrar'])){

							$nrcarnet = $_POST['txtnrcarnet'];
							$clave = $_POST['txtclave'];

							$query_b = "SELECT CodBibliotecario, Nro_Carnet FROM bibliotecario WHERE Nro_Carnet='$nrcarnet' AND Contrasena ='$clave'";
							$query_l = "SELECT CodLector, Nro_Carnet FROM lector WHERE Nro_Carnet='$nrcarnet' AND Contrasena ='$clave'";

							$result_b = $cnmysql->query($query_b);
							$result_l = $cnmysql->query($query_l);

							$num_row_b = mysqli_num_rows($result_b);
							$num_row_l = mysqli_num_rows($result_l);
							


							if( $num_row_b > 0 ){
								
								$row = mysqli_fetch_array($result_b);

								/*$idb = $row['CodBibliotecario'];*/

								session_start();
								$_SESSION["idb"]= $row['CodBibliotecario'];

								/*header("location: biblioteca/indexbibliotecario.php?id=$idb");*/
								header("location: biblioteca/indexbibliotecario.php");

							}elseif ($num_row_l > 0 ) {
								
								$row = mysqli_fetch_array($result_l);

								/*$idl = $row['CodLector'];*/

								session_start();
								$_SESSION["idl"] = $row['CodLector'];

								/*header("location: biblioteca/indexlector.php?id=$idl");*/
								header("location: biblioteca/indexlector.php");

							}else{ 


								echo "<script>";
								echo "$('#ventanalogin').slideDown('slow');";
								echo "$('#ErrorUsuario').slideDown('slow');";
								echo "</script>";
							}

						}else{

						}
					?>


				</form>
			</div>

		</div>


	

	


		<section>
			<div id="contenido">
			
			</div>
		</section>

		<footer id="footer">
			<p>Todos los derechos reservados ©2018 Copyright-
            <a href="http://www.ucp.edu.pe/">UCP</a> | Sistema de Biblioteca UCP Ciclo X</p>
		</footer>
		
	</div>








</body>
</html>