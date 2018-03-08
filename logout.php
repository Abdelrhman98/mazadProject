<?php
session_unset(); 
session_destroy(); 
header("location:login.php");
require_once "init.php";
$master = new user();
$master->logOut();