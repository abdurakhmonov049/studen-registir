<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New students</title>
    <?php require('bootstrap/conn.php'); ?>
</head>

<body>
    <h1 class="mt-3">New Students add</h1>
    <form action="insert.php" method="POST">
        <div class="input-group mb-2 mt-5 w-25 ml-5">

            <input type="text" class="form-control" placeholder="Username" name="user">

        </div>

        <div class="input-group mb-2 mt-3 w-25 ml-5">

            <input type="text" class="form-control" placeholder="Email" name="email">

        </div>

        <div class="input-group mb-2 mt-3 w-25 ml-5">

            <input type="number" class="form-control" placeholder="PhoneNumber" name="number">

        </div>

        <div class="input-group mb-2 mt-3 w-25 ml-5">

            <input type="text" class="form-control" placeholder="Your age" name="age">

        </div>

        <button type="submit" name="submit" class="btn btn-primary mb-2 mt-3 w-25 ml-5">
            Add student </button>
    </form>
</body>

</html>