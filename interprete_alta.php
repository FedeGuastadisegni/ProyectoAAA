<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Alta de archivo</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/c322257c2a.js"></script>

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
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

<?php

if($_SESSION['username']=='root'){

	?>
	<div class="container text-center">
	<h3 class="text-center">Alta de archivos</h3>
	<h4 class="text-center">Para subir un archivo, complete los campos que estan a continuación. Por último, seleccione el archivo que desee y haga click en "Subir".<h4>
	<?php
	echo '<form method="post" action="" enctype="multipart/form-data">';

	echo '<table class="table table-bordered" style="width: 80%;">';
	echo '<tr>';
	echo '<td>Autor/es</td><td><input type="text" class="form-control" id="autor" name="autor"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Titulo del archivo</td><td><input type="text" class="form-control" id="titulo" name="titulo"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td> Categoría</td>';
	echo '<td><select class="form-control" name="categoria"> ';
	echo    '<option>Ciencia de la Legislación</option>';
	echo    '<option>Digesto</option>';
	echo    '<option>Ciencia política</option>';
	echo    '<option>Gobierno digital</option>';
	echo    '<option>Informática Jurídica</option>';
	echo    '<option>Derecho de la Informática</option>';
	echo    '<option>Teoría general de sistemas</option>';
	echo    '<option>Filosofía jurídica</option>';
	echo    '<option>Lógica</option>';
	echo    '<option>Inteligencia artificial y Derecho</option>';
	echo    '<option>Internet</option>';
	echo  '</select>';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Tipo de archivo</td>';
	echo '<td><select class="form-control" name="tipo_publi"> ';
	echo    '<option>Artículo</option>';
	echo    '<option>Ensayo</option>';
	echo    '<option>Libro</option>';
	echo    '<option>Reseña</option>';
	echo  '</select>';
	echo '</td>';
	echo '</tr>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Editorial</td><td><input type="text" class="form-control" id="editorial" name="editorial"></td>';
	echo '</tr>';

	echo '<tr>';
	echo '<td>Ubicación</td><td><input type="text" class="form-control" id="ubicacion" name="ubicacion"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Lugar de publicación</td><td><input type="text" class="form-control" id="lugar" name="lugar"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Año</td><td><input type="text" class="form-control" id="ano" name="ano"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Páginas</td><td><input type="text" class="form-control" id="pagina" name="pagina"></td>';
	echo '</tr>';
	echo '<td>';

	echo '
	<div class="fileUpload btn btn-success">
	    <span>Upload</span>
	    <input id="uploadBtn" type="file" class="upload" name="file" />
	</div>';
	echo '<td><input id="uploadFile" class="form-control" placeholder="Archivo elegido" disabled="disabled" /></td>';
	echo '</td >';
	echo '<tr>';
	echo '<td colspan="2"><input class="btn btn-primary" value="Subir!" type="submit" name="subir"></td>';
	echo '</tr>';
	echo '</table>';

	echo '</form>';
}else{
	?>
	<h4 class="text-center">Necesita permisos de administrador.</h4>
	<?php
}
	?>





<?php

if(isset($_POST['subir']))
{
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	$rights=$_POST['categoria'];
	$autor = $_POST['autor'];
	$ubicacion = $_POST['ubicacion'];
	$lugar = $_POST['lugar'];
	$ano = $_POST['ano'];
	$pagina = $_POST['pagina'];
	$titulo = $_POST['titulo'];
	$tipo_publi = $_POST['tipo_publi'];
	$edi = $_POST['editorial'];

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_uploads(file,type,size,categoria,autor,ubicacion,lugar,ano,pagina,titulo,tipo_publi,editorial) VALUES('$final_file','$file_type','$new_size','$rights','$autor','$ubicacion','$lugar','$ano','$pagina','$titulo','$tipo_publi','$edi')";
		mysql_query($sql);
		if ( !empty( $error = mysql_error() ) )
		{
				echo 'Mysql error '. $error ."<br />\n";
		}
		?>
		<script>
		alert('Archivo subido con exito!');

    </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        //window.location.href='index.php?fail';
        </script>
		<?php
	}


}
?>



</div>

<script> document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};</script>


</body>
</html>
