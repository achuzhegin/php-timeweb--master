<?php
session_start();
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// echo "https://$host$uri/index.php";
if (isset($_POST['login']) && trim($_POST['login']) !== '') {
  $_SESSION['login'] = trim($_POST['login']);
}
header("Location: http://$host$uri/index.php");
exit;
// echo "<pre>";
// var_dump($_SESSION);
// var_dump(trim($_SESSION["login"]));
// echo "</pre>";
