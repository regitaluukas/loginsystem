<?php
session_start();
include "db_connect.php";
include "functions.inc.php";

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
		$stmt->execute([$email]);

		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();

			$user_id = $user['id'];
			$user_firstname = $user['firstname'];
			$user_lastname = $user['lastname'];
			$user_username = $user['username'];
			$user_email = $user['email'];            
			$user_password = $user['password'];

			if ($email === $user_email) {
				if (password_verify($password, $user_password)) {
					$_SESSION['user_id'] = $user_id;
					$_SESSION['user_firstname'] = $user_firstname;
					$_SESSION['user_lastname'] = $user_lastname;
					$_SESSION['user_username'] = $user_username;
					$_SESSION['user_email'] = $user_email;
					header("Location: welcome.php");

				}else {
					header("Location: index.php?error=Incorrect email or password");
					exit();
				}
			}else {
				header("Location: index.php?error=Incorrect email or password");
				exit();
			}
		}else {
			header("Location: index.php?error=Incorrect email or password");
			exit();
		}
