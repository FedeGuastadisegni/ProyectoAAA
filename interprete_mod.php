<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Modificacion de Interpretes</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
     <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
     <body>
			 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		         <div class="container">
		             <!-- Brand and toggle get grouped for better mobile display -->
		             <div class="navbar-header">
		                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                     <span class="sr-only">Toggle navigation</span>
		                     <span class="icon-bar"></span>
		                     <span class="icon-bar"></span>
		                     <span class="icon-bar"></span>
		                 </button>
		                 <a class="navbar-brand" href="#">Start Bootstrap</a>
		             </div>
		             <!-- Collect the nav links, forms, and other content for toggling -->
		             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                 <ul class="nav navbar-nav">
		                     <li>
		                         <a href="#">About</a>
		                     </li>
		                     <li>
		                         <a href="#">Services</a>
		                     </li>
		                     <li>
		                         <a href="#">Contact</a>
		                     </li>
		                 </ul>
		               </div>
		             			<!-- /.navbar-collapse -->
		             	</div>
		             	<!-- /.container -->
		             </nav>

		           <br><br><br><br><br><br>

		<table class="table table-bordered" >
    <tr>
    <th colspan="11">Listado de archivos!<br><a href="interprete_alta.php">Subir un archivo nuevo</a>
		<br><a href="index.php">Volver al inicio</a></th>
    </tr>
    <tr>
    <td>Nombre</td>
    <td>Tipo</td>
    <td>Tamaño(KB)</td>
		<td>Categoría</td>
		<td>Autor</td>
		<td>Ubicación</td>
		<td>Lugar</td>
		<td>Año</td>
		<td>Cant. Páginas</td>
		<td>Download</td>
    </tr>

<?php

  $sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
				<td><?php echo $row['categoria'] ?></td>
				<td><?php echo $row['autor'] ?></td>
				<td><?php echo $row['ubicacion'] ?></td>
				<td><?php echo $row['lugar'] ?></td>
				<td><?php echo $row['ano'] ?></td>
				<td><?php echo $row['pagina'] ?></td>
				<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank" download>Download!</a></td>
        </tr>
        <?php
	}
	?>
    </table>
<br>
     </div>
</div>


</body>
</html>
