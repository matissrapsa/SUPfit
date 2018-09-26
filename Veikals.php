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

                <form class="navbar-form navbar-left" action="action_page.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Meklēt" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

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