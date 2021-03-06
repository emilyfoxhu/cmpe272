<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BreadnSweets</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/brush-script-std:n4:default;unifrakturcook:n7:default;devonshire:n4:default.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
    <header>
        <div class="primary_header">
            <h1 class="title"> Bread &amp; Sweets</h1>
        </div>
        <nav class="secondary_header" id="menu">
            <ul>
                <li><a href="destroy.php">Market</a></li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="products.php">PRODUCTS</a></li>
                <li><a href="services.html">SERVICES</a></li>
                <li><a href="news.html">NEWS</a></li>
                <li><a href="contact.php">CONTACTS</a></li>
                <li><a href="user.html">USER</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <article class="left_article">
        <h3>&nbsp;</h3>
        <h3>Search&nbsp;Results</h3>
        <p>
        <?php
            extract($_POST);
            $selected = $_POST['select'];
            if (!$selected)
                print("Please choose an option to search results!");

            $query = "SELECT " . $selected . " FROM heroku_b359504503ae920.user";

            if (!($link = mysqli_connect("us-cdbr-east-02.cleardb.com", "b4f09a430a2ca0", "ca8322d2")))
                die("Cannot connect to database");

            if (!mysqli_select_db($link, "heroku_b359504503ae920"))
                die("Cannot open heroku database");

            if (!($result = mysqli_query($link, $query))){
                die(mysqli_error());
            }
        ?>
        </p>
        <p>
        <table border = "1" cellpadding="3" cellspacing="2" style="background-color: #FFF439">
            <?php
                for ($counter = 0; $row = mysqli_fetch_row($result); $counter++){
                    print("<tr>");
                    foreach($row as $key => $value)
                        print("<td>$value</td>");
                    print("</tr>");
                }
                mysqli_close($link);
            ?>
        </table>
        </p>
        <p><br/>Your search yielded <strong><?php print("$counter") ?></strong></p>
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
        <p class="social_icon"><img src="images/foot1.jpg" alt="" width="100" height="0" class="thumbnail"/></p>
        <p class="social_icon"><img src="images/foot2.jpg" width="204" alt="" class="thumbnail"/></p>
        <p class="social_icon"><img src="images/foot3.jpg" width="900" alt="" class="thumbnail"/></p>
        <p class="social_icon"><img src="images/foot4.jpg" width="1137" alt="" class="thumbnail"/></p>
    </div>
    <footer class="secondary_header footer">
        <div class="copyright">&copy;2020 - BREAD&amp;SWEETS WEBPAGE&nbsp; <strong>&nbsp;</strong></div>
    </footer>
</div>
</body>
</head>
</html>
