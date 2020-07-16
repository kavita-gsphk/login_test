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
    <form action="login.php" method="POST">
        <?php include('error_1.php') ?>
        <label for="username">Username Or Email</label>
        <input type="text" name="lo_username" required>
        <label for="password">Password</label>
        <input type="password" name="lo_password" required>
        <button type="submit" name="login_user">submit</button>
        <label>
            <p>Yet not registered <a href="resitartion.php">
                    <b style="color: brown;">Register Here</b>
                </a></p>
        </label>

    </form>
</body>

</html>