<?php
	$titulo = "Panel de control - Usuario Borrado";
	require "validar.php";
	$usu_id=$_POST['usu_id'];

	require 'conexion.php';

	$sql    = 'DELETE 
			   FROM usuarios 
			   WHERE usu_id='.$usu_id;

	mysqli_query($link, $sql);
	$chequeo = mysqli_affected_rows($link);
	mysqli_close($link);	
	header("refresh:2;url=panel-usuarios.php")	   
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<!-- inicio del desarrollo -->
		<?php if ($chequeo==1) { ?>
		<h2 style="text-align:center">El usuario fue borrado</h2>
		<?php } else { ?>
		<h2 style="text-align:center">Se produjo un error. El usuario no se ha borrado</h2>
		<?php } ?>
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>