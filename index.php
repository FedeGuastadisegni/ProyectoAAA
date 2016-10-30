<?php include 'cnx.php';   ?>
<html class="no-js">
<head>
	<title>Venta de Discos</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/jquery-1.11.1.min.js"></script>

		<style>
						body {
								padding-top: 70px;

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


											<?php if ((isset($_SESSION['username'])))
											{
												if($_GET['logout']=="1"){
											$_SESSION['login'] = "";
											@session_destroy();
											header("Location: index.php");

										}
												echo '<ul class="nav navbar-nav navbar-right"> <li>';
									            echo '<div style="color:blue; padding: 15px 10px 5px 50px;">';
									            echo "Hola ". $_SESSION['username']." </div></li>";
															echo '<li><a href="menu_adm.php">Menu</a></li>';
												echo '<li><a href="?logout=1">LogOut</a></li>';
									            echo '</ul>';



											}
											else
											{?>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="login.php">Administrador</a></li>
			</ul>

		<?php }?>
	</div>
			<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>



<!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Ups! Nada por aqui!</h1>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->



<script src="js/vendor/bootstrap.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

</body>
</html>
