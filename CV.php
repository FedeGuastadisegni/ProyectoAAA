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
        <h3 class="panel-title text-center">Curriculum</h3>
    </div>
    <div class="panel-body text-center">
      <!--Contenido del CV -->
            <p>1. Abogado de la Universidad de Buenos Aires, 1962.</p>
            <p>2. Profesor titular de Filosof&iacute;a del Derecho de la Universidad de Belgrano (1969- 1978)</p>
            <p>3. Profesor de Introducci&oacute;n al Derecho del la Universidad de Buenos Aires (1971- 1977).</p>
            <p>4. Doctor en Derecho y Ciencias Sociales de la Universidad de Buenos Aires, 1974</p>
            <p>5. Profesor Titular de Introduccion al Derecho en la Universidad de Moron (1971 &ndash; 1978)</p>
            <p>6. Miembro de la Sociedad Cient&iacute;fica Argentina, desde 1975.</p>
            <p>7. Profesor de Ciencias Pol&iacute;ticas, de la Facultad de Ciencias Pol&iacute;ticas de la Universidad de</p>
            <p>Pisa, desde (1976 &ndash; 2006).</p>
            <p>8. Profesor asociado de derecho p&uacute;blico en la Universidad de Haute Normandie, Francia</p>
            <p>(1978-1979)</p>
            <p>9. Representante italiano del CELIM (Comitato Europeo Lex Informatica Mercatoriaque)</p>
            <p>desde 1979.</p>
            <p>10. Profesor del Curso de Estado Mayor de la Escuela Superior de Guerra Naval de Livorno</p>
            <p>(1982- 1986).</p>
            <p>11. Director del Istituto per la Documentazione Giuridica del Consiglio Nazionale delle</p>
            <p>Ricerche, en Florencia (1983-1992).</p>
            <p>12. Profesor de Ciencias Pol&iacute;ticas del Curso de Estado Mayor de las tres fuerzas armadas</p>
            <p>italianas (1985-1991).</p>
            <p>13. Miembro del la Comisi&oacute;n de la Inform&aacute;tica del Consejo Nacional de las Investigaciones</p>
            <p>(1986-1993).</p>
            <p>14. Presidente del FIRILITE (Federation of International Research Institutes on Law and</p>
            <p>Information Technology in Europe), (1987- 1993).</p>
            <p>15. Presidente del Ediforum Italia, desde 1988.</p>
            <p>16. Miembro honorario de la Asociaci&oacute;n Cubana de Juristas, desde 1989.</p>
            <p>17. Miembro ordinario del ISLE (Institute for Legislative Studies and Documentation) desde</p>
            <p>1990.</p>
            <p>18. Miembro correspondiente de la Academia Nacional de Derecho y Ciencias Sociales de</p>
            <p>C&oacute;rdoba desde 1991.</p>
            <p>19. Consultor de la banca mundial, desde 1991.</p>
            <p>20. Miembro del AIIA (Associazione Italiana di Intelligenza Artificiale), desde 1991.</p>
            <p>21. Miembro asociado del Center for Artificial Intelligence and Cognate learning of the</p>
            <p>University of Greenwich, desde 1994.</p>
            <p>22. Miembro de la &ldquo;European Association of Legislation&rdquo;, desde 1994.</p>
            <p>23. Miembro Honorario del Circolo di Giuristi telematici, desde 1995.</p>
            <p>24. Director del Master&nbsp; en &ldquo;Ciencia de la Legislaci&oacute;n&rdquo; promovido por las Universidades de</p>
            <p>Pisa y del Salvador, en la facultad de Ciencias Jur&iacute;dicas de la Universidad del Salvador en</p>
            <p>Buenos Aires desde 1995.</p>
            <p>25. Miembro del Comit&eacute; Ejecutivo del Instituto Italo-Latino Americano. 1996- 2001.</p>
            <p>26. Miembro de la Asociaci&oacute;n Internacional de Soci&oacute;logos de idioma franc&eacute;s, Universit&eacute; de</p>
            <p>Touluse- le Miral. 1996</p>
            <p>27. Miembro de la Organizaci&oacute;n Latinoamericana Alfa-Redi, desde 1996.</p>
            <p>28. Miembro del WE/EB-MD8 (EDIFACT Message Developmen Group Legal), 1996.</p>
            <p>29. Presidente de la Comisi&oacute;n italiana EBES (European Board for EDI standards), desde</p>
            <p>1996.</p>
            <p>30. Director del Master en &ldquo;Nuevas Tecnolog&iacute;as para la Justicia&rdquo; de la Universidad de Lan&uacute;s</p>
            <p>(Argentina) desde 1997.</p>
            <p>31. Coordinador Internacional del Programa Alfa de la Uni&oacute;n Europea, Red Chasqui, Nuevas</p>
            <p>tecnolog&iacute;as para la Justicia desde 1998.</p>
            <p>32. Candidato para la asistencia t&eacute;cnica a favor de pa&iacute;ses en desarrollo de la Comunidad</p>
            <p>Europea, 1998.</p>
            <p>33. Director del Manual del Digesto Argentino, 1999-2001.</p>
            <p>34. Miembro Honorario de Associazione Nazionale Per Operatori e Responsabili della</p>
            <p>Conservazione Digitale (ANORC), desde 1999.</p>
            <p>35. Consejero de la Organizaci&oacute;n Mundial del Derecho y la Inform&aacute;tica (OMDI), 1999.</p>
            <p>36. Director del Master in Scienza della Legislazione &ndash; Universit&agrave; di Pisa, 1999.</p>
            <p>37. Director del Instituto de Estudio y Formaci&oacute;n para el Gobierno y la Sociedad, Buenos</p>
            <p>Aires, 2001 - 2011.</p>
            <p>38. Miembro del EspNet Network Europeo de Ciencia pol&iacute;tica,&nbsp; 2002.</p>
            <p>39. Presidente del Comit&eacute; Cient&iacute;fico del III Congreso Mundial de Inform&aacute;tica y Derecho, La</p>
            <p>Habana, 2003.</p>
            <p>40. Miembro de la RCLS (Research Committee of Legislative Specialists) &ndash; USA 2003.</p>
            <p>41. Miembro del Grupo permanente FTI para &amp;quot;European Internet Coregulation Network&amp;quot;</p>
            <p>(EICN), desde 2003.</p>
            <p>42. Miembro del Instituto de Derecho Constitucional de la Academia de Derecho y Ciencias</p>
            <p>Sociales de Buenos Aires, desde 2004.</p>
            <p>43. Miembro del Instituto de Filosofia pol&iacute;tica y moral de la Academia Academia Nacional de</p>
            <p>Ciencias Morales y Pol&iacute;ticas</p>
            <p>44. Miembro del Capitulo Italiano de ISOC, Secci&oacute;n italiana de Internet Society, desde 2004.</p>
            <p>45. Miembro del Comit&eacute; Cient&iacute;fico de la Asociacion &ldquo;Oasi Federico&rdquo;, Organizzazione</p>
            <p>ONLUS&nbsp; Marina di Belvedere Marittimo (CS), 2004.</p>
            <p>46. Representante de la Universidad de Pisa en Argentina, 2004- 2010</p>
            <p>47. Director Cient&iacute;fico de la Escuela de Altos Estudios para el Mercosur, Montevideo, 2005.</p>
            <p>48. Miembro del GESI&nbsp; Grupo de Estudios Sist&eacute;micos Internacionales,&nbsp;&nbsp; Buenos Aires, desde</p>
            <p>2005.</p>
            <p>49. Miembro fundador de La Red VIT@LIS,&nbsp; Bruselas, desde 2006.</p>
            <p>50. Miembro Vocal del GESI, Grupo de Estudios de Sistemas Integrados, desde 2007.</p>
            <p>51. Ganador de un proyecto financiado por la Secretaria de ciencia y t&eacute;cnica de la Universidad</p>
            <p>de la Plata, sobre &ldquo;El concepto de confianza colectiva y el derecho internacional al</p>
            <p>desarrollo&rdquo;, desde 2007.</p>
            <p>52. Representante de la Embajada italiana como relator en el seminario &ldquo;La legislaci&oacute;n, la</p>
            <p>Medicina y la Econom&iacute;a de las Cat&aacute;strofes. Prevenci&oacute;n y Acci&oacute;n, Mendoza 2009.</p>
            <p>53. Miembro del Capitulo Argentino de ISOC, Secci&oacute;n Argentina de Internet Society, desde</p>
            <p>2007.</p>
            <p>54. Evaluador de la Agencia espa&ntilde;ola Agencia Nacional de Evaluaci&oacute;n y Prospectiva (ANEP),</p>
            <p>desde 2009.</p>
            <p>55. Profesor Em&eacute;rito de la Universidad del Salvador (Argentina) 2010.</p>
            <p>56. Profesor Contratado de la Universidad de Lan&uacute;s. 2011.</p>
            <p>57. Presidente del Comit&eacute; Acad&eacute;mico de la VIII Conferencia Internacional de Derecho e</p>
            <p>Inform&aacute;tica de La Habana, 2011. Representante de la Universidad de Pisa en</p>
            <p>Latinoam&eacute;rica, 2011.</p>
            <p>58. Secretario para Europa de la Red Acad&eacute;mica de Protecci&oacute;n de Datos Personales,</p>
            <p>Monterrey, M&eacute;xico. 2011.</p>
            <p>59. Profesor titular contratado de aspectos legales y profesionales de la inform&aacute;tica,</p>
            <p>Universidad de Lan&uacute;s.</p>
            <p>60. Declarado por Ley 4286 Personalidad Destacada de la Ciudad Aut&oacute;noma de Buenos Aires</p>
            <p>en el &aacute;mbito de las Ciencias Jur&iacute;dicas, 13/09/2012</p>
            <p>61. Evaluador de la Universidad Fasta de Mar del Plata.</p>
            <p>62. Miembro de la International Association Artificial Intelligence and Law,</p>
            <p>63. Miembro del Consejo Cient&iacute;fico de las Revistas:</p>
            <p>-Del derecho industrial, Buenos Aires;</p>
            <p>- Computer/Law Series, Amsterdam;</p>
            <p>- Artificial Intelligence and Law, Boston;-</p>
            <p>Law and Information Technology, Oxford;</p>
            <p>-&nbsp;Derecho de la alta tecnolog&iacute;a, Buenos Aires;</p>
            <p>- Forum per la Tecnologia dell&rsquo;Informazione,&nbsp; Roma.</p>
            <p>- Legisprudence. International Journal of the study of legislation, London.</p>
            <p>Derecho del Ciberespacio, Madrid</p>
            <p>Revista de Derecho de las Telecomunicaciones, Internet y Medios Audiovisuales, Buenos</p>
            <p>Aires</p>
            <p>RLPDP &ndash; Revista Latinoamericana de Protecci&oacute;n de Datos Personales. Mexico.</p>
            <p>Miembro del ADVISORY BOARD del progetto Re.Cri.Re de la Union Europea.&nbsp;</p>
            <p>- Editor de la colecci&oacute;n: Logica, Informatica, Diritto del CEDAM.</p>
            <p>Asesor Cient&iacute;fico de la Obra de la Convenci&oacute;n Nacional Constituyente 1994, Recopilaci&oacute;n</p>
            <p>de la documentaci&oacute;n de la &uacute;ltima reforma constitucional, La Ley, Buenos Aires I, II, III,</p>
            <p>IV, V, VI, VII y VIII tomo, 1996-1998.</p>
            <p>Director del Manual del Digesto Argentino, (www.antonioanselmomartino.it), 1999.</p>
            <p>Autor de 43 libros,&nbsp; 652 art&iacute;culos, ensayos y obras menores.</p>
    </div>
  </div>

</body>
</html>
