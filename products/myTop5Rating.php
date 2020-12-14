<table border="5" cellpadding="0" cellspacing="2">
    <tr><td>Product Name</td>
        <td>Average Rating</td></tr>
<?php
    $servername="us-cdbr-east-02.cleardb.com";
    $username="b4f09a430a2ca0";
    $password="ca8322d2";
    $dbname = "heroku_b359504503ae920";
    if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
        die("Cannot connect to database");

    //productName,AVGrating,ReviewNum
    $result = mysqli_query($conn,"SELECT productName, cast(AVG(rating) as decimal(2,1)) as AVGrating from heroku_b359504503ae920.rating group by productName order by AVGrating desc limit 5");

    for ($counter = 0; $row = mysqli_fetch_row($result); $counter++){

        foreach($row as $key => $value){
            print("<tr>");
            foreach($row as $key => $value)
                print("<td>$value</td>");
            print("</tr>");
        }
    }
    mysqli_close($conn);
?>
</table>
