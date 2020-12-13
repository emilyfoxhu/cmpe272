<?php
    extract($_POST);
    setcookie("Flan", 1 + $_COOKIE['Flan'], time() + 60*5);

    // Include the history functionality
    include_once('../history.php');
?>

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
        <h1 class="title"> Bread &amp; Sweets</h1>
    </div>
    <nav class="secondary_header" id="menu">
      <ul>
        <li><a href="../destroy.php">Market</a></li>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="../about.html">ABOUT</a></li>
        <li><a href="../products.php">PRODUCTS</a></li>
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
      <h3>Flan</h3>
	  <p>Flan is similar to pudding, with a thick layer of caramel topped on a vanilla custard. The most common configuration is called Flan de leche. The custard also has coffee and cocoa flavors, and can also be paired with strawberries and other fruits.</p>
	  <p><strong>Price: $5.00</strong></p>
	  <p>Calories 3927.7kJ/1100.3kcal</p>
      <p>Protein 32.0g</p>
	  <p>Carbohydrates 200.1g</p>
	  <p>Fat 78.8g</p>
	  <p>Fiber 1.2g</p>
        <br/><br/>
        <h3>add review and rating&nbsp;</h3>
        <form method = "post" action = "process.php">
            <p>
                <label for="rating">Rating:</label>
                <select name = "select">
                    <option value="" disabled selected>choose rating</option>
                    <option value=5>5</option>
                    <option value=4>4</option>
                    <option value=3>3</option>
                    <option value=2>2</option>
                    <option value=1>1</option>
                </select>
            </p>
            <p>
                <label for="review">Review:</label>
                <input type="text" name="review" id="review">
            </p>
            <input type="hidden" name="type" value="Flan">
            <p>
                <input type="submit" value="Submit Rating">
            </p>
        </form>

<strong></strong>    </article>
    <aside class="right_article"><img src="../images/product5.jpg" alt="" width="750" height="500" class="placeholder"/> </aside>
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
