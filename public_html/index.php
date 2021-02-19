<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$host = 'database';
$user = 'root';
$pass = '111111';
$db = 'root';
$link = null;
if(phpversion() == '5.2.17'){
    $link = mysql_connect($host, $user, $pass);
    if($link){
        $db = mysql_select_db($db, $link);
    } else {
        echo mysql_error();
    }    
} else {
    $link = mysqli_connect($host, $user, $pass, $db);
    if(!$link){
        echo mysqli_error();
    }
}
var_dump($link);
phpinfo();