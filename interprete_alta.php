<?php include 'cnx.php';   ?>
<html>
<head>
	<title>Alta de Interpretes</title>
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

if(isset($_POST['subir']))
{
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	$rights=$_POST['categoria'];
	$autor = $_POST['autor'];
	$ubicacion = $_POST['ubicacion'];
	$lugar = $_POST['lugar'];
	$ano = $_POST['ano'];
	$pagina = $_POST['pagina'];

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_uploads(file,type,size,categoria,autor,ubicacion,lugar,ano,pagina) VALUES('$final_file','$file_type','$new_size','$rights','$autor','$ubicacion','$lugar','$ano','$pagina')";
		mysql_query($sql);
		?>
		<script>
		alert('Archivo subido con exito!');

        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        //window.location.href='index.php?fail';
        </script>
		<?php
	}


}




echo '<form method="post" action="" enctype="multipart/form-data">';

echo '<table class="table table-bordered" style="width: 80%;">';
echo '<tr>';
echo '<td>Autor/es</td><td><input type="text" class="form-control" id="autor" name="autor"></td>';
echo '</tr>';
echo '<tr>';
echo '<td>Titulo del archivo</td><td><input type="text" class="form-control" id="titulo" name="titulo"></td>';
echo '</tr>';
echo '<tr>';
echo '<td> Categoría</td>';
echo '<td><select class="form-control" name="categoria"> ';
echo    '<option>VOlvo</option>';
echo    '<option>2</option>';
echo    '<option>3</option>';
echo    '<option>4</option>';
echo  '</select>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Ubicación</td><td><input type="text" class="form-control" id="ubicacion" name="ubicacion"></td>';
echo '</tr>';
echo '<tr>';
echo '<td>Lugar de publicación</td><td><input type="text" class="form-control" id="lugar" name="lugar"></td>';
echo '</tr>';
echo '<tr>';
echo '<td>Año</td><td><input type="text" class="form-control" id="ano" name="ano"></td>';
echo '</tr>';
echo '<tr>';
echo '<td>Páginas</td><td><input type="text" class="form-control" id="pagina" name="pagina"></td>';
echo '</tr>';
echo '<td>';

echo '
<div class="fileUpload btn btn-success">
    <span>Upload</span>
    <input id="uploadBtn" type="file" class="upload" name="file" />
</div>';
echo '<td><input id="uploadFile" class="form-control" placeholder="Archivo elegido" disabled="disabled" /></td>';
echo '</td >';
echo '<tr>';
echo '<td colspan="2"><input class="btn btn-primary" value="Subir!" type="submit" name="subir"></td>';
echo '</tr>';
echo '</table>';

echo '</form>';

?>
<br>
	</div>
</div>

<script> document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};</script>


</body>
</html>
