<?php include 'cnx.php';   ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/c322257c2a.js"></script>
  <title>Mis fotos</title>


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



<div class="container">
  <div class="row">
    <h1 class="text-center">Mis fotos</h1>

      <?php
      include "file_constants.php";
      error_reporting(E_ALL);

          $link = mysql_connect("$host", "$user", "$pass")
          or die("Could not connect: " . mysql_error());

          // select our database
          mysql_select_db("$db") or die(mysql_error());

          // get the image from the db
          $sql = "SELECT *FROM test_image;";

          $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

          while ($row = mysql_fetch_array($result)) {
              /*echo $row["name"];
              $id = $row['id'];
              $url = "http://localhost/ProyectoAAA/file_display.php?id=".$id;*/
              echo '<div class="col-lg-3 col-sm-4 col-xs-6">';
              echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['image'] ) . '" height="200" width="250" class="img-rounded" />';
              echo '<p class="text-center">'.$row['descr'].'</p>';
              echo '</div>';
           }

       ?>


  </div>
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">

	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
	</div>
   </div>
  </div>
</div>

<style>.modal-dialog {width:600px;}
.thumbnail {margin-bottom:6px;}</style>

<script>$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});</script>



</body>
</html>
