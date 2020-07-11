<?php
session_start();
$username = "";
$email = "";
$password_2 = "";
$password_1 = "";
$error = array();
$db = mysqli_connect('localhost', 'root', '', 'practice') or die("dont connect");
if (isset($_POST['reg_user'])) {
    if (!isset($_POST['username'])) {
        $username = "";
    } else {
        $username =  mysqli_real_escape_string($db, $_POST['username']);
    }
    if (!isset($_POST['email'])) {
        $email = "";
    } else {
        $email =  mysqli_real_escape_string($db, $_POST['email']);
    }
    if (!isset($_POST['password_1'])) {
        $password_1 = "";
    } else {
        $password_1 =  mysqli_real_escape_string($db, $_POST['password_1']);
    }
    if (!isset($_POST['password_2'])) {
        $password_2 = "";
    } else {
        $password_2 =  mysqli_real_escape_string($db, $_POST['password_2']);
    }
    if ($password_1 != $password_2) {
        array_push($error, "password must be same");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "email must be valid");
    }
    $user_check_query = "SELECT * FROM user where username='$username' or email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        if ($user['username'] === $username) {
            array_push($error, "username alrealy exit");
        }
        if ($user['email'] === $email) {
            array_push($error, "email alrealy exit");
        }
    }
    if (count($error) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO user (username,email,pass) VALUES ('$username','$email','$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = 'you are logged in';
        header('location:index.php');
    }
}
$error_1 = array();
if (isset($_POST['login_user'])) {
    $error_1 = array();
    if (!isset($_POST['lo_username'])) {
        $username = "";
    } else {
        $username =  mysqli_real_escape_string($db, $_POST['lo_username']);
    }
    if (!isset($_POST['lo_password'])) {
        $password = "";
    } else {
        $password =  mysqli_real_escape_string($db, $_POST['lo_password']);
    }
    if (empty($username)) {
        array_push($error_1, 'username must be provide');
    }
    if (empty($password)) {
        array_push($error_1, 'password must be provide');
    }
    if (count($error_1) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND pass='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = 'logged in succesfully';
            header('location:index.php');
        } else {
            array_push($error_1, 'wrong username and password');
        }
    }
}
