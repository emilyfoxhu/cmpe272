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
            <footer><em><a href="lab_in_class/index.php">&nbsp; Lab in Class</a></em></footer>
            <h1 class="title"> Bread &amp; Sweets</h1>
        </div>
        <nav class="secondary_header" id="menu">
            <ul>
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
        <p>
        <?php
            extract($_POST);
            //assign _POST array members to username and password
            $USERNAME = $_POST['USERNAME'];
            $PASSWORD = $_POST['PASSWORD'];
            $userVerified = 0; //if username is verified
            if (!$USERNAME && !$PASSWORD){
                print("<p>Please enter your username and password.</p>");//bothFieldsBlank
                //die();
            } elseif (!$USERNAME){
                print("<p>Your username cannot be blank.</p>");//nameFieldBlank
                //die();
            } elseif (!$PASSWORD){
                print("<p>Your password cannot be blank.</p>");//passwordFieldBlank
                //die();
            }

            if (!($file = fopen("password.txt", "r"))){
                print("<p>Error! Could not reach password file.</p>");
                die();
            }
            //do a loop to check username and password
            while (!feof($file) && !$userVerified){
                $line = fgets($file, 255);
                $line = chop($line);
                $field = explode(",", $line, 2);//split username and password by , and form an array
                if ($USERNAME == $field[0]){//verify username
                    $userVerified = 1;
                    if($PASSWORD == $field[1]){//verify password
                        print("<p><strong>Thank you! Enjoy our secret page!</strong></p>");
        ?>
        <p><strong>Here is the list of the current users of our website:</strong></p>
        <p>Manager: Yi Hu</p>
        <p>Emily List</p>
        <p>Martin Smith</p>
        <p>Eleanor Wang</p>
        <p>Charlie Brown</p>
        <p>Elvin Johnson</p>
        <p>Mary Moore</p>
        <p>Harry Lee</p>
        <p>Allen Walker</p>
        <p>Edwin White</p>
        <p>Sherlotte Wood</p>
        <p>Sherry Snow</p>
        <p>Victor Wane</p>
        <p>Christ Li</p>
        <p>Yi Chen</p>
        <p>Micheal Jackson</p>
        <p>Tom Deep</p>
        <p>Ron Weasly</p>
        <p>Alex Lane</p>
        <p>Lyn Lee</p>
        <?php
                    } else{
                        print("<p>Access Denied! Not able to log in!</p>");
                    }
                }
            }
            fclose($file);
            if (!$userVerified){//if username does not exist, fail to log in
                print("<p>The username does not exist! Failed to log in.</p>");
            }
        ?>
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
