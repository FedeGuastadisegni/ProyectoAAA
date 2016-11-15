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



<!-- Page Content -->
<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
	<img src="img/ant_1.jpg" class="img-rounded" alt="Antonio A. Martino" width="100" height="100">
  <h3>Profesor Antonio A. Martino</h3>
  <p><em>Univertá di Pisa, Universidad del Salvador, Universidad Nacional de Lanús</em></p>
<div class="btn-group" role="group" aria-label="...">
	<button class="toggleButton btn btn-default" data-target="div1">Mi curriculum</button>
	<button class="toggleButton btn btn-default" data-target="div2">Breve en Ingles</button>
	<button class="toggleButton btn btn-default" data-target="div3">Breve en Italiano</button>
	<button class="toggleButton btn btn-default" data-target="div4">Storia docente</button>
	<button class="toggleButton btn btn-default" data-target="div5">Publicaciones completas</button>
</div>
<br><br>
<div id="div1" class="toggleDiv text-center" style="display:none;">
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
<p>Autor de 43 libros,&nbsp; 682 art&iacute;culos, ensayos y obras menores.</p>
</div>

<div id="div2" class="toggleDiv" style="display:none;text-align: justify;">
   <p>Antonio A. Martino, a former professor of the University of Pisa in political science.

Already professor at the University of Haute Normadie in philosophy of law. Former

director of the Institute for Legal Documentation of the Italian National Research

Council. Professor emeritus of Salavador (Argentina) and professor at the University of

Lanus (Argentina). Member of the Academia Nacional de Derecho y Ciencias Sociales

de Córdoba. Member of the Center for Artificial Intelligence and Cognate Learning of

the University of Greenwich. Member of the &#39;Instituto de Derecho Constitucional de la

Academia de Derecho y Ciencias Sociales de Buenos Aires. Secretary for Europe of the

Red Académica de Protección de Datos Personales, Monterrey, México. Declared by

law 4286 Outstanding Personality of the Autonomous City of Buenos Aires in the field

of legal sciences. Member of the Scientific Committee of the Journals: Computer / Law

Series, Amsterdam; - Artificial Intelligence and Law, Boston; - Law and Information

Technology, Oxford; - Derecho de la High Technology, Buenos Aires; -Legisprudencia,

International Journal of the Study of legislation, London; - Derecho of ciberespacio

.Revista Informático de Derecho y de la Sociedad de la Informacion, Madrid. Author of

43 books and 681 articles and essays.</p>
</div>

<div id="div3" class="toggleDiv" style="display:none;text-align: justify;">
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

Sociedad de la Informacion, Madrid. Autore di 42 libri e 683 articoli e saggi.</p>
</div>

<div id="div4" class="toggleDiv" style="display:none;text-align: justify;">
	<p>
		Sono nato a Buenos Aires nel agosto del 1937.  Ho fatto qui l’elementare (7

anni) e le medie-secondarie (5 anni). Ho studiato magistero alla Scuola Normale di

Buenos Aires frequentata da straordinari professori: i migliori in matematica, storia,

latino, scienze.  A diciotto anni ho preso il titolo di maestro normale nazionale e a

diciannove anni incominciai, da supplente, a lavorare come maestro di scuola

elementare nel 5ª anno di una scuola di Flores (un quartiere di Buenos Aires ).  Come

sarà stata la mia esperienza che dopo cinquanta anni, si sono presentati a casa mia due

ex studenti di quel corso con i quali conservo ancora rapporti: uno vive in Brasile ed è

ingeniere, l’altro a Buenos Aires ed è funzionario del fisco.  Mentre lavoravo come

maestro di scuola elementare ho studiato giurisprudenza laureandomi nel 1962, vedi il

mio curriculum in .  Vinse nel 1957 il concorso di maestro titolare e continuai a

lavorare come tale fino al 1964, esercitando allora anche la professione di avvocato. Nel

1961 ebbi un’esperienza straordinaria: sostenendo l’esame di filosofia del diritto alla

Facoltà di Giurisprudenza dell’Università di Buenos Aires, il titolare – Prof. Ambrosio

Luca Gioja – mi chiese, dopo avermi dato il voto di trenta e lode, se volevo entrare a far

parte dell’Istituto di filosofia del diritto da lui diretto.  Le feci notare che stavo per

prendere la laurea ma che ero di famiglia modesta – un immigrante lucano, sarto e

un’argentina figlia di calabresi, donna di casa - e per vivere lavoravo da maestro

elementare.  Lui mi fece questo ragionamento: “Lei è capace, farà una buona carriera

come avvocato, e quando avrà cinquanta anni, verrà da me per entrare nell’Istituto,

