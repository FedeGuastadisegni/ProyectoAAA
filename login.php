    <html>
  <head>
       <title>Login</title>
       <link rel="stylesheet" type="text/css" href="styles.css">
       <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
       <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/main.css">
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
                </div>
              			<!-- /.navbar-collapse -->
              	</div>
              	<!-- /.container -->
              </nav>

            <br><br><br><br><br><br>
            <?php

  include 'cnx.php';

  if ($_POST['sublogin']) {

       $_POST = clean($_POST);

       $res = mysql_query("select * from usuario where nick_u = '$_POST[txtu]' and pass_u = '$_POST[txtp]'");
       if (mysql_num_rows($res)) {
            $row = mysql_fetch_array($res);
            $_SESSION[registrado] = $row[cod_u];
  	$_SESSION['username'] = $row[nick_u];
       } else                      {
            $mensaje = '<br />nombre de usuario / contrasenia incorrectos<br /><br />';
       }
  }

  if ($_SESSION['registrado']) {
       $admin = mysql_query("select nick_u from usuario where  pass_u = '$_POST[txtp]' and privilegio = 1;");
       if(mysql_num_rows($admin)){
          header("location: menu_adm.php");
       }else{
          header("location: index.php");
       }
        exit;
  } else {
      echo '<div class="container">';
      echo '<div class="row">';
       echo '<div class="col-sm-8 col-md-7 col-md-offset-2">';
       echo '<form method="POST" action="login.php">';
       echo '<div class="form-group">';
       echo '<label for="user">Usuario</label>';
       echo '<input type="text" id="txtu" class="form-control" name="txtu" value="'.$_POST['txtu'].'">';
       echo '</div>';
       echo '<div class="form-group">';
       echo '<label for="pwd">Contraseña</label>';
       echo '<input type="password" id="txtp" class="form-control" name="txtp" value="'.$_POST['txtp'].'">';
       echo '</div>';
       echo '<input type="submit" id="sublogin" class="btn btn-primary" name="sublogin" value="login">';
       echo '</form>';
       echo '<br /><a href="index.php">ir a inicio</a>';
       echo '</div>';
      echo '</div>';
       echo '</div>';
       echo '</body>';
       echo '</html>';
  }

  ?>


  </body>
  </html>
