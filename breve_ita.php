<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>Inicio</title>




<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">



<!--[if lte IE 8]>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

<![endif]-->
<!--[if gt IE 8]><!-->

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!--<![endif]-->



<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->
</head>


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

/*ICON STYLING*/

/*=========================
Icons
================= */

/* footer social icons */
ul.social-network {
list-style: none;
display: inline;
margin-left:0 !important;
padding: 0;
}
ul.social-network li {
display: inline;
margin: 0 5px;
}


.bg-grey {
       background-color: #545454;
 }


 /*=========================
  Icons
 ================= */

/* footer social icons */
ul.social-network {
	list-style: none;
	display: inline;
	margin-left:0 !important;
	padding: 0;
}
ul.social-network li {
	display: inline;
	margin: 0 5px;
}


/* footer social icons */
.social-network a.icoRss:hover {
	background-color: #F56505;
}
.social-network a.icoFacebook:hover {
	background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
	background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
	background-color:#BD3518;
}
.social-network a.icoVimeo:hover {
	background-color:#0590B8;
}
.social-network a.icoLinkedin:hover {
	background-color:#007bb7;
}
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
	color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
	color:#44BCDD;
}

.social-circle li a {
	display:inline-block;
	position:relative;
	margin:0 auto 0 auto;
	-moz-border-radius:50%;
	-webkit-border-radius:50%;
	border-radius:50%;
	text-align:center;
	width: 50px;
	height: 50px;
	font-size:20px;
}
.social-circle li i {
	margin:0;
	line-height:50px;
	text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
	-moz-transform: rotate(360deg);
	-webkit-transform: rotate(360deg);
	-ms--transform: rotate(360deg);
	transform: rotate(360deg);
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-ms-transition: all 0.2s;
	transition: all 0.2s;
}
.social-circle i {
	color: #fff;
	-webkit-transition: all 0.8s;
	-moz-transition: all 0.8s;
	-o-transition: all 0.8s;
	-ms-transition: all 0.8s;
	transition: all 0.8s;
}

</style>

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


  <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Breve Introduzione</h3>
    </div>
    <div class="panel-body text-center">
      <!--Contenido del CV -->
      <p>Antonio A. Martino, già professore dell’Università di Pisa in Scienze politiche. Gia
        professore dell’Università di Haute Normadie in filosofia del diritto. Già direttore
        dell’Istituto per la Documentazione Giuridica del Consiglio Nazionale delle Ricerche.
        Professore emerito dell’Università del Salavador (Argentina) e professore a contratto
        dell’Università di Lanus (Argentina). Membro della Academia Nacional de Derecho y
        Ciencias Sociales de Córdoba. Membro del Center for Artificial Intelligence and
        Cognate learning of the University of Greenwich. Membro dell’ Instituto de Derecho
        Constitucional de la Academia de Derecho y Ciencias Sociales de Buenos Aires.
        Secretario per l’Europa della Red Académica de Protección de Datos Personales,
        Monterrey, México. Dichiarato per legge 4286 Personalità Eccezionale della Città
        Autonoma di Buenos Aires nel campo delle scienze giuridiche. Membro del Comitato
        Scientifico delle Riviste: Computer/Law Series, Amsterdam; - Artificial Intelligence
        and Law, Boston; - Law and Information Technology, Oxford; - Derecho de la alta
        tecnología, Buenos Aires; -Legisprudencia, International Journal of the study of
        legislation, London; - Derecho del ciberespacio .Revista de Derecho Informático y de la
        Sociedad de la Informacion, Madrid. Autore di 43 libri e 652 articoli e saggi.</p>
    </div>
  </div>

</body>
</html>
