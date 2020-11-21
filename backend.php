<?php
extract($_POST);
$select = $_POST['select'];

$servername="us-cdbr-east-02.cleardb.com";
$username="b4f09a430a2ca0";
$password="ca8322d2";
$dbname = "heroku_b359504503ae920";
$sql = "INSERT INTO heroku_b359504503ae920.yes(choose) VALUES ('$select')";

if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
	 die("Cannot connect to database");

//insert rating into db
$query = mysqli_query($conn, $sql);


?>