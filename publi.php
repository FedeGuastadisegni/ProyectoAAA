<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Publicaciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
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

.table > thead > tr > th, .table > tbody > tr > th{
	text-align:center;
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
 <li><a href="login.php">Administrador </a></li>
 </ul>

<?php }?>
</div>
 <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>


	<h1 class="text-center">Listado de Archivos</h1>
	<div id="band" class="container text-center">
		<div class="btn-group" role="group" aria-label="...">
			<button class="toggleButton btn btn-default" href="cles.php">Mi curriculum</button>
			<button class="toggleButton btn btn-default" data-target="div2">Breve en Ingles</button>
			<button class="toggleButton btn btn-default" data-target="div3">Breve en Italiano</button>
			<button class="toggleButton btn btn-default" data-target="div4">Storia docente</button>
			<button class="toggleButton btn btn-default" data-target="div5">Publicaciones completas</button>
		</div>

		<!-- Tabla para Ciencia de la Legislación -->
		<div id="div1" class="toggleDiv text-center" style="display:none;">
			<div class="table-responsive">
			<table id="table" class="table table-bordered" >
			    <tr class="active">
					    <th id="name">Nombre<span class="fa fa-caret-down"></span></th>
					    <th id="tip">Tipo archivo<span class="fa fa-caret-down"></th>
					    <th id="tam">Tamaño(KB)</th>
							<th id="edi">Editorial<span class="fa fa-caret-down"></th>
							<th id="cat">Categoría<span class="fa fa-caret-down"></th>
							<th id="au">Autor<span class="fa fa-caret-down"></th>
							<th id="ubi">Ubicación<span class="fa fa-caret-down"></th>
							<th id="lug">Lugar<span class="fa fa-caret-down"></th>
							<th id="ano">Año<span class="fa fa-caret-down"></th>
							<th id="pag">Cant. Páginas</th>
							<th>Descarga</th>
			    </tr>

	<?php

	  $sql="SELECT * FROM tbl_uploads where categoria = 'Ciencia de la Legislación'";
		$result_set=mysql_query($sql);
		while($row=mysql_fetch_array($result_set))
		{
			?>

	        <tr>
	        <td><?php echo $row['titulo'] ?></td>
	        <td><?php echo $row['tipo_publi'] ?></td>
	        <td><?php echo $row['size'] ?></td>
					<td><?php echo $row['editorial'] ?></td>
					<td><?php echo $row['categoria'] ?></td>
					<td><?php echo $row['autor'] ?></td>
					<td><?php echo $row['ubicacion'] ?></td>
					<td><?php echo $row['lugar'] ?></td>
					<td><?php echo $row['ano'] ?></td>
					<td><?php echo $row['pagina'] ?></td>
					<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank" download>Descarga</a></td>
	        </tr>
	        <?php
		}
		?>
	    </table>
		</div>
		</div>
	</div>

		<div class="table-responsive">
		<table id="table" class="table table-bordered" >
		    <tr class="active">
				    <th id="name">Nombre<span class="fa fa-caret-down"></span></th>
				    <th id="tip">Tipo archivo<span class="fa fa-caret-down"></th>
				    <th id="tam">Tamaño(KB)</th>
						<th id="edi">Editorial<span class="fa fa-caret-down"></th>
						<th id="cat">Categoría<span class="fa fa-caret-down"></th>
						<th id="au">Autor<span class="fa fa-caret-down"></th>
						<th id="ubi">Ubicación<span class="fa fa-caret-down"></th>
						<th id="lug">Lugar<span class="fa fa-caret-down"></th>
						<th id="ano">Año<span class="fa fa-caret-down"></th>
						<th id="pag">Cant. Páginas</th>
						<th>Descarga</th>
		    </tr>

<?php

  $sql="SELECT * FROM tbl_uploads where categoria = 'Ciencia de la Legislación'";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>

        <tr>
        <td><?php echo $row['titulo'] ?></td>
        <td><?php echo $row['tipo_publi'] ?></td>
        <td><?php echo $row['size'] ?></td>
				<td><?php echo $row['editorial'] ?></td>
				<td><?php echo $row['categoria'] ?></td>
				<td><?php echo $row['autor'] ?></td>
				<td><?php echo $row['ubicacion'] ?></td>
				<td><?php echo $row['lugar'] ?></td>
				<td><?php echo $row['ano'] ?></td>
				<td><?php echo $row['pagina'] ?></td>
				<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank" download>Descarga</a></td>
        </tr>
        <?php
	}
	?>
    </table>
	</div>
			<br>
    </div>
</div>



<!-- Script para ordenar los resultados -->
<script>
var table = $('table');

	 $('#name,#cat,#tip,#ubi,#lug,#ano,#au,#edi')
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
