<?php

if(isset($_POST['register'])){

    include_once 'db.php';

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $tel = mysqli_real_escape_string($connection, $_POST['tel']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pwd1 = mysqli_real_escape_string($connection, $_POST['pwd1']);

    if (empty($fname) || empty($lname) || empty($tel) || empty($email) || empty($pwd1)){
        header("Location: ../Registreties?registreties=empty");
        exit();
    } else {

        if (!preg_match("/^[a-zēūīāšģķļčņĒŪĪĀŠĢĶĻČŅA-Z]*$/", $fname) || !preg_match("/^[a-zēūīāšģķļčņĒŪĪĀŠĢĶĻČŅA-Z]*$/", $lname)){
            header("Location: ../Registreties?registreties=invalidname");
            exit();
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: ../Registreties?registreties=invalidemail");
                    exit();
                    } else {
                        $sql = "SELECT * FROM users WHERE email='$email'";
                        $result = mysqli_query($connection, $sql);
                        $resultchek = mysqli_num_rows($result);

                            if ($resultchek > 0) {
                                header("Location: ../Registreties?registreties=emailtaken");
                                exit();
                                } else {

                                    $hashedpwd = password_hash($pwd1, PASSWORD_DEFAULT);

                                    $sql = "INSERT INTO users (vards,uzvards,tel,email,pwd1) VALUES ('$fname', '$lname', '$tel', '$email', '$hashedpwd')";

                                    $result = mysqli_query($connection, $sql);

                                    header("Location: ../Registreties?register=success");
                                    exit();
                                 }
                       }
                }
         }


} else {
    header("Location: ../Registreties");
    exit();
}
