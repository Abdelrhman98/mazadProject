<?php
/*
 ************** this file include for globals ********************
 *           this V.1.0 of mazad website at 11 MAR 2018          *
 *          this file contains global config file                *
 *****************************************************************
*/
/* START OF DEFINES */
define("ROOT_DIR", __DIR__); // to get root file of project
define("SEP", "/"); // to set our separator
define("STYLE_DIR", "css/styles"); // set STYLE dir
define("STYLE_EX",".css"); // set exetention of style
define("HOST", "localhost");// host name
define("DB_NAME", "mazad"); // name of data base
define("DB_USER", "root"); // user name of database
define("DB_PASS", "1234A"); // password of data base
/* END OF DEFINES */

function ls($dir = ""){
    return scandir( ROOT_DIR . SEP . $dir);
}

function includeStyles(){
    $allStyles = ls(STYLE_DIR); // get all files on style folder
    for($i = 2; $i < sizeof($allStyles); $i++){
        if(substr($allStyles[$i], -4) == STYLE_EX) // if file is .css include it
            echo '<link rel="stylesheet" href="' . STYLE_DIR . SEP . $allStyles[$i] . '"/>';
    }//end of for
}// end of function includeStyle

function getLastId($tableName, $colName= 'id'){
    $db = new dataBase(HOST, DB_NAME, DB_USER, DB_PASS);
    $db->setTable($tableName);
    $allData = $db->select();
    $sz = (int)sizeof($allData);
    return ($sz > 0 )?$allData[$sz - 1][$colName]:-1;
}// end of function getLastId

function isLogin(){
    return (isset($_SESSION['firstName']));
}