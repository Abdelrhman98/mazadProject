<?php
session_start();
require_once "class/database.class.php";
require_once "class/user.class.php";
ini_set('display_errors', 1);//this for show errs
error_reporting(~0);// the same target

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset='utf-8' />
    <link rel="stylesheet" href="fonts/SEGOEUI.ttf"/>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/frontEnd.css" />
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
</head>

