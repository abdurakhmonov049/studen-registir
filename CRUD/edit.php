<?php

require('../dbconnect.php');
$id = $_GET['updateid'];

$sql = "SELECT * FROM tb_students WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$user = $row['Username'];
$email = $row['email'];
$num = $row['num'];
$age = $row['age'];



if (isset($_POST['submit'])) {
    //getting the post values
    $user = $_POST['user'];
    $email = $_POST['email'];
    $num = $_POST['number'];
    $age = $_POST['age'];
    

    $sql = "UPDATE tb_students SET id = $id,Username = '$user',email = '$email',num = '$num',age = '$age' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location:../login.php');
    } else {
        echo "Mistake";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <?php require('../bootstrap/conn.php'); ?>
</head>

<body>
    <h1 class="mt-3">New Students Edit</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="input-group mb-2 mt-5 w-25 ml-5">

            <input type="text" class="form-control" placeholder="Username" name="user" value="<?= $user; ?>"
                autocomplete="off">

        </div>

        <div class="input-group mb-2 mt-3 w-25 ml-5">

            <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $email ?>"
                autocomplete="off">

        </div>

        <div class="input-group mb-2 mt-3 w-25 ml-5">

            <input type="number" class="form-control" placeholder="PhoneNumber" name="number" value="<?= $num; ?>"
                autocomplete="off">

        </div>

        <div class="input-group mb-2 mt-3 w-25 ml-5">

            <input type="text" class="form-control" placeholder="Your age" name="age" value="<?= $age; ?>"
                autocomplete="off">

        </div>
 
        <button type="submit" name="submit" class="btn btn-primary mb-2 mt-3 w-25 ml-5"> Update </button>
    </form>
</body>

</html>