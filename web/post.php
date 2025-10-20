
<?php
session_start();
if (isset($_POST["login"]) && trim($_POST["login"])!=="") {
  $_SESSION["login"] = trim($_POST["login"]);
}
header("Location: http://localhost:8000" . "/web/index.php");
exit;