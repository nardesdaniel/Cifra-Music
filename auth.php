<?php
session_start();
// proteção de login
if (!isset($_SESSION["logado"])) {
    header("Location: index.php");
    exit();
}
// impedir cache
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


?>