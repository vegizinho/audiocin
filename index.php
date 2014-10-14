<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
  
	 <div class="topmenu">

	  		<div class="col-md-3">LOGO</div>
	  		<div class="col-md-3 pullRight">TRGOVINE | O NAMA | SERVISI</div>
	  		<div class="col-md-3 pullLeft">STORES | ABOUT US | SERVICES</div>
	  		<div class="col-md-3">TRAZILICA</div>

  	</div>

	<div id="carousel-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-generic" data-slide-to="2"></li>
	  </ol>
	
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <a href="link1"><img src="images/slides/slide1920.jpg" alt="Alt text"></a>
	    </div>
	
	    <div class="item">
	      <a href="link2"><img src="images/slides/slide1920.jpg" alt="Alt text"></a>
	    </div>
	
	    <div class="item">
	      <a href="link3"><img src="images/slides/slide1920.jpg" alt="Alt text"></a>
	    </div>
	  </div>
	
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-generic" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row moveDown">
        <div class="col-md-6">
          <a href="#link1"><img class="img-responsive" src="images/1-4 AV.jpg" alt="Audiocinema-art"></a>
        </div>
        <div class="col-md-6">
          <a href="#link1"><img class="img-responsive" src="images/2-4 HE.jpg" alt="Audiocinema-art"></a>
        </div>
        </div>
       <div class="row">
        <div class="col-md-6">
          <a href="#link1"><img class="img-responsive" src="images/3-4 MG.jpg" alt="Audiocinema-art"></a>
        </div>
        <div class="col-md-6">
          <a href="#link1"><img class="img-responsive" src="images/4-4 C.jpg" alt="Audiocinema-art"></a>
        </div>
      </div>

      <div class="row subcontent"></div>

    </div>
    
          
      <div class="overfooter">
      	<h2>Ovo je zavrsna aplikacija po cijeloj sirini, da se izjednaci s karuselom</h2>
      	<p>Ovdje mozemo staviti nesto teksta, facebook like box, twitter box, prijavu na newsletter i slican sadrzaj, kao i pregled glavnih 
      	linkova nekim manjim sitnijim fontom.</p>
      </div>

      <!-- FOOTER -->
      <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.2.0-dist/assets/js/docs.min.js"></script>
  </body>
</html>
