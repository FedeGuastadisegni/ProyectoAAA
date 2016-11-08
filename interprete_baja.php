<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Eliminar archivo</title>
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
<?php

include 'menu.php';

$_POST = clean($_POST);

if ($_POST[subgrabar])     {
     for ($i=1; $i<=$_POST[cant]; $i++)   {
          $temp = 'check'.$i;
          if ($_POST["$temp"]) { //atencion a las comillas dobles
							$elimino = mysql_query("select file from tbl_uploads where id = ".$_POST["$temp"]);
							$row = mysql_fetch_array($elimino);
							$name_file = $row["file"];
							$directory = getcwd().'/uploads/'.$name_file;
							unlink($directory);
							$sql = "delete from tbl_uploads where id = ".$_POST["$temp"];
              $res = mysql_query($sql);
          }
     }
}

$sql = "select * from tbl_uploads order by titulo asc";
$res = mysql_query($sql);

if (mysql_num_rows($res))    {
     echo '<form action="?" method=POST>';
     echo '<table class="table table-bordered" style="width: 80%;">';
     echo '<tr><td>Nombre</td><td>Categoría</td><td>¿Dar de baja?</td></tr>';

     $c=1;
     while ($row = mysql_fetch_array($res))  {
          echo '<tr>';
          echo '<td>'.$row[titulo].'</td>';
					echo '<td>'.$row[categoria].'</td>';
          echo '<td><input type=checkbox name=check'.$c.' value='.$row[id].'></td>';
          echo '</tr>';
          $c++;
     }
     echo '<input type=hidden name=cant value='.$c.'>';
     echo '<tr>';
     echo '<td colspan="2"><input class="btn btn-primary" value="Dar de Baja" type="submit" name="subgrabar"></td>';
     echo '</tr>';
     echo '</table>';
     echo '</form>';
} else                          {
     echo 'No se encontraron interpretes';
}

?>
<br>
     </div>
</div>


</body>
</html>
