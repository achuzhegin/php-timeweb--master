<?php
session_start();
if (isset($_SESSION["login"])) {
  $_SESSION["login"] = "";
}
header("Location: http://localhost:8000" . "/web/index.php");
exit;