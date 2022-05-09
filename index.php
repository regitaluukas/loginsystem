<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap');
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="box">
<form action="login.inc.php" method="post">
    <h2>LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert">
            <?=htmlspecialchars($_GET['error'])?>
        </div>
    <?php } ?>
    <input type="text" placeholder="Email address" name="email" required>
    <input type="password" placeholder="Password" name="password" required>
    <button type="submit">Login</button>
</form>
<p>Don't have an account?</p>
<a href="signup.php">Sign up</a>
    </div>
</body>
</html>