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
    <?php getLoginHead(); ?>
</head>
<body>
<?php getMenu(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="container-login" style="background-image: url('./img/wallpaper.jpg');">
            <section class="login-form">
                <form method="post" action="php/login.php" role="login" autocomplete="on">
                    <img src="./img/LOGO_Top.png" class="img-responsive" alt="LOGO" />

                    <input type="email" name="email" placeholder="Epasts" required class="form-control input-lg"  />

                    <input type="password" name="pwd1" placeholder="Parole" class="form-control input-lg" id="password" required=""
                           title="Parolei ir sevī jāiekļauj vismaz 6 simboli, vismaz viens LIELAIS un mazais burts un cipars."  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" />

                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Pieslēgties</button>
                    <div>
                        <a href="Registreties">Izveidot kontu</a> vai <a href="#">aizmirsi paroli?</a>
                    </div>

                </form>
            </section>
        </div>
    </div>
</div>

<?php getFoot(); ?>

<?php
if (isset($_SESSION['id'])){
    echo "yeeeeeeeeeessssssss";
}
?>

<?php
//if(isset($_POST['go'])){
//    echo "Lietotāja Epasts: <b>{$_POST['email']}</b><br/>";
//    echo "Lietotāja Parole: <b>{$_POST['pwd1']}</b>";
//}
?>
<?php getEnd(); ?>
</body>
</html>