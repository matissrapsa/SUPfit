<?php

session_start();

if(isset($_POST['go'])){

    include_once 'db.php';

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pwd1 = mysqli_real_escape_string($connection, $_POST['pwd1']);

    if (empty($email) || empty($pwd1)){
        header("Location: ../Pieslegties?login=empty");
        exit();
       } else {

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $resultchek = mysqli_num_rows($result);

        if ($resultchek < 1) {
            header("Location: ../Pieslegties?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //dehash
                $hashedpwdchek = password_verify($pwd1, $row['pwd1']);
                if ($hashedpwdchek == false) {
                    header("Location: ../Pieslegties?login=error=pw");
                    exit();
                } elseif ($hashedpwdchek == true) {
                    //log in user
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['fname'] = $row['vards'];
                    $_SESSION['lname'] = $row['uzvards'];
                    $_SESSION['tel'] = $row['tel'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../Pieslegties?login=success");
                    exit();
                }
            }
        }






//            if (!preg_match("/^[a-zēūīāšģķļčņĒŪĪĀŠĢĶĻČŅA-Z]*$/", $fname) || !preg_match("/^[a-zēūīāšģķļčņĒŪĪĀŠĢĶĻČŅA-Z]*$/", $lname)){
//                header("Location: ../Pieslegties?login=invalidname");
//                exit();
//                } else {
//                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//                        header("Location: ../Pieslegties?login=invalidemail");
//                        exit();
//                    } else {
//                        $sql = "SELECT * FROM users WHERE email='$email'";
//                        $result = mysqli_query($connection, $sql);
//                        $resultchek = mysqli_num_rows($result);
//
//                        if ($resultchek > 0) {
//                            header("Location: ../Pieslegties?login=emailtaken");
//                            exit();
//                        } else {
//
//                            $hashedpwd = password_hash($pwd1, PASSWORD_DEFAULT);
//
//                            $sql = "INSERT INTO users (vards,uzvards,tel,email,pwd1) VALUES ('$fname', '$lname', '$tel', '$email', '$hashedpwd')";
//
//                            $result = mysqli_query($connection, $sql);
//
//                            header("Location: ../Pieslegties?login=success");
//                            exit();
//                        }
//                    }
//              }
            }


} else {
    header("Location: ../Pieslegties");
    exit();
}
