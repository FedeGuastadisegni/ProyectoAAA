<?php include 'cnx.php';   ?>
<html>
	<head>
	<title>Menu Administrador</title>
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

          <br><br><br>
<div id="band" class="container text-center">
	<h3>Menú de administrador</h3>
</div>
 	<?php
		include 'menu.php';
	?>
</body>

</html>
