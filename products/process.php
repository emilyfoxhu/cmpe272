<?php
$servername="us-cdbr-east-02.cleardb.com";
$username="b4f09a430a2ca0";
$password="ca8322d2";
$dbname = "heroku_b359504503ae920";

extract($_POST);
$select = $_POST['select'];
if (!$select)
    print("Please choose a rating");
$review = $_POST['review'];
$type = $_POST['type'];

//insert sql
$sql = "INSERT INTO heroku_b359504503ae920.rating(productName, rating, review) VALUES ('$type', '$select', '$review')";

if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
     die("Cannot connect to database");

//insert rating into db
$query = mysqli_query($conn, $sql);

//average rating result
//$query = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from heroku_b359504503ae920.rating");
//$row = mysqli_fetch_array($query);
//$AVGrating=$row['$AVGrating'];
//
////total rating number
//$query = mysqli_query($conn,"SELECT count(rating) as TotalRating from heroku_b359504503ae920.rating");
//$row = mysqli_fetch_array($query);
//$TotalRating=$row['$TotalRating'];
//
////total review number
//$query = mysqli_query($conn,"SELECT count(review) as TotalReview from heroku_b359504503ae920.rating");
//$row = mysqli_fetch_array($query);
//$TotalReview=$row['$TotalReview'];
//
//$review = mysqli_query($conn,"SELECT rating,review from heroku_b359504503ae920.rating");
//$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from heroku_b359504503ae920.rating group by rating order by rating desc");

?>