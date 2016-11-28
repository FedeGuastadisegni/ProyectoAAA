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
        <h3 class="panel-title text-center">Storia Docente</h3>
    </div>
    <div class="panel-body text-center">
      <!--Contenido del CV -->
      <p>
Sono nato a Buenos Aires nel agosto del 1937.  Ho fatto qui l’elementare (7
anni) e le medie-secondarie (5 anni). Ho studiato magistero alla Scuola Normale di
Buenos Aires frequentata da straordinari professori: i migliori in matematica, storia,
latino, scienze.  A diciotto anni ho preso il titolo di maestro normale nazionale e a
diciannove anni incominciai, da supplente, a lavorare come maestro di scuola
elementare nel 5ª anno di una scuola di Flores (un quartiere di Buenos Aires ).  Come
sarà stata la mia esperienza che dopo cinquanta anni, si sono presentati a casa mia due
ex studenti di quel corso con i quali conservo ancora rapporti: uno vive in Brasile ed è
ingeniere, l’altro a Buenos Aires ed è funzionario del fisco.  Mentre lavoravo come
maestro di scuola elementare ho studiato giurisprudenza laureandomi nel 1962, vedi il
mio curriculum in .  Vinse nel 1957 il concorso di maestro titolare e continuai a
lavorare come tale fino al 1964, esercitando allora anche la professione di avvocato. Nel
1961 ebbi un’esperienza straordinaria: sostenendo l’esame di filosofia del diritto alla
Facoltà di Giurisprudenza dell’Università di Buenos Aires, il titolare – Prof. Ambrosio
Luca Gioja – mi chiese, dopo avermi dato il voto di trenta e lode, se volevo entrare a far
parte dell’Istituto di filosofia del diritto da lui diretto.  Le feci notare che stavo per
prendere la laurea ma che ero di famiglia modesta – un immigrante lucano, sarto e
un’argentina figlia di calabresi, donna di casa - e per vivere lavoravo da maestro
elementare.  Lui mi fece questo ragionamento: “Lei è capace, farà una buona carriera
come avvocato, e quando avrà cinquanta anni, verrà da me per entrare nell’Istituto,
perché non accorciare questi venticinque anni? Mi convinse e cominciai a lavorare
come assistente ad honorem.  Piano piano fece il cursus honorum nell’istituto (oggi
famoso e porta il nome di Ambrosio L. Gioja) e nel 1968 vinse il concorso di professore
associato nella materia “introduzione al diritto”.  Lavoravo come avvocato e studiavo
nell’Istituto con grandi colleghi tra i quali Carlos Alchourron e Eugenio Bulygin e
ovviamente facevo lezioni di introduzione al diritto.  Nel 1969 un altro colpo di scena:
mi offrono la cattedra di filosofia del diritto nella recente creata università di Belgrano,
sempre a Buenos Aires.  Non mi credevo all’altezza della situazione e quindi sono
andato a chiedere consiglio al mio maestro Gioja.  Lui sosteneva che ero in grado, ma io
le feci notare che sfortunatamente il più capace per giudicare ero io e non me la sentivo.
Allora lui disse “prenda la cattedra e tutti i sabati mattina viene a casa mia e io la guido
per portarla avanti”.
Ovviamente con tutti gli onori e senza oneri accettai e per un anno andai a casa
sua tutti i sabati. Arrivavo, ci mettevamo per terra a studiar Wittgenstein, e mai mi
permise toccare l’argomento della cattedra di filosofia del diritto all’Università di
Belgrano.  Mi son dovuto arrangiare da solo.
        Nel 1971 vinse una borsa di studio all’ambasciata italiana a Buenos
Aires, per andare un anno a studiare in Italia.  Mio maestro Gioja conosceva molto bene
i professori di filosofia del diritto italiani perche viaggiava spesso.  Mi disse “scriverò a
Torino a Norberto Bobbio”, questi accettò e nell’ottobre del 1972, arrivai a Torino e mi
presentai al grande filosofo italiano. Subito mi fece notare che il mio italiano era
scandente e che dovevo raggiungere la perfezione in tre mesi. Studiai la grammatica y
durante le notti lessi la maggior parte dei romanzieri del novecento.
 Avendo un buon udito da cantante lirico cercavo di seguire tutte le inflessioni
