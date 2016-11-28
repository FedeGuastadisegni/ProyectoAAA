<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Modificacion de una foto</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/c322257c2a.js"></script>
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

<h3 class="text-center">Modificación de Fotos</h3>
<h4 class="text-center">En este apartado, podra modificar la descripción de las fotos que esten almacenadas.</h4>           
<?php



$_GET = clean($_GET);
$_POST = clean($_POST);

if ($_POST[subgrabar]) {
     if ($_POST[desc]) {
          $sql = "update test_image set";
          $sql .= " name = '".$_POST[namee]."', ";
          $sql .= " descr = '".$_POST[desc]."'";
          $sql .= " where id = ".$_POST[id];




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

     $sql_d  = " select * from test_image";
     $sql_d .= " where id = ".$_GET[id];
     $sql_d .= " order by name asc";

     $res_d = mysql_query($sql_d);
     $row_d = mysql_fetch_array($res_d);



     echo '<form method=POST action="?">';

     $res = mysql_query("select * from test_image order by name asc");
     while ($row = mysql_fetch_array($res))  {
          if ($row[id]==$row_d[id])
               $select1 .= "<option selected value=$row[id]>$row[id]</option>";
          else
               $select1 .= "<option value=$row[id]>$row[id]</option>";
     }



     echo '<table class="table table-bordred" style="width: 80%;">';
     echo '<tr>';
     echo '<td>Nombre</td><td><input type=text class="form-control" name=namee value="'.$row_d[name].'"></td>';
     echo '</tr>';
		 echo '<tr>';
     echo '<td>Descripción</td><td><input type=text class="form-control" name=desc value="'.$row_d[descr].'"></td>';
     echo '</tr>';
     echo '<tr>';
     echo '<td colspan="2"><input class="btn btn-danger" value=Modificar type="submit" name="subgrabar"></td>';
     echo '</tr>';
     echo '</table>';

     echo '<input type=hidden name=id value='.$row_d[id].'>';

     echo '</form>';
       //Carga inicial de los archivos que existen en la base//
} else    {
     $sql  = " select * from test_image";
     $sql .= " order by name asc";

     $res = mysql_query($sql);

     if (mysql_num_rows($res)>0)    {
          echo '<table class="table table-bordered" style="width: 80%;">';
          echo '<tr>';
          echo '<td>Nombre</td>';
					echo '<td>Descripción</td>';
          echo '<td>Imagen</td>';
          echo '</tr>';

          while ($row = mysql_fetch_array($res))  {
               echo '<tr>';
               echo '<td>'.$row[name].'</td>';
							 echo '<td>'.$row[descr].'</td>';
               echo '<td><img src="data:image/jpeg;base64,' . base64_encode( $row['image'] ) . '" height="150" width="200" class="img-rounded" /></td>';
               echo '<td><a href="file_mod.php?id='.$row[id].'">Modificar</a></td>';
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


</body>
</html>
