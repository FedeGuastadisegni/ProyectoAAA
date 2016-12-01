<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Modificacion de un archivo</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
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

<h2 class="text-center">Modificación de Archivos</h2>
<h4 class="text-center">A continuación se muestra un listado de los archivos existentes. Seleccione uno para comenzar a modificar. Una vez seleccionado, cambie cualquier campo que desee y haga click en "Modificar".<h4>

	<div class="container">
	  <h4 class="text-center">Recuerde que el campo "Categoría" tiene que tener los siguientes valores exactos, ya que sino, no van a aparecer en sus respectivas pestañas:</h4>
	  <div class="panel panel-default">

	    <div class="panel-body">Ciencia de la Legislación</div>
	    <div class="panel-footer">Digesto</div>
			<div class="panel-body">Ciencia política</div>
			<div class="panel-footer">Gobierno digital</div>
			<div class="panel-body">Informática Jurídica</div>
			<div class="panel-footer">Derecho de la Informática</div>
			<div class="panel-body">Informática Jurídica</div>
			<div class="panel-footer">Teoría general de sistemas</div>
			<div class="panel-body">Filosofía jurídica</div>
			<div class="panel-footer">Lógica</div>
			<div class="panel-body">Inteligencia artificial y Derecho</div>
			<div class="panel-footer">Internet</div>
	  </div>
	</div>

<?php

$_GET = clean($_GET);
$_POST = clean($_POST);

if ($_POST[subgrabar]) {
     if ($_POST[titulo]) {
          $sql = "update tbl_uploads set";
          $sql .= " titulo = '".$_POST[titulo]."', ";
          $sql .= " autor = '".$_POST[autor]."', ";
          $sql .= " categoria = '".$_POST[categoria]."', ";
          $sql .= " ubicacion = '".$_POST[ubicacion]."', ";
          $sql .= " lugar = '".$_POST[lugar]."', ";
          $sql .= " ano = '".$_POST[ano]."', ";
					$sql .= " pagina = '".$_POST[pagina]."', ";
					$sql .= " tipo_publi = '".$_POST[tipo_publi]."', ";
					$sql .= " editorial = '".$_POST[editorial]."'";
          $sql .= " where id = ".$_POST[id];

					//echo $sql;

          $res = mysql_query($sql);
					if ( !empty( $error = mysql_error() ) )
					{
					    echo 'Mysql error '. $error ."<br />\n";
					}
     }

     $_GET[id]=$_POST[id];
		 ?>
 		<script>
 		alert('Archivo modificado con exito!');

     </script>
 		<?php
}

if ($_GET[id]) {

     $sql_d  = " select * from tbl_uploads";
     $sql_d .= " where id = ".$_GET[id];
     $sql_d .= " order by titulo desc";

     $res_d = mysql_query($sql_d);
     $row_d = mysql_fetch_array($res_d);

     echo '<form method=POST action="?">';

     $res = mysql_query("select * from tbl_uploads order by titulo asc");
     while ($row = mysql_fetch_array($res))  {
          if ($row[id]==$row_d[id])
               $select1 .= "<option selected value=$row[id]>$row[id]</option>";
          else
               $select1 .= "<option value=$row[id]>$row[id]</option>";
     }



     echo '<table class="table table-bordred" style="width: 85%;">';
     echo '<tr>';
     echo '<td>Titulo</td><td><input type=text class="form-control" name=titulo value="'.$row_d[titulo].'"></td>';
     echo '</tr>';
		 echo '<tr>';
     echo '<td>Tipo archivo</td><td><input type=text class="form-control" name=tipo_publi value="'.$row_d[tipo_publi].'"></td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Autor</td><td><input type=text class="form-control" name=autor value="'.$row_d[autor].'"></td>';
     echo '</tr>';
		 echo '<tr>';
     echo '<td>Editorial</td><td><input type=text class="form-control" name=editorial value="'.$row_d[editorial].'"></td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Categoría</td><td><input type=text class="form-control" name=categoria value="'.$row_d[categoria].'"></td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Ubicación</td><td><input type=text class="form-control" name=ubicacion value="'.$row_d[ubicacion].'"></td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Lugar</td><td><input type=text class="form-control" name=lugar value="'.$row_d[lugar].'"></td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td>Año</td><td><input type=text class="form-control" name=ano value="'.$row_d[ano].'"></td>';
     echo '</tr>';
		 echo '<tr>';
     echo '<td>Páginas</td><td><input type=text class="form-control" name=pagina value="'.$row_d[pagina].'"></td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td colspan="2"><input class="btn btn-danger" value=Modificar type="submit" name="subgrabar"></td>';
     echo '</tr>';
     echo '</table>';

     echo '<input type=hidden name=id value='.$row_d[id].'>';

     echo '</form>';
} else    {
     $sql  = " select * from tbl_uploads";
     $sql .= " order by titulo desc";

     $res = mysql_query($sql);

     if (mysql_num_rows($res)>0)    {
          echo '<table class="table table-bordered" style="width: 80%;">';
					echo '<thead>';
          echo '<tr>';
          echo '<th	>Titulo</td>';
					echo '<th>Tipo archivo</td>';
          echo '<th>Autor</td>';
          echo '<th>Categoría</td>';
					echo '<th>Editorial</td>';
          echo '<th>Ubicacion</td>';
          echo '<th>Lugar</td>';
          echo '<th>Año</td>';
					echo '<th>Cant. Páginas</td>';
          echo '</tr>';
					echo '</thead>';

          while ($row = mysql_fetch_array($res))  {
               echo '<tr>';
               echo '<td>'.$row[titulo].'</td>';
							 echo '<td>'.$row[tipo_publi].'</td>';
               echo '<td>'.$row[autor].'</td>';
               echo '<td>'.$row[categoria].'</td>';
							 echo '<td>'.$row[editorial].'</td>';
               echo '<td>'.$row[ubicacion].'</td>';
               echo '<td>'.$row[lugar].'</td>';
							 echo '<td>'.$row[ano].'</td>';
							 echo '<td>'.$row[pagina].'</td>';
               echo '<td><a href="disco_mod.php?id='.$row[id].'">Modificar</a></td>';
               echo '</tr>';
          }

          echo '<table>';
     } else                          {
          echo '<p class="text-center">No se encontraron archivos!</p>';
     }
}

?>
<br>
     </div>
</div>


<!-- Script para ordenar los resultados -->
<script>
var table = $('table');

	 $('#name')
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
