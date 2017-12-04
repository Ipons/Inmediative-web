<?php
	$titulo = "Panel de control - Proyecto integrador";
	require "validar.php";
	// Rutina para insertar datos en tabla productos
	$cat_nombre=$_POST['cat_nombre'];

	require 'conexion.php';
	$sql = "INSERT INTO categorias 
			values (
					NULL, 
					'".$cat_nombre."'
				)"; 
	mysqli_query($link,$sql) or die(mysqli_error($link));
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
	
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>