dell’italiano che a quel tempo erano molte in quella città,  dal locale torinese al lucano
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
Uberto Scarpelli  mi trattò con la stessa cura che al suo assistente Mario Jori.   A punto
tale di darmi una delle commissioni del mattino per fare lezioni.  Così trascorsi un anno
sostenendo lezioni ed esami tra Bobbio e Scarpelli ed imparando di tutti e due.
        Il mio rapporto con gli studenti torinesi fu molto fluido, loro m’invitavano alle
“piole” (luoghi di ristoro tipicamente piemontese) e arrivarono a sottopormi i loro
problemi di vita come una coppietta formata da un piemontese e una campana.  Mi
chiesero di intervenire presso i suoi padri e mi addentrai nelle terre feraci
dell’Astigiano. Lì, il padre piemontese mi fece notare che non aveva modo di presentare
a sua famiglia una pretendente campana. Ragionammo lungo tempo e finalmente la
coppia di studenti si sposo chiedendomi di fare da testimone.
        Nel lungo soggiorno italiano (ottobre 1972 – dicembre 1973) poté maturare la
tesi dottorale “Definicion y Ley” che presentai non appena tornato.
Contemporaneamente e con l’aiuto di Bobbio e Scarpelli scrissi il mio primo libro in
italiano “Le definizioni legislative”,  pubblicato da Giappichelli, Torino 1975.   Il
dottorato cum laude lo ottenni nel 1974 grazie all’intervento di un grande maestro
Roberto Vernengo che spiegò agl’altri membri della commissione che l’uso di segni
logici nella mia tesi erano d’obbligo e significativi.
Ripresi l’insegnamento accademico e fui nominato preside della Facoltà di
Giurisprudenza dell’Università Cattolica della città di La Plata (capitale della Provincia
di Buenos Aires). Erano anni bui con la guerriglia che insediava tutte le azioni del
paese.  Cercarono di occupare la Facoltà, dove ero preside e dovette resistere.  Erano
anche tempi duri perché appena divorziato non avevo macchina e dovevo andare a La
Plata in autobus. Quando riuscivo a far allontanare gli occupanti, arrivato in strada
domandavo dove si prendeva l’autobus con una azione ingenua e quasi grottesca, ma
efficace: loro mi accompagnavano. Finalmente il Rettore dell’Università mi chiese di
far intervenire la polizia.  Io mi rifiutai e dovette rinunciare. I tempi bui venivano anche
da azione di terrorismo di stato. Un mio amico fu preso prigioniere dai militari quindi
decidemmo che qualcuno di noi doveva presentare un habeas corpus, con tutti i rischi
della repressione di Stato.  Divorziato, senza figli e vincitore di una seconda borsa per
tre mesi in Italia ero il candidato ideale. Presentai il ricorso, il mio amico comparve
(quindi non era più “desaparecido”) ma le cose si sono messe molto male per me:  la
associazione anticomunista argentina, la tripla “A” decidete di includermi nella lista
degli avvocati a uccidere e così comparve col nº 47 nei suoi nefandi manifesti.
        Decidete allora di utilizzare il viaggio della borsa di studio e il 16 gennaio 1976
viaggiai di nuovo verso Torino.  Bobbio mi accolse subito con la normale generosità ma
mi fece capire che non c’erano posti di lavoro per me in Italia.  Il 24 marzo verso sera
mi chiamo per domandarmi se avevo visto la televisione. Le dissi di no e lui “è
avvenuto un colpo di stato nel tuo paese”. Cominciava una dittatura terribile che portò
trenta mila “desaparecidos” e sarebbe durata fino al 1983, sette anni. Non potevo
tornare ma non avevo un soldo per vivere.  Bobbio mi organizzò dei viaggi in tutta
Europa raccomandandomi a suoi amici e collegi tra i quali il filosofo finlandese Georg
Henrik von Wright, creatore della logica delle norme col quale fece una grande amicizia
che durò fino alla sua morte molti anni dopo.
        Tornato in Italia, decise di presentarmi ai concorsi di “incaricati” che erano una
