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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="images/logo.jpg">
    <title>Online-test</title>
</head>

<body>
    <div class="head_1">
        <header>
            <img src="images/logo.jpg" alt="logo" class="logo">
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