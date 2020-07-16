<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Headstart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="images/favicon3.png">

    <!-- Bootstrap CSS File -->

    <!-- Main Stylesheet File -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php include('nav.php') ?>
    <form action="resitartion.php" method="POST" class="form">
        <?php include('error.php') ?>
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <label for="email">email</label>
        <input type="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" name="password_1" required>
        <label for="password_1">Confirm password</label>
        <input type="password" name="password_2" required>
        <button type="submit" name="reg_user">submit</button>
        </br>
        <label>
            <p>Already a user <a href="login.php"><b style="color: brown;">Login Here</b></a></p>
        </label>
    </form>
</body>

</html>