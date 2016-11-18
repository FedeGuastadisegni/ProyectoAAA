<?php include 'cnx.php';   ?>
<html>
	<head>
	<title>Subir Foto</title>
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

          <br><br><br>
<?php include 'menu.php';?>

<div id="band" class="container text-center">
	<h3>Suba una foto</h3>
</div>
<form enctype="multipart/form-data" action=
      "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

      <table class="table table-bordered" style="width: 80%;">
        <tr>
          <td>Descripción que acompañará a la foto</td><td><input type="text" id="descr" name="descr" class="form-control"></td>
        </tr>
        <td>
        <div class="fileUpload btn btn-success">
            <span>Foto</span>
            <input type="file" class="upload" name="userfile" />
        </div>
        <td>
          <input type="submit" value="Subir" class="btn btn-primary" />
        </td>
      </table>
      <!--<input name="userfile" type="file" />
      <input type="text" id="descr" name="descr"/>-->

</form>

<?php

// check if a file was submitted
if(!isset($_FILES['userfile']))
{
    echo '<p class="text-center">No selecciono ninguna imagen</p>';
}
else
{
    try {
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
    include "file_constants.php";
    $maxsize = 10000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {

               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                    mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    $desc = $_POST['descr'];
                    $sql = "INSERT INTO test_image
                    (image, name, descr)
                    VALUES
                    ('{$imgData}', '{$_FILES['userfile']['name']}','$desc');";
                    //echo $sql;

                    // insert the image
                    mysql_query($sql) or die("Error in Query: " . mysql_error());
                    $msg='<p class="text-center">La imagen a sido correctamente guardada</p>';
                }
                else
                    $msg='<p class="text-center">Hubo un error.</p>';
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>
</body>
</html>
