<?php
require('../dbconnect.php');
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM tb_students WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: ../login.php');
    } else {
        echo "Mistake";
    }
}


?>