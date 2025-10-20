<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
</head>
<?php
session_start();
if (isset($_SESSION["login"]) && trim($_SESSION["login"]) !== "") {
  echo "<div class= 'exit'>";
  echo "<p>Добрый день " . $_SESSION["login"] . "</p>";
  echo "<a href='http://localhost:8000/web/exit.php'>Выйти</a>";
  echo "</div>";
} else {
  include("web/authForm.html");
}
// echo "<pre>";
// var_dump($_SESSION);
// var_dump(trim($_SESSION["login"]));
// echo ("</pre>");
