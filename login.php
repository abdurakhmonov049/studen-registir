<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require('bootstrap/conn.php'); ?>
</head>

<body>
    <h2> Welcome your name:
        <?= $_SESSION['username']; ?>
    </h2>
    <p><a href="logout.php">logout</a></p>

    <div class="container my-5">
        <h2>List of clients</h2>
        <a class="btn btn-primary" href="add.php" role="button">Add Students</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Age</th>
                    
                    <!-- <th>Created At</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include('dbconnect.php');

                $sql = "SELECT * FROM tb_students";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query . " . $conn->error);
                }
                while ($row = $result->fetch_assoc()) {

                    ?>

                    <tr>
                        <td>
                            <?= $row['id']; ?>
                        </td>
                        <td>
                            <?= $row['Username']; ?>
                        </td>
                        <td>
                            <?= $row['email']; ?>
                        </td>
                        <td>
                            <?= $row['num']; ?>
                        </td>
                        <td>
                            <?= $row['age']; ?>
                        </td>

                        <td>
                            <a class="btn btn-primary btn-sm" href="CRUD/edit.php?updateid=<?= $row['id']; ?>">Update</a>
                            <a class="btn btn-danger btn-sm" href="CRUD/delete.php?deleteid=<?= $row['id']; ?>">Delete</a>
                        </td>
                    </tr>

                <?php } ?>


            </tbody>
        </table>

    </div>






</body>

</html>