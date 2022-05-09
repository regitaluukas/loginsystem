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
<title>Sign up</title>
</head>

<body>
    <div id="box">
<form action="signup.inc.php" method="post">
    <h2>SIGN UP</h2>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert">
            <?=htmlspecialchars($_GET['error'])?>
        </div>
    <?php } ?>
    <div id="name">
    <input type="text" placeholder="First name" name="fname" required>
    <input type="text" placeholder="Last name" name="lname" required>
    </div>
    <input type="text" placeholder="Username" name="uname" required>
    <input type="email" placeholder="Email address" name="email" required>
    <input type="password" placeholder="Password" name="password" required>
    <input type="password" placeholder="Confirm Password" name="passwordConf" required>

    <button type="submit">Submit</button>
</form>
<a href="index.php">Login</a>
    </div>
</body>
</html>