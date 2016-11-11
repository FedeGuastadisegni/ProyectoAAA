<?php include 'cnx.php';   ?>
<html class="no-js">
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
		<script src="https://use.fontawesome.com/c322257c2a.js"></script>

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/jquery-1.11.1.min.js"></script>

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

a {
 background-color: #2d2d30;
}
</style>

</head>
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

														<li>
																<a href="#">Publicaciones</a>
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



<!-- Page Content -->
<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>Profesor Antonio Anselmo Martino</h3>
  <p><em>Univertá di Pisa, Universidad del Salvador, Universidad Nacional de Lanús</em></p>
	<div class="well">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>


	<div class="col-md-12">
	                    <ul class="social-network social-circle">
	                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
	                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
	                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
	                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
	                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
	                    </ul>
					</div>

</body>
</html>
