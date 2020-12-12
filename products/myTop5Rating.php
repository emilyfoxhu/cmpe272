<?php
    $servername="us-cdbr-east-02.cleardb.com";
    $username="b4f09a430a2ca0";
    $password="ca8322d2";
    $dbname = "heroku_b359504503ae920";
    if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
        die("Cannot connect to database");

    //productName,AVGrating,ReviewNum
    $result = mysqli_query($conn,"SELECT productName, AVG(rating) as AVGrating, count(rating) as ReviewNum from heroku_b359504503ae920.rating group by productName order by AVGrating desc limit 5");

    for ($counter = 0; $row = mysqli_fetch_row($result); $counter++){

        foreach($row as $key => $value)
            print("$value");

    }
    mysqli_close($conn);
?>