perché non accorciare questi venticinque anni? Mi convinse e cominciai a lavorare

come assistente ad honorem.  Piano piano fece il cursus honorum nell’istituto (oggi

famoso e porta il nome di Ambrosio L. Gioja) e nel 1968 vinse il concorso di professore

associato nella materia “introduzione al diritto”.  Lavoravo come avvocato e studiavo

nell’Istituto con grandi colleghi tra i quali Carlos Alchourron e Eugenio Bulygin e

ovviamente facevo lezioni di introduzione al diritto.  Nel 1969 un altro colpo di scena:

mi offrono la cattedra di filosofia del diritto nella recente creata università di Belgrano,

sempre a Buenos Aires.  Non mi credevo all’altezza della situazione e quindi sono

andato a chiedere consiglio al mio maestro Gioja.  Lui sosteneva che ero in grado, ma io

le feci notare che sfortunatamente il più capace per giudicare ero io e non me la sentivo. 

Allora lui disse “prenda la cattedra e tutti i sabati mattina viene a casa mia e io la guido

per portarla avanti”.

Ovviamente con tutti gli onori e senza oneri accettai e per un anno andai a casa

sua tutti i sabati. Arrivavo, ci mettevamo per terra a studiar Wittgenstein, e mai mi

permise toccare l’argomento della cattedra di filosofia del diritto all’Università di

Belgrano.  Mi son dovuto arrangiare da solo.

            Nel 1971 vinse una borsa di studio all’ambasciata italiana a Buenos

Aires, per andare un anno a studiare in Italia.  Mio maestro Gioja conosceva molto bene

i professori di filosofia del diritto italiani perche viaggiava spesso.  Mi disse “scriverò a

Torino a Norberto Bobbio”, questi accettò e nell’ottobre del 1972, arrivai a Torino e mi

presentai al grande filosofo italiano. Subito mi fece notare che il mio italiano era

scandente e che dovevo raggiungere la perfezione in tre mesi. Studiai la grammatica y

durante le notti lessi la maggior parte dei romanzieri del novecento.

     Avendo un buon udito da cantante lirico cercavo di seguire tutte le inflessioni

dell’italiano che a quel tempo erano molte in quella città,  dal locale torinese al lucano

che si parlava in casa dei miei parenti che mi ospitavano, passando per tutti i dialetti del

sud che abitavano a sud di Porta Palazzo. Quell’anno Bobbio passava da essere preside

alla facoltà di Giurisprudenza a diventare titolare di filosofia politica alla facoltà di

Scienze politiche. Generoso come sempre mi cedette il suo ex ufficio di preside, dove io

potevo portare tutti i libri di una biblioteca come non avevo mai visto. A Buenos Aire i

libri si fermavano agli anni trenta, a Torino c’era la più aggiornata biblioteca di filosofia

del diritto. Potevo leggere guanto volevo e lo facevo con piacere sommo. Quell’anno

frequentai tutte le lezioni di Bobbio nel palazzo vicino la Mole, con grande sorpresa dei

miei colleghi. Questi mi facevano notare che non era di stile andare a sentire lezioni dei

colleghi e io rispondevo che quelle di Bobbio non me li sarei perdute per niente al

mondo, Il titolare che subentrò a Bobbio in filosofia del diritto, un grande professor

Uberto Scarpelli  mi trattò con la stessa cura che al suo assistente Mario Jori.   A punto

tale di darmi una delle commissioni del mattino per fare lezioni.  Così trascorsi un anno

sostenendo lezioni ed esami tra Bobbio e Scarpelli ed imparando di tutti e due.

            Il mio rapporto con gli studenti torinesi fu molto fluido, loro m’invitavano alle

“piole” (luoghi di ristoro tipicamente piemontese) e arrivarono a sottopormi i loro

problemi di vita come una coppietta formata da un piemontese e una campana.  Mi

chiesero di intervenire presso i suoi padri e mi addentrai nelle terre feraci

dell’Astigiano. Lì, il padre piemontese mi fece notare che non aveva modo di presentare

a sua famiglia una pretendente campana. Ragionammo lungo tempo e finalmente la

coppia di studenti si sposo chiedendomi di fare da testimone.

            Nel lungo soggiorno italiano (ottobre 1972 – dicembre 1973) poté maturare la

tesi dottorale “Definicion y Ley” che presentai non appena tornato.

Contemporaneamente e con l’aiuto di Bobbio e Scarpelli scrissi il mio primo libro in

italiano “Le definizioni legislative”,  pubblicato da Giappichelli, Torino 1975.   Il

dottorato cum laude lo ottenni nel 1974 grazie all’intervento di un grande maestro

