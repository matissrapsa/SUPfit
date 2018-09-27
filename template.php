<?php

function getHeader(){
    echo '
            <?php header(\'Content-type: text/plain; charset=utf-8\');
             mb_internal_encoding("UTF-8");?>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <link href="./css/main.css" rel="stylesheet" media="screen">
            <link rel="icon" href="./img/fav.jpg" sizes="192x192" />

	';
}

function getMenu(){
    echo '
     <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index"><img src="img/LOGO_Top.png" alt="LOGO"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="Blogs">Blogs</a></li>
                            <li><a href="Veikals">Veikals</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Noma<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Noma-Riga">Rīga</a></li>
                                    <li><a href="Noma-Ikskile">Ikšķile</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SUP<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="SUP-fitness">SUP fitness</a></li>
                                    <li><a href="SUP-braucieni">SUP braucieni</a></li>
                                    <li><a href="SUP-grupam">SUP grupām</a></li>
                                    <li><a href="SUP-skola">SUP skola</a></li>
                                </ul>
                            </li>
                            <li><a href="https://www.supfests.lv/">SUP fests</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="Grozs"><span class="glyphicon glyphicon-shopping-cart"> 0.00</span></a></li>
                            <li><a href="Pieslegties"><span class="glyphicon glyphicon-log-in"></span> Pieslegties</a></li>
                            
                            <?php   
                            
                            
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    	';
}

function getFoot() {
    echo '
<div class="container-fluid footer">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="con">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_top">
                            <h3>Mūs var atrast</h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_botom">
                        <p><strong><a href="https://goo.gl/maps/xG5rVTzWgkx" class="black">Adrese</a></strong> <br> Andrejsala, Andrejostas iela 5, K–7, Rīga, LV-1001, Latvija </p>
                        <p><strong><a href="Kontakti" class="black">Kontakti</a></strong> <br><a href="mailto:info@supfit.lv" class="black">info@supfit.lv</a> <br>
                        <a href="tel:0037129618236" class="black">+371 29618236</a> </p>
                        <p><strong>Darba laiks</strong><br>Katru dienu no 12:00 – 19:00 vai <br>pēdējam klientam.</p>
                        <p><strong><a href="Veikala-lietosanas-noteikumi" class="black">Veikala lietošanas noteikumi</a></strong></p>
                    </div>
                </div>
            </div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="con">
			    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_top">
                            <h3>Mēs strādājam ar:</h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_botom">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       		<img src="./img/Onewheel_LOGO.png" alt="ONEWHEEL">
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       		<img src="./img/RedPaddleCo_LOGO.png" alt="RED PADDLE CO">
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       		<img src="./img/FUSION_LOGO.png" alt="FUSION">
                       </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="col-xs-12 col-sm- 12 col-md-4 col-lg-4">
			<div class="con">
			    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_top">
                         <ul class="list-unstyled list-inline text-center">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/supfit.lv/">
                                    <i class="fab fa-facebook fa-4x text-danger"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-tw mx-1" href="https://twitter.com/@RedPaddleCoLV/">
                                    <i class="fab fa-twitter fa-4x text-danger"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-ig mx-1" href="https://www.instagram.com/supfit.lv/">
                                    <i class="fab fa-instagram fa-4x text-danger"> </i>
                                </a>
                            </li>
                       </ul>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_top">
                            <h3>Jaunākās ziņas</h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text_botom">
                       
                       
                       
                    </div>
                </div>   
        </div>
		</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				 <div class="footer-copyright text-center py-3">© 2018 Copyright:
              <a href="https://supfit.lv/" class="black"> @SUPFIT</a>
			</div>
		</div>
</div>
    ';
}

function getEnd() {
if (isset($_SESSION['id'])){
    echo "yeeeeeeeeeessssssss";
}

    echo '
        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    ';
}

function getLoginHead() {
    echo '
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    ';
}

function shopItem() {
    echo '
     
     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 shopItem">
     	<img src="img/titan-pump-1.jpg" alt="Item">
     	<h3 align="center">Titan Pumpis</h3>
     </div>
     
    ';
}