<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Eliminar archivo</title>
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

<h3 class="text-center">Elimine una foto</h3>
<h4 class="text-center">Para eliminar una foto, seleccionela y haga click en el botón "Dar de baja".</h4>

               <?php



               $_POST = clean($_POST);

               if ($_POST[subgrabar])     {
                    for ($i=1; $i<=$_POST[cant]; $i++)   {
                         $temp = 'check'.$i;
                         if ($_POST["$temp"]) { //atencion a las comillas dobles
               							//$elimino = mysql_query("select file from tbl_uploads where id = ".$_POST["$temp"]);
               						  //$row = mysql_fetch_array($elimino);
               							//$name_file = $row["file"];
               							//$directory = getcwd().'/uploads/'.$name_file;
               							//unlink($directory);
               							$sql = "delete from test_image where id = ".$_POST["$temp"];
                            $res = mysql_query($sql);
               							?>
               							<script>
               							alert('Archivo/s dado/s de baja!');

               					    </script>
               							<?php
                         }
                    }
               }

               $sql = "select * from test_image order by name asc";
               $res = mysql_query($sql);

               if (mysql_num_rows($res))    {
                    echo '<form action="?" method=POST>';
                    echo '<table class="table table-bordered" style="width: 80%;">';
                    echo '<tr><td>Nombre del Archivo</td><td>Descripción</td><td>Imagen</td><td>¿Dar de baja?</td></tr>';

                    $c=1;
                    while ($row = mysql_fetch_array($res))  {
                         echo '<tr>';
                         echo '<td>'.$row[name].'</td>';
               					 echo '<td>'.$row[descr].'</td>';
                        echo '<td><img src="data:image/jpeg;base64,' . base64_encode( $row['image'] ) . '" height="150" width="200" class="img-rounded" /></td>';
                         echo '<td><input type=checkbox name=check'.$c.' value='.$row[id].'></td>';
                         echo '</tr>';
                         $c++;
                    }
                    echo '<input type=hidden name=cant value='.$c.'>';
                    echo '<tr>';
                    echo '<td colspan="4"><input class="btn btn-primary" value="Dar de Baja" type="submit" name="subgrabar"></td>';
                    echo '</tr>';
                    echo '</table>';
                    echo '</form>';
               } else                          {
                    echo '<p class="text-center">No se encontraron archivos!</p>';
               }

               ?>
               <br>
                    </div>
               </div>

</body>
 </html>
