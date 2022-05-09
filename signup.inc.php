<?php
session_start();
include "db_connect.php";
include "functions.inc.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];

if (usedemail($conn, $email) !== false) {
    header("Location: signup.php?error=Email already registered");
    exit();
}

if (matchpwd($password, $passwordConf) !== false) {
    header("Location: signup.php?error=Passwords don't match");
    exit();
}

if (pwdlen($password) !== false) {
    header("Location: signup.php?error=Password must be longer than 8 characters");
    exit();
}

signup($conn, $fname, $lname, $uname, $email, $password);
