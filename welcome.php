<?php
session_start();
if (isset($_SESSION['user_id'])) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap');
h2 {
    font-size: 100px;
}
#box {
    box-shadow: none;
    width: 70%;
}
a {
    font-size: 24px;
}
h3 {
    font-size: 80px;
    margin-top: 0;
}
p {
    font-size: 32px;
}
</style>
<title>Welcome</title>
</head>
<body>
<div id="box">
<p id="clock"></p>
<h2>Welcome,</h2>
<?php
echo "<h3>" . $_SESSION['user_firstname'] . " " .  $_SESSION['user_lastname'] ."</h3>"
?>
<a href="logout.inc.php">Log out</a>
</div>
<script>
function clock() {
  let date = new Date(); 
  let hh = date.getHours();
  let mm = date.getMinutes();
  let ss = date.getSeconds();

   hh = (hh < 10) ? "0" + hh : hh;
   mm = (mm < 10) ? "0" + mm : mm;
   ss = (ss < 10) ? "0" + ss : ss;
    
  let time = date.toDateString() + " " + hh + ":" + mm + ":" + ss;
  document.getElementById("clock").innerText = time; 
  let t = setTimeout(function(){ clock() }, 1000); 
}
clock();
</script>
</body>
</html>

<?php }
else {
    header("Location: index.php");
}?>