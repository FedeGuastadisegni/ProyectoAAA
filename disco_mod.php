<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Modificacion de un archivo</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
     <link rel="stylesheet" href="css/bootstrap.css">
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

												<li>
														<a href="publi.php">Publicaciones</a>
												</li>
												<li>
														<a href="colab.php">Colaboradores</a>
												</li>
												<li>
														<a href="#">Mis fotos</a>
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
	<li><a href="login.php">Administrador </a></li>
	</ul>

<?php }?>
</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

		           <br><br>
<?php

include 'menu.php';

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



     echo '<table class="table table-bordered" style="width: 80%;">';
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
          echo '<tr>';
          echo '<td>Titulo</td>';
					echo '<td>Tipo archivo</td>';
          echo '<td>Autor</td>';
          echo '<td>Categoría</td>';
					echo '<td>Editorial</td>';
          echo '<td>Ubicacion</td>';
          echo '<td>Lugar</td>';
          echo '<td>Año</td>';
					echo '<td>Cant. Páginas</td>';
          echo '</tr>';

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


</body>
</html>