sorte di assistenti fuori ruolo che dovevano rinnovare ogni anno il loro incarico.  Bobbio
e Scarpelli cercarono di farmi capire che non c’era posto per uno “straneo”.  Girando
per l’Italia conobbi due professori a Pisa, Donato Busnelli a giurisprudenza e Giuliano
Marini a Scienze politiche, m’incoraggiarono a presentar domanda di “incarico” a
Scienze politiche nella materia “Scienze della Politica”.  Mi raccomandarono di far
mandare una lettera a Bobbio.  Questi mi disse che non sarebbe servita a nulla, ma la
invio. Nel dicembre del 1977, quando ero agli estremi economici, mi arrivo la notizia
che avevo l’incarico di Scienze della Politica alla Facoltà omonima dell’Università di
Pisa.  Non ho mai visto la lettera di Bobbio ma evidentemente era stata convincente.
Con quale gioia andai alla città toscana per prendere posto!  Tutti furono molto gentili e
cominciai a far lezioni ufficialmente in lingua italiana, che allora parlavo con
scioltezza.  Avevo otto studenti con i quali facevano seminari permanenti. Il disappunto
arrivo il 27 gennaio quando fui per ritirare lo stipendio e m’informarono che ci volevano
al meno un anno e mezzo per finire tutte le procedure per aver i soldi.  La mia domanda
fu “ma come vivo fino allora?” L’impiegato mi fece notare che lui solo si occupava di
problemi amministrativi e che dovevo rivolgermi ai miei colleghi.  Cosi feci, andai da
Busnelli che era anche direttore della Scuola Normale Superiore di Pisa e li esposi il
caso.  Ci riflettette, parlo con Marini, e mi disse “se trovi una materia che nessun
professore pisano è in grado d’insegnare ti posso dare vitto e alloggio alla Scuola
Normale Superiore. Pensai e ricordai i mie studi di Wittgenstein con Gioja in Argentina
e proposi insegnare “filosofia analitica” alla Scuola Normale Superiore e per quasi due
anni ebbi vitto e alloggio ma nemmeno un centesimo per prendere un caffè, comprare
sigarette o viaggiare in autobus.  Mio fratello trovo il modo di farmi avere alcuni
quartini per queste spese spicciole.
        Contemporaneamente mi ero presentato in un concorso di “proffesseur associée
alla facoltà di Giurisprudenza di Haute Normadie (Rouen) in Francia.  Vinse il concorso
e per un anno insegnai “filosofia del diritto” a Rouen lunedì en martedì in francese,
mercoledì, giovedì e venerdì scienze politiche a Pisa, in italiano e andavo su e giù in
treno fino a Paraggi (Gare de Lion) e poi da Parigi a Rouen (gare San Lazare)
viaggiando nell’autobus venti per fare un percorso per la “citté lumiere”.  In Francia
molto mi aiutò un professore di filosofia del diritto Michel Troper.  Ma non c’e la
facevo a sostenere quel ritmo indemoniato non ostante i mie giovani quaranta anni.
Dovevo scegliere e scelsi Pisa.
        Poi ho vinto il concorso di professore associato nella materia “Scienza della
Politica” a Pisa e ho insegnato tale disciplina dal 1976 fino al 2007 nel quale sono
andato in pensione per aver raggiunto i settanta anni di età.
        Ho avuto molte soddisfazioni come professore perché mi piace insegnare e ho
sempre la fortuna di avere allievi attenti e interessati che poi fanno carriera e vengono a
trovarmi.  Potrei nominare tanti ma uno, col quale conservo ancora rapporti di amicizia,
esaudì i mie più alte aspettative come allievo.  E’ stato ed è veramente grande: Luca
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
studiosi di tutto il mondo sempre sotto la guida di von Wright  e si possono vedere nei
volumi della North Holland, Deontic Logic, Computational Linguistics and Legal
Information Systems. Volume IIº 1982, Automated Analysis of Legal Texts. Logic,
Informatics, Law., 1986,    Expert System in Law, 1992, Model and Legal Evidence,
1998.
        Tornato in Argentina, ho insegnato Scienza della Legislazione come Master post
graduate nell’Università del Salvador dove ora sono professore emerito e Informatica
Giuridica all’Università di Lanus dove ancora continuo a insegnare.
        Ho costituito un Istituto di Studi e formazione su Governo e Società
all’Università del Salvador, dove diversi dei miei maestri mi hanno accompagnato in
cariche professionali e di gestione.  Quale illustrazione accludo la lettera che inviai a
Norberto Bobbio nel 2001.
            Sono stato molto fortunato per aver avuto grandi maestri, ma anche loro mi
dicevano fortunato per aver avuto l’esperienza di otto anni d’insegnamento alle scuole
elementare.  Puer docet!
</p>
    </div>
  </div>

</body>
</html>
