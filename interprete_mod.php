<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Listado de archivos</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/c322257c2a.js"></script>
	<script src="js/jquery.sortElements.js"></script>

</head>
<body>
<style>
 body {
 padding-top: 70px;

 }

.navbar {
 font-family: Montserrat, sans-serif;
 margin-bottom: 0;
 background-color: #2d2d30;
 border: 0;
 font-size: 10px;
 letter-spacing: 1px;
 opacity: 0.9;
}

.navbar .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
background-color: #484446;
color: #0078FF;
}
</style>



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

						 <a class="navbar-brand" href="index.php">Inicio
						 </a>

				 </div>
				 <!-- Collect the nav links, forms, and other content for toggling -->
				 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
								 <li class="dropdown">
										 <a class="dropdown-toggle" data-toggle="dropdown" href="#">Publicaciones
										 <span class="caret"></span></a>
										 <ul class="dropdown-menu">
											 <li><a href="publi_CL.php">Ciencia de la Legislación</a></li>
											 <li><a href="publi_Diges.php">Digesto</a></li>
											 <li><a href="publi_CP.php">Ciencia política</a></li>
											 <li><a href="publi_GD.php">Gobierno digital</a></li>
											 <li><a href="publi_IJ.php">Informática Jurídica</a></li>
											 <li><a href="publi_DI.php">Derecho de la Informática</a></li>
											 <li><a href="publi_TGS.php">Teoría general de sistemas</a></li>
											 <li><a href="publi_FJ.php">Filosofía jurídica</a></li>
											 <li><a href="publi_LO.php">Lógica</a></li>
											 <li><a href="publi_IA.php">Inteligencia artificial y Derecho</a></li>
											 <li><a href="publi_INT.php">Internet</a></li>
										 </ul>
								 </li>
								 <li>
										 <a href="colab.php">Colaboradores</a>
								 </li>
								 <li>
										 <a href="fotos.php">Mis fotos</a>
								 </li>
						 </ul>


					 <?php if ((isset($_SESSION['username'])))
					 {
						 if($_GET['logout']=="1"){
					 $_SESSION['login'] = "";
					 @session_destroy();
					 header("Location: index.php");

				 }
						 echo '<ul class="nav navbar-nav navbar-right"> <li>';
									 echo '<div style="color:#FF6347; padding: 15px 10px 5px 50px;">';
									 echo "Sesión: ". $_SESSION['username']." </div></li>";
									 echo '<li><a href="menu_adm.php">Menu administrador</a></li>';
						 echo '<li><a href="?logout=1">LogOut</a></li>';
									 echo '</ul>';



					 }
					 else
					 {?>
<ul class="nav navbar-nav navbar-right">
<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Administrador </a></li>
</ul>

<?php }?>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

		           <br><br>

		<table id="table" class="table table-bordered" >
    <tr>
    <th colspan="11">Listado de archivos!<br><a href="interprete_alta.php">Subir un archivo nuevo</a>
		<br><a href="index.php">Volver al inicio</a></th>
    </tr>
    <tr>
		    <th id="name">Nombre<span class="fa fa-caret-down"></span></th>
		    <th>Tipo archivo</th>
		    <th>Tamaño(KB)</th>
				<th id="cat">Categoría<span class="fa fa-caret-down"></th>
				<th id="edit">Editorial<span class="fa fa-caret-down"></th>
				<th id="aut">Autor<span class="fa fa-caret-down"></th>
				<th>Ubicación</th>
				<th>Lugar</th>
				<th id="ano">Año<span class="fa fa-caret-down"></th>
				<th>Cant. Páginas</th>
				<th>Descarga</th>
    </tr>

<?php

  $sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['titulo'] ?></td>
        <td><?php echo $row['tipo_publi'] ?></td>
        <td><?php echo $row['size'] ?></td>
				<td><?php echo $row['categoria'] ?></td>
				<td><?php echo $row['editorial'] ?></td>
				<td><?php echo $row['autor'] ?></td>
				<td><?php echo $row['ubicacion'] ?></td>
				<td><?php echo $row['lugar'] ?></td>
				<td><?php echo $row['ano'] ?></td>
				<td><?php echo $row['pagina'] ?></td>
				<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank" download>Descarga</a></td>
        </tr>
        <?php
	}
	?>
    </table>
			<br>
    </div>
</div>



<!-- Script para ordenar los resultados -->
<script>
var table = $('table');

	 $('#name,#cat,#edit,#aut,#ano')
			 .wrapInner('<span title="sort this column"/>')
			 .each(function(){

					 var th = $(this),
							 thIndex = th.index(),
							 inverse = false;

					 th.click(function(){

							 table.find('td').filter(function(){

									 return $(this).index() === thIndex;

							 }).sortElements(function(a, b){

									 return $.text([a]) > $.text([b]) ?
											 inverse ? -1 : 1
											 : inverse ? 1 : -1;

							 }, function(){

									 // parentNode is the element we want to move
									 return this.parentNode;

							 });

							 inverse = !inverse;

					 });

			 });
</script>
</body>
</html>
