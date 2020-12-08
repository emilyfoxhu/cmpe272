<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BreadnSweets</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/brush-script-std:n4:default;unifrakturcook:n7:default;devonshire:n4:default.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
        <footer><em>
            <form action="https://dzaivc.com/mainhomepage.php">
                <input type="submit" value="Back to Market" />
            </form>
        </em></footer>
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
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
      <h3>&nbsp;</h3>
      <h3>products</h3>
        <a href="myhistory.php">tracking users</a><br/>
        <?php

        // Include the history functionality
        include_once('history.php');

        // Displaying the contents of history for checking
        $ct = 0;
        foreach($_SESSION['pageadd'] as $pageadd)
        {
            $ct = $ct+1;
            echo 'Page History Entry #'.$ct.' of '.
                count($_SESSION['pageadd']).' is '.$pageadd.'<br>';
        }
        echo '<br>';

        // Include a page to allow destroying the session
        // (for code check purpose)
        echo "<a href=destroy.php>Destroy Session</a>";
        ?>

    <strong></strong>    </article>
    <div class="row">
        <div class="columns">
          <form action="products/product1.php" method="post">
          <p class="thumbnail_align"> <a href="products/product1.php"> <img src="images/product1.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Chiffon Cake</h4>
        </div>
        <div class="columns">
          <form action="products/product2.php" method="post">
          <p class="thumbnail_align"> <a href="products/product2.php"> <img src="images/product2.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Fruit Cake</h4>
        </div>
        <div class="columns">
          <form action="products/product3.php" method="post">
          <p class="thumbnail_align"> <a href="products/product3.php"> <img src="images/product3.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Matcha Cake</h4>
        </div>
        <div class="columns">
          <form action="products/product4.php" method="post">
          <p class="thumbnail_align"> <a href="products/product4.php"> <img src="images/product4.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Cup Cake</h4>
        </div>
      </div>
    <div class="row">
        <div class="columns">
          <form action="products/product5.php" method="post">
          <p class="thumbnail_align"> <a href="products/product5.php"> <img src="images/product5.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Flan</h4>
        </div>
        <div class="columns">
          <form action="products/product6.php" method="post">
          <p class="thumbnail_align"> <a href="products/product6.php"> <img src="images/product6.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Churros</h4>
        </div>
        <div class="columns">
          <form action="products/product7.php" method="post">
          <p class="thumbnail_align"> <a href="products/product7.php"> <img src="images/product7.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Turron</h4>
        </div>
        <div class="columns">
          <form action="products/product8.php" method="post">
          <p class="thumbnail_align"> <a href="products/product8.php"> <img src="images/product8.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Marzipan</h4>
        </div>
    </div>
    <div class="row">
        <div class="columns">
          <form action="products/product9.php" method="post">
          <p class="thumbnail_align"> <a href="products/product9.php"> <img src="images/product9.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Crema Catalana</h4>
        </div>
        <div class="columns">
          <form action="products/product10.php" method="post">
          <p class="thumbnail_align"> <a href="products/product10.php"> <img src="images/product10.jpg" alt="" class="thumbnail"/> </a></p>
          </form>
          <h4>Torreja</h4>
        </div>
    </div>
    <article class="left_article">
      <div>
          <p><a href="products/fiveLastVisited.php"> Click here to see your last five previously visited products!</a></p>
          <p><a href="products/fiveMostVisited.php"> Click here to show your five most visited products!</a></p>
          <p><a href="products/top5RatingProducts.php"> Click here to see Top five rating products!</a></p>
      </div>

        <aside class="right_article"> </aside>
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
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
