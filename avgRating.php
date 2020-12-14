<?php
    $servername="us-cdbr-east-02.cleardb.com";
    $username="b4f09a430a2ca0";
    $password="ca8322d2";
    $dbname = "heroku_b359504503ae920";
    if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
        die("Cannot connect to database");

    //productName,AVGrating,ReviewNum
    $result = mysqli_query($conn,"SELECT productName, cast(AVG(rating) as decimal(2,1)) as avg, count(rating) as ReviewNum, id from heroku_b359504503ae920.rating group by productName order by avg desc limit 5");

    $products = [];
    $count = 0;
    while ($row = mysqli_fetch_row($result)) {
        array_push($row, "http://www.yi-playground.com/products");
        $products[$count] =  $row;
        $count += 1;
    }
    echo json_encode($products);
?>