Roberto Vernengo che spiegò agl’altri membri della commissione che l’uso di segni

logici nella mia tesi erano d’obbligo e significativi.

Ripresi l’insegnamento accademico e fui nominato preside della Facoltà di

Giurisprudenza dell’Università Cattolica della città di La Plata (capitale della Provincia

di Buenos Aires). Erano anni bui con la guerriglia che insediava tutte le azioni del

paese.  Cercarono di occupare la Facoltà, dove ero preside e dovette resistere.  Erano

anche tempi duri perché appena divorziato non avevo macchina e dovevo andare a La

Plata in autobus. Quando riuscivo a far allontanare gli occupanti, arrivato in strada

domandavo dove si prendeva l’autobus con una azione ingenua e quasi grottesca, ma

efficace: loro mi accompagnavano. Finalmente il Rettore dell’Università mi chiese di

far intervenire la polizia.  Io mi rifiutai e dovette rinunciare. I tempi bui venivano anche

da azione di terrorismo di stato. Un mio amico fu preso prigioniere dai militari quindi

decidemmo che qualcuno di noi doveva presentare un habeas corpus, con tutti i rischi

della repressione di Stato.  Divorziato, senza figli e vincitore di una seconda borsa per

tre mesi in Italia ero il candidato ideale. Presentai il ricorso, il mio amico comparve

(quindi non era più “desaparecido”) ma le cose si sono messe molto male per me:  la

associazione anticomunista argentina, la tripla “A” decidete di includermi nella lista

degli avvocati a uccidere e così comparve col nº 47 nei suoi nefandi manifesti.

            Decidete allora di utilizzare il viaggio della borsa di studio e il 16 gennaio 1976

viaggiai di nuovo verso Torino.  Bobbio mi accolse subito con la normale generosità ma

mi fece capire che non c’erano posti di lavoro per me in Italia.  Il 24 marzo verso sera

mi chiamo per domandarmi se avevo visto la televisione. Le dissi di no e lui “è

avvenuto un colpo di stato nel tuo paese”. Cominciava una dittatura terribile che portò

trenta mila “desaparecidos” e sarebbe durata fino al 1983, sette anni. Non potevo

tornare ma non avevo un soldo per vivere.  Bobbio mi organizzò dei viaggi in tutta

Europa raccomandandomi a suoi amici e collegi tra i quali il filosofo finlandese Georg

Henrik von Wright, creatore della logica delle norme col quale fece una grande amicizia

che durò fino alla sua morte molti anni dopo.

            Tornato in Italia, decise di presentarmi ai concorsi di “incaricati” che erano una

sorte di assistenti fuori ruolo che dovevano rinnovare ogni anno il loro incarico.  Bobbio

e Scarpelli cercarono di farmi capire che non c’era posto per uno “straneo”.  Girando

per l’Italia conobbi due professori a Pisa, Donato Busnelli a giurisprudenza e Giuliano

Marini a Scienze politiche, m’incoraggiarono a presentar domanda di “incarico” a

Scienze politiche nella materia “Scienze della Politica”.  Mi raccomandarono di far

mandare una lettera a Bobbio.  Questi mi disse che non sarebbe servita a nulla, ma la

invio. Nel dicembre del 1977, quando ero agli estremi economici, mi arrivo la notizia

che avevo l’incarico di Scienze della Politica alla Facoltà omonima dell’Università di

Pisa.  Non ho mai visto la lettera di Bobbio ma evidentemente era stata convincente. 

Con quale gioia andai alla città toscana per prendere posto!  Tutti furono molto gentili e

cominciai a far lezioni ufficialmente in lingua italiana, che allora parlavo con

scioltezza.  Avevo otto studenti con i quali facevano seminari permanenti. Il disappunto

arrivo il 27 gennaio quando fui per ritirare lo stipendio e m’informarono che ci volevano

al meno un anno e mezzo per finire tutte le procedure per aver i soldi.  La mia domanda

fu “ma come vivo fino allora?” L’impiegato mi fece notare che lui solo si occupava di

problemi amministrativi e che dovevo rivolgermi ai miei colleghi.  Cosi feci, andai da

Busnelli che era anche direttore della Scuola Normale Superiore di Pisa e li esposi il

caso.  Ci riflettette, parlo con Marini, e mi disse “se trovi una materia che nessun

professore pisano è in grado d’insegnare ti posso dare vitto e alloggio alla Scuola 

Normale Superiore. Pensai e ricordai i mie studi di Wittgenstein con Gioja in Argentina

e proposi insegnare “filosofia analitica” alla Scuola Normale Superiore e per quasi due

