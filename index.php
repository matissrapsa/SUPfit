<?php
include('main.php');
include('template.php');
?>
<!DOCTYPE html>
<html lang="lv">
	<head>
		<title>SUP dēļi | Onewheel+ | Veikals un noma | SUP dēļu aksesuāri</title>
		<meta charset="UTF-8">
		<meta name="description" content="">
        <?php getHeader(); ?>
	</head>
	<body>
        <?php getMenu(); ?>

            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
<!--                                <li data-target="#myCarousel" data-slide-to="2"></li>-->
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="./img/Onewheel_1140x500.jpg" alt="Onewheel" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="./img/Ban_1140x500.png" alt="Kredīts" style="width:100%;">
                                </div>

<!--                                <div class="item">-->
<!--                                    <img src="red.jpg" alt="Red" style="width:100%;">-->
<!--                                </div>-->
                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                	</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                    	<h1><strong>Veikals</strong></h1>
                    </div>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                    <?php shopItem(); ?>
                </div>
            </div>

        <?php getFoot(); ?>
        <?php getEnd(); ?>
	</body>
</html>