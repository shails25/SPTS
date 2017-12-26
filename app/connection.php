<?php
    
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbdata = 'spts';
$msg = '';
$err = '';
$adderr = '';
$addmsg = '';
$delerr = '';
$delmsg = '';
$srcherr = '';
$srchmsg = '';
$uperr = '';
$upmsg = '';
$feederr = '';
$feedmsg = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbdata);
$dbselect = mysqli_select_db($conn,$dbdata);

if(!$conn){
    $err =  'connection failed';
    mysqli_close($conn);
}
if(!$dbselect){
    $err =  'Databse not found';
    mysqli_close($conn);
}

