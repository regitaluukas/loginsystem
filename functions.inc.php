<?php

function usedemail($conn, $email){
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]);
    return $stmt->rowCount() > 0;
};

function matchpwd($password, $passwordConf){
    return $password !== $passwordConf;
};

function pwdlen($password){
    return strlen($password) <= 8;

};

function signup($conn, $fname, $lname, $uname, $email, $password){
    $hashPwd = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)");
		$stmt->execute([$fname, $lname, $uname, $email, $hashPwd]);
    header("Location: signup.php?error=Account succesfully created!");
    exit();
};