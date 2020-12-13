<?php
//session_start();
//session_destroy();
//header('location:products.php');

include_once("myhistory.php");

session_start();
session_destroy();
//header('location:products.php');
header('location:https://dzaivc.com/mainhomepage.php');

//$servername="us-cdbr-east-02.cleardb.com";
//$username="b4f09a430a2ca0";
//$password="ca8322d2";
//$dbname = "heroku_b359504503ae920";
//if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
//    die("Cannot connect to database");

////delete all data from history table
//$sql = "truncate table heroku_b359504503ae920.history";
//$query = mysqli_query($conn, $sql);
//mysqli_close($conn);

?>