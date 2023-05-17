<?php

$vt_sunucu="localhost";
$user="root";
$vt_pw = "";
$vt_db="students";

$connect=mysqli_connect($vt_sunucu,$user,$vt_pw,$vt_db);
if(!$connect)
{
    die("Database connection unsuccesful.".mysqli_connect_error());
}

?>