anni ebbi vitto e alloggio ma nemmeno un centesimo per prendere un caffè, comprare

sigarette o viaggiare in autobus.  Mio fratello trovo il modo di farmi avere alcuni

quartini per queste spese spicciole.

            Contemporaneamente mi ero presentato in un concorso di “proffesseur associée

alla facoltà di Giurisprudenza di Haute Normadie (Rouen) in Francia.  Vinse il concorso

e per un anno insegnai “filosofia del diritto” a Rouen lunedì en martedì in francese,

mercoledì, giovedì e venerdì scienze politiche a Pisa, in italiano e andavo su e giù in

treno fino a Paraggi (Gare de Lion) e poi da Parigi a Rouen (gare San Lazare)

viaggiando nell’autobus venti per fare un percorso per la “citté lumiere”.  In Francia

molto mi aiutò un professore di filosofia del diritto Michel Troper.  Ma non c’e la

facevo a sostenere quel ritmo indemoniato non ostante i mie giovani quaranta anni.

Dovevo scegliere e scelsi Pisa.

            Poi ho vinto il concorso di professore associato nella materia “Scienza della

Politica” a Pisa e ho insegnato tale disciplina dal 1976 fino al 2007 nel quale sono

andato in pensione per aver raggiunto i settanta anni di età.

            Ho avuto molte soddisfazioni come professore perché mi piace insegnare e ho

sempre la fortuna di avere allievi attenti e interessati che poi fanno carriera e vengono a

trovarmi.  Potrei nominare tanti ma uno, col quale conservo ancora rapporti di amicizia,

esaudì i mie più alte aspettative come allievo.  E’ stato ed è veramente grande: Luca

Rossi.

            Studiavo permanentemente e sono diventato uno dei primi studiosi di logica

delle norme grazie a Geor Henrik von Wright che molto mi aiutò e m’inviava i suoi

illuminanti lavori. Grazie a Lui e a Carlos Alchourron abbiamo pubblicato dei libri che

convinsero i dirigenti del Consiglio Nazionale delle Ricerche da affidarmi la Direzione

dell’Istituto per la Documentazione Giuridica di Firenze (oggi ITTIG, dal 1983 al 1993.

Da questo importante Istituto e con la collaborazione di una trentina di valenti

ricercatori riuscimmo a sviluppare una parte importante dell’inizio dell’informatica

giuridica in Italia.

            In questo Istituto ho avuto molti collaboratori brillanti ma mi basta enunciare

uno: Giovanni Sartor divenuto uno dei migliori professori e ricercatori d’informatica

giuridica, il caso classico dello studente che supera il maestro.

            Nell’Istituto di Firenze abbiamo organizzato 4 convegni internazionali “Logica,

informatica, Diritto”, nel 1981, 1985, 1989, 1993, con la partecipazione dei più grandi

studiosi di tutto il mondo sempre sotto la guida di von Wright  e si possono vedere nei

volumi della North Holland, Deontic Logic, Computational Linguistics and Legal

Information Systems. Volume IIº 1982, Automated Analysis of Legal Texts. Logic,

Informatics, Law., 1986,    Expert System in Law, 1992, Model and Legal Evidence,

1998.

            Tornato in Argentina, ho insegnato Scienza della Legislazione come Master post

graduate nell’Università del Salvador dove ora sono professore emerito e Informatica

Giuridica all’Università di Lanus dove ancora continuo a insegnare.

            Ho costituito un Istituto di Studi e formazione su Governo e Società

all’Università del Salvador, dove diversi dei miei maestri mi hanno accompagnato in

cariche professionali e di gestione.  Quale illustrazione accludo la lettera che inviai a

Norberto Bobbio nel 2001.

                Sono stato molto fortunato per aver avuto grandi maestri, ma anche loro mi

dicevano fortunato per aver avuto l’esperienza di otto anni d’insegnamento alle scuole

elementare.  Puer docet!
	</p>
</div>

<div id="div5" class="toggleDiv text-center" style="display:none;">
	<h3>Articulos</h3>


</div>

	<div class="col-md-12">
	                    <ul class="social-network social-circle">
	                        <li><a href="https://www.facebook.com/aamartino?fref=ts" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
	                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
	                        <li><a href="https://plus.google.com/104254002109212808851" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
	                        <li><a href="https://ar.linkedin.com/in/antonio-anselmo-martino-8940173b" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
	                    </ul>
					</div>
<script>
$(function(){

   $('.toggleButton').click(function(){

         var target = $('#' + $(this).attr('data-target'));
         $('.toggleDiv').not(target).hide();
         target.show();
   });
});
</script>
</body>
</html>
