<?php
session_start();

session_destroy();
header("Location: http://localhost/UKL1/login/index.php");

?>