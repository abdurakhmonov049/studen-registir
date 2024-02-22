<?php
session_start();

include('dbconnect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>
    body {
        background-color: grey;
    }

    .form {

        border: 1px dashed black;
        background-color: blue;
    }

    h2 {
        text-align: center;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        display: grid;
    }
</style>

<body>
    <div class="form">
        <h2>Form</h2>

        <form action="home.php" method="POST">
            <input type="text" placeholder="Username" name="uname">
            <br>

            <input type="password" placeholder="Password" name="pass">
            <br>
            <input type="submit" name="login">
        </form>
        <?php

        if (isset($_POST['login'])) {
            $user = $_POST['uname'];
            $psw = $_POST['pass'];
            $select = mysqli_query($conn, "SELECT * FROM tb_pupil WHERE username = '$user' AND pass = '$psw'");
            $total = mysqli_num_rows($select);
            if ($total != 0) {
                $_SESSION['username'] = $user;
                $_SESSION['pass'] = $psw;
            } else {
                echo "<script> alert('username or password invalid'); </script>";
            }

        }
        if (isset($_SESSION['username'])) {
            header('Location:login.php');
        }

        ?>



    </div>
</body>

</html>