<?php
session_start();
if (isset($_SESSION["login"])) {
  $_SESSION["login"] = "";
}
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/index.php");
exit;