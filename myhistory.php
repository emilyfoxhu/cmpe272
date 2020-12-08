<?php

// Include the history functionality
include_once('history.php');

$servername="us-cdbr-east-02.cleardb.com";
$username="b4f09a430a2ca0";
$password="ca8322d2";
$dbname = "heroku_b359504503ae920";
$ct = 0;

if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
    die("Cannot connect to database");

// Displaying the contents of history for checking

foreach($_SESSION['pageadd'] as $pageadd)
{
    $ct = $ct+1;
    $output = 'Page History Entry #'.$ct.' of '.count($_SESSION['pageadd']).' is '.$pageadd;
    //insert sql
    $sql = "INSERT INTO heroku_b359504503ae920.history(id, history) VALUES ('$ct', '$output')";
    $query = mysqli_query($conn, $sql);
}

$sql3 = "SELECT history from heroku_b359504503ae920.history";
$result = mysqli_query($conn, $sql3);
for ($counter = 0; $row = mysqli_fetch_row($result); $counter++){
    foreach($row as $key => $value){
        print("$value");
        ?><br/><?php
    }
}
mysqli_close($conn);
echo '<br>';


// Include a page to allow destroying the session
// (for code check purpose)
?>