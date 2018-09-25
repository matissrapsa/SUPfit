<?php
include('main.php');
include('template.php');
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <title>Pirkumu grozs - SUPFIT</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <?php getHeader(); ?>
</head>
<body>
<?php getMenu(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1><strong>Pirkumu grozs</strong></h1>

            <br><br>

            <p>Jūsu grozs ir tukšs.</p>

            <br><br>

            <a href="./Veikals"><input type="store" value="Atgriezties uz veikalu" name="store" class="btn btn-lg btn-warning"/></a>
            <br><br><br>
		</div>
	</div>
</div>

<?php getFoot(); ?>
<?php getEnd(); ?>
</body>
</html>