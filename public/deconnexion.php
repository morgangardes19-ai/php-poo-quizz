<?php
session_start();
require_once "../utils/isConnected.php";

unset($_SESSION['utilisateur']);

header("Location: ../public/index.php");
exit();
