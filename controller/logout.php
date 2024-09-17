<?php
require "../model/function.php";

$_SESSION = [];
session_unset();
session_destroy();
header("Location: ../view/login.php");
?>