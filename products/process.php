<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BreadnSweets</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/brush-script-std:n4:default;unifrakturcook:n7:default;devonshire:n4:default.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <header>
        <div class="primary_header">
            <footer><em><a href="../lab_in_class/index.php">&nbsp; Lab in Class</a></em></footer>
            <h1 class="title"> Bread &amp; Sweets</h1>
        </div>
        <nav class="secondary_header" id="menu">
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="../about.html">ABOUT</a></li>
                <li><a href="../products.html">PRODUCTS</a></li>
                <li><a href="../services.html">SERVICES</a></li>
                <li><a href="../news.html">NEWS</a></li>
                <li><a href="../contact.php">CONTACTS</a></li>
                <li><a href="../user.html">USER</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2 class="noDisplay">Main Content</h2>
        <article class="left_article">
            <h3>&nbsp;</h3>
            <p>Thanks for your review!</p>

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
            $sql1 = "SELECT AVG(rating) as AVGRATE from heroku_b359504503ae920.rating where productName=" . "$type";
            $result1 = mysqli_query($conn, $sql1);

            //total rating number
            $sql2 = "SELECT count(rating) as TotalRating from heroku_b359504503ae920.rating where productName=" . $type;
            $result2 = mysqli_query($conn,sql2);

            //display all the rating details
            $sql3 = "SELECT rating,review from heroku_b359504503ae920.rating where productName=" . $type . " group by rating order by rating desc";
            $result3 = mysqli_query($conn, $sql3);

            ?>
            <p>Average Rating of this product:<?php echo $result1;?></p>
            <p>Total rating number of this product:<?php echo $result2;?></p>
            <p>Review & Ratings:</p>
            <p>
            <table border="5" cellpadding="0" cellspacing="2">
                <tr><td bgcolor='#00bfff'>Rating</td>
                    <td bgcolor='#00bfff'>Review</td></tr>
                <?php
                for ($counter = 0; $row = mysqli_fetch_row($result3); $counter++){
                    print("<tr>");
                    foreach($row as $key => $value)
                        print("<td>$value</td>");
                    print("</tr>");
                }
                mysqli_close($conn);
                ?>
            </table>
            </p>
        </article>
    </section>

    <div class="row"> </div>
    <div class="row blockDisplay">
        <div class="column_half left_half">
            <h2 class="column_title"><strong>J O I N</strong></h2>
        </div>
        <div class="column_half right_half">
            <h2 class="column_title"><strong>U S !</strong></h2>
        </div>
    </div>
    <div class="social">
        <p class="social_icon"><img src="../images/foot1.jpg" alt="" width="100" height="0" class="thumbnail"/></p>
        <p class="social_icon"><img src="../images/foot2.jpg" width="204" alt="" class="thumbnail"/></p>
        <p class="social_icon"><img src="../images/foot3.jpg" width="900" alt="" class="thumbnail"/></p>
        <p class="social_icon"><img src="../images/foot4.jpg" width="1137" alt="" class="thumbnail"/></p>
    </div>
    <footer class="secondary_header footer">
        <div class="copyright">&copy;2020 - BREAD&amp;SWEETS WEBPAGE&nbsp; <strong>&nbsp;</strong></div>
    </footer>
</div>
</body>
</html>
