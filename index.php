<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['img'] = 'you must log in';
    header('location:login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
?>
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
    <link href="style_1.css" rel="stylesheet">
</head>

<body>

    <div class="head_1">
        <header>
            <img src="images/favicon3.png" alt=" logo" class="logo">
            <nav>
                <ul class="nav_link">
                    <li><a>
                            <h3>Welcome <b style="color:brown"><?php print $_SESSION['username'] ?></b></h3>
                        </a></li>
                </ul>
            </nav>
            <a href="index.php?logout='1'"><button>LogOut</button></a>
        </header>
    </div>
    <div class="head_2">
        <header>
            <nav>
                <ul class="nav_link">
                    <li><a>
                            <h3>Welcome <b style="color:brown"><?php print $_SESSION['username'] ?></b></h3>
                        </a></li>
                </ul>
            </nav>
            <a href="index.php?logout='1'"><button>LogOut</button></a>
        </header>
    </div>
    <label><b style="color: brown;">
            <h1> Welcome to home page</h1>
        </b></label>
</body>

</html>