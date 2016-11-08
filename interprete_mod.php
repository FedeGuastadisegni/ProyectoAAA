<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Modificacion de Interpretes</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<script src="js/jquery.sortElements.js"></script>
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

		<table id="table" class="table table-bordered" >
    <tr>
    <th colspan="11">Listado de archivos!<br><a href="interprete_alta.php">Subir un archivo nuevo</a>
		<br><a href="index.php">Volver al inicio</a></th>
    </tr>
    <tr>
		    <th id="name">Nombre<span class="fa fa-caret-down"></span></th>
		    <th>Tipo</th>
		    <th>Tamaño(KB)</th>
				<th id="cat">Categoría<span class="fa fa-caret-down"></th>
				<th>Autor</th>
				<th>Ubicación</th>
				<th>Lugar</th>
				<th>Año</th>
				<th>Cant. Páginas</th>
				<th>Download</th>
    </tr>

<?php

  $sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['titulo'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
				<td><?php echo $row['categoria'] ?></td>
				<td><?php echo $row['autor'] ?></td>
				<td><?php echo $row['ubicacion'] ?></td>
				<td><?php echo $row['lugar'] ?></td>
				<td><?php echo $row['ano'] ?></td>
				<td><?php echo $row['pagina'] ?></td>
				<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank" download>Download!</a></td>
        </tr>
        <?php
	}
	?>
    </table>
			<br>
    </div>
</div>



<!-- Script para ordenar los resultados -->
<script>
var table = $('table');

	 $('#name,#cat')
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
