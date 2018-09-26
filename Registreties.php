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
                <form method="post" action="Registreties.php" role="login" autocomplete="on" >
                    <img src="img/LOGO_Top.png" class="img-responsive" alt="LOGO" />

                    <input type="text" name="fname" placeholder="Vārds" required  class="form-control input-lg" />

                    <input type="text" name="lname" placeholder="Uzvārds" required class="form-control input-lg" />

<!--                    <input type="date" name="bday" placeholder="Dzimšanas dienas datums" required class="form-control input-lg" />-->

                    <input type="tel" name="tel" placeholder="Telefona nummurs" required class="form-control input-lg" />

                    <input type="email" name="email" placeholder="Epasts" required class="form-control input-lg" />

                    <input type="password"  title="Parolei ir sevī jāiekļauj vismaz 6 simboli, vismaz viens LIELAIS un mazais burts un cipars." name="pwd1" placeholder="Parole" class="form-control input-lg" id="pwd1" required=""
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange=" this.setCustomValidity(this.validity.patternMismatch ? this.title : '');if(this.checkValidity()) form.pwd2.pattern = RegExp.escape(this.value);" />

                    <input type="password" title="Lūdzu ievadi to pašu paroli, kas ir augstāk." name="pwd2" placeholder="Atkārto paroli" class="form-control input-lg" id="pwd2" required=""
                           onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" />

                    <label>
                        <input type="checkbox" name="accept" required class="" style="margin-bottom:15px"> Piekrītu <a
                                href="Veikala-lietosanas-noteikumi"> Veikala lietošanas noteikumime</a>
                    </label>

                    <button type="submit" name="register" class="btn btn-lg btn-primary btn-block">Reģistrēties</button>

                </form>
            </section>
        </div>
    </div>
</div>

<?php getFoot(); ?>



<script type="text/javascript">

    // polyfill for RegExp.escape
    if(!RegExp.escape) {
        RegExp.escape = function(s) {
            return String(s).replace(/[\\^$*+?.()|[\]{}]/g, '\\$&');
        };
    }

</script>

<?php
$connection = new mysqli($server, $serverUsername, $serverPassword);

if ($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
}

    mysqli_select_db($connection, 'sup');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pwd1 = $_POST['pwd1'];

    $sql = "INSERT INTO users (vards,uzvards,tel,email,pwd1) VALUES ('$fname','$lname','$tel','$email','$pwd1')";

if (!mysqli_query($connection,$sql))
{
    echo 'not inserted';
}

else{
}



?>

<?php
if(isset($_POST['register'])){
    echo "Lietotāja Vārds: <b>{$_POST['fname']}</b><br/>";
    echo "Lietotāja Uzvārds: <b>{$_POST['lname']}</b><br>";
    echo "Lietotāja Telefona nummurs: <b>{$_POST['tel']}</b><br>";
    echo "Lietotāja Epasts: <b>{$_POST['email']}</b><br/>";
    echo "Lietotāja Parole: <b>{$_POST['pwd1']}</b>";
}
?>

<?php getEnd(); ?>
</body>